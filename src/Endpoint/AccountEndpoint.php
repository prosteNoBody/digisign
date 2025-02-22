<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Endpoint;

use DigitalCz\DigiSign\DigiSign;
use DigitalCz\DigiSign\Resource\Account;
use DigitalCz\DigiSign\Resource\AccountBilling;
use DigitalCz\DigiSign\Resource\AccountManageBilling;
use DigitalCz\DigiSign\Resource\AccountSmsLog;
use DigitalCz\DigiSign\Resource\AccountStatistics;
use DigitalCz\DigiSign\Resource\ListResource;

/**
 * @extends ResourceEndpoint<Account>
 */
final class AccountEndpoint extends ResourceEndpoint
{
    public function __construct(DigiSign $parent)
    {
        parent::__construct($parent, '/api/account', Account::class);
    }

    public function me(): AccountMeEndpoint
    {
        return new AccountMeEndpoint($this);
    }

    public function settings(): AccountSettingsEndpoint
    {
        return new AccountSettingsEndpoint($this);
    }

    public function messaging(): AccountMessagingEndpoint
    {
        return new AccountMessagingEndpoint($this);
    }

    public function security(): AccountSecurityEndpoint
    {
        return new AccountSecurityEndpoint($this);
    }

    public function requests(): AccountRequestsEndpoint
    {
        return new AccountRequestsEndpoint($this);
    }

    public function envelopeTemplate(): AccountEnvelopeTemplateEndpoint
    {
        return new AccountEnvelopeTemplateEndpoint($this);
    }

    public function apiKeys(): AccountApiKeysEndpoint
    {
        return new AccountApiKeysEndpoint($this);
    }

    public function users(): AccountUsersEndpoint
    {
        return new AccountUsersEndpoint($this);
    }

    public function certificates(): AccountCertificatesEndpoint
    {
        return new AccountCertificatesEndpoint($this);
    }

    public function brandings(): AccountBrandingsEndpoint
    {
        return new AccountBrandingsEndpoint($this);
    }

    public function signatureScenarios(): AccountSignatureScenariosEndpoint
    {
        return new AccountSignatureScenariosEndpoint($this);
    }

    public function identifyScenarios(): AccountIdentifyScenariosEndpoint
    {
        return new AccountIdentifyScenariosEndpoint($this);
    }

    public function get(): Account
    {
        return $this->makeResource($this->getRequest());
    }

    /**
     * @param mixed[] $query
     * @return ListResource<AccountSmsLog>
     */
    public function smsLog(array $query = []): ListResource
    {
        return $this->createListResource($this->getRequest('/sms-log', ['query' => $query]), AccountSmsLog::class);
    }

    /**
     * @param mixed[] $query
     */
    public function statistics(array $query = []): AccountStatistics
    {
        return $this->createResource(
            $this->getRequest('/statistics', ['query' => $query]),
            AccountStatistics::class,
        );
    }

    public function billing(): AccountBilling
    {
        return $this->createResource($this->getRequest('/billing'), AccountBilling::class);
    }

    public function manageBilling(): AccountManageBilling
    {
        return $this->createResource($this->postRequest('/manage-billing'), AccountManageBilling::class);
    }
}

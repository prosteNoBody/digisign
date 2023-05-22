<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Resource;

use DateTime;

class MyEnvelope extends BaseResource
{
    public string $id;
    public string $status;
    public string $emailSubject;
    public string $emailBody;
    public ?string $senderName = null;
    public ?string $senderEmail = null;
    public ?DateTime $sentAt = null;

    /** @var Collection<MyEnvelopeDocument> */
    public Collection $documents;

    /** @var Collection<MyEnvelopeRecipient> */
    public Collection $recipients;
}

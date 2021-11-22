<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Resource;

class EnvelopeProperties extends BaseResource
{
    /** @var bool */
    public $mergeDocuments;

    /** @var string|null */
    public $mergedDocumentName;

    /** @var bool */
    public $declineAllowed;

    /** @var bool */
    public $declineReasonRequired;
}

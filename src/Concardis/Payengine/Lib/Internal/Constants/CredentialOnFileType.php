<?php

namespace Concardis\Payengine\Lib\Internal\Constants;

/**
 * Indicates whether a transaction qualifies as an authenticated transaction or account verification.
 *
 * @see https://docs.payengine.de/3dsecure/credentials_on_file_introduction
 */
class CredentialOnFileType
{
    /**
     * The payment instrument is persisted, recurring and can be used for oneClick payments.
     */
    const ONECLICK = 'ONECLICK';

    /**
     * The payment instrument is persisted, recurring and can be used for merchant initiated unscheduled orders.
     */
    const UNSCHEDULED = 'UNSCHEDULED';

    /**
     * The payment instrument is persisted, recurring and can be used for merchant initiated scheduled or instalments orders.
     */
    const SCHEDULED = 'ONECLICK';
}

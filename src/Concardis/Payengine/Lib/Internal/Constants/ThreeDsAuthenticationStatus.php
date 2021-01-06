<?php

namespace Concardis\Payengine\Lib\Internal\Constants;


/**
 * Indicates whether a transaction qualifies as an authenticated transaction or account verification.
 *
 * @see https://docs.payengine.de/3dsecure/3dsecure_v2_notifications
 */
class ThreeDsAuthenticationStatus
{
    /**
     * Y = authentication successful
     */
    const AUTHENTICATION_SUCCESSFUL = 'Y';

    /**
     * N = not authenticated; transaction denied
     */
    const AUTHENTICATION_DENIED = 'N';

    /**
     * U = authentication could not be performed; technical or other problem
     */
    const AUTHENTICATION_FAILED = 'U';

    /**
     * A = attempts processing performed; not attempted
     */
    const AUTHENTICATION_ATTEMPTED = 'A';

    /**
     * R = authentication rejected; issuer is rejecting
     */
    const AUTHENTICATION_REJECTED = 'R';
}

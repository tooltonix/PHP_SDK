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
     * A = authentication attempted; not authenticated, but a proof of attempted authentication is provided
     */
    const AUTHENTICATION_ATTEMPTED = 'A';

    /**
     * C = challenge required; additional SCA authentication is required
     */
    const AUTHENTICATION_CHALLENGE_REQUIRED = 'C';

    /**
     * U = authentication could not be performed; technical or other problem
     */
    const AUTHENTICATION_FAILED = 'U';

    /**
     * R = authentication rejected; issuer is rejecting
     */
    const AUTHENTICATION_REJECTED = 'R';

    /**
     * N = not authenticated; transaction denied
     */
    const AUTHENTICATION_DENIED = 'N';
}

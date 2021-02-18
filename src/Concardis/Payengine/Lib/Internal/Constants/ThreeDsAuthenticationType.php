<?php

namespace Concardis\Payengine\Lib\Internal\Constants;

/**
 * The type of the authentication requested.
 *
 * @see https://docs.payengine.de/3dsecure/3dsecure_v2_notifications#parameters
 */
class ThreeDsAuthenticationType
{
    /**
     * Authentication with payment
     * The authentication is used for a normal payment transaction.
     */
    const PAYMENT_TRANSACTION = 'PAYMENT_TRANSACTION';

    /**
     * Authentication with payment
     * The authentication is used for an initial recurring payment transaction.
     */
    const RECURRING_TRANSACTION = 'RECURRING_TRANSACTION';

    /**
     * Authentication without payment
     * The authentication is used for a card check representing the initial recurring payment transaction.
     */
    const RECURRING_CARDCHECK = 'RECURRING_CARDCHECK';

    /**
     * Authentication without payment
     * The authentication is only used for the verification of stored card credentials, e.g. within a wallet.
     */
    const ADD_CARD = 'ADD_CARD';

    /**
     * Authentication without payment
     * The authentication is used for the digital verification of the cardholder forcing a strong customer authentication.
     */
    const CARDHOLDER_VERIFICATION = 'CARDHOLDER_VERIFICATION';
}

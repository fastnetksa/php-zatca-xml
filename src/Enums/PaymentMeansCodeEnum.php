<?php

namespace Saleh7\Zatca\Enums;

/**
 * Class PaymentMeansCodeEnum
 *
 * Provides constant values for each supported payment means code.
 */
class PaymentMeansCodeEnum
{
    /**
     * Not defined legally enforceable agreement between two or more parties
     * (expressing a contractual right or a right to the payment of money).
     */
    public const InstrumentNotDefined = '1';

    /**
     * Payment by currency (including bills and coins) in circulation, including
     * checking account deposits.
     */
    public const Cash = '10';

    /**
     * Payment by a pre-printed form on which instructions are given to an
     * account holder (a bank or building society) to pay a stated sum to a named
     * recipient.
     */
    public const Cheque = '20';

    /**
     * Payment by credit movement of funds from one account to another.
     */
    public const CreditTransfer = '30';

    /**
     * Payment by debit movement of funds from one account to another.
     */
    public const DebitTransfer = '31';

    /**
     * Payment by an arrangement for settling debts that is operated by the Post
     * Office.
     */
    public const PaymentToBankAccount = '42';

    /**
     * Payment by means of a card issued by a bank or other financial
     * institution.
     */
    public const BankCard = '48';
}

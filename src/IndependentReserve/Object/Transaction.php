<?php

namespace IndependentReserve\Object;

use DateTime;

class Transaction extends AbstractObject
{
    /**
     * Running balance in account.
     * @return double
     */
    public function getBalance()
    {
        return $this->object->Balance;
    }

    /**
     * Related Bitcoin network transaction.
     * @return string|null
     */
    public function getBitcoinTransactionId()
    {
        return $this->object->BitcoinTransactionId;
    }

    /**
     * Related Bitcoin network transaction output index.
     * @return string|null
     */
    public function getBitcoinTransactionOutputIndex()
    {
        return $this->object->BitcoinTransactionOutputIndex;
    }

    /**
     * Comments related to transaction.
     * @return string|null
     */
    public function getComment()
    {
        return $this->object->Comment;
    }

    /**
     * UTC created timestamp of transaction.
     * @return DateTime
     */
    public function getCreatedTimestamp()
    {
        return new DateTime($this->object->CreatedTimestampUtc);
    }

    /**
     * Credit amount.
     * @return double|null
     */
    public function getCredit()
    {
        return $this->object->Credit;
    }

    /**
     * Currency of account this transaction relates to.
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->object->CurrencyCode;
    }

    /**
     * Debit amount
     * @return double
     */
    public function getDebit()
    {
        return $this->object->Debit;
    }

    /**
     * UTC settlement timestamp.
     * @return DateTime
     */
    public function getSettleTimestamp()
    {
        return new DateTime($this->object->SettleTimestampUtc);
    }

    /**
     * Transaction status.
     * @return string
     */
    public function getStatus()
    {
        return $this->object->Status;
    }

    /**
     * Transaction type.
     * @return string
     */
    public function getType()
    {
        return $this->object->Type;
    }
}

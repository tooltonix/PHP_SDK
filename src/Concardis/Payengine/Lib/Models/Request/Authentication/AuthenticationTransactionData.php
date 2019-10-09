<?php

namespace Concardis\Payengine\Lib\Models\Request\Authentication;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Models\Request\Orders\Async;
use Concardis\Payengine\Lib\Models\Request\Orders\Risk;
use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;

class AuthenticationTransactionData extends AbstractModel
{

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $recurringExpiry;

    /**
     * @var int
     */
    private $recurringFrequency;

	/**
	 * @return int
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * @param int $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	/**
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * @param string $currency
	 */
	public function setCurrency($currency) {
		$this->currency = $currency;
	}

	/**
	 * @return string
	 */
	public function getRecurringExpiry() {
		return $this->recurringExpiry;
	}

	/**
	 * @param string $recurringExpiry
	 */
	public function setRecurringExpiry($recurringExpiry) {
		$this->recurringExpiry = $recurringExpiry;
	}

	/**
	 * @return int
	 */
	public function getRecurringFrequency() {
		return $this->recurringFrequency;
	}

	/**
	 * @param int $recurringFrequency
	 */
	public function setRecurringFrequency($recurringFrequency) {
		$this->recurringFrequency = $recurringFrequency;
	}
	
}

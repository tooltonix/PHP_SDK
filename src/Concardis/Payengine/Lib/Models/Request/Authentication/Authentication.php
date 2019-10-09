<?php

namespace Concardis\Payengine\Lib\Models\Request\Authentication;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Models\Request\Orders\Async;
use Concardis\Payengine\Lib\Models\Request\Orders\Risk;
use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;

class Authentication extends AbstractModel
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $customerId;

    /**
     * @var string
     */
    private $shippingAddressId;

    /**
     * @var AuthenticationTransactionData
     */
    private $transactionData;

    /**
     * @var Risk
     */
    private $risk;

    /**
     * @var string
     */
    private $browserInfoId;

    /**
     * @var Async
     */
    private $async;

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getCustomerId() {
		return $this->customerId;
	}

	/**
	 * @param string $customerId
	 */
	public function setCustomerId($customerId) {
		$this->customerId = $customerId;
	}

	/**
	 * @return string
	 */
	public function getShippingAddressId() {
		return $this->shippingAddressId;
	}

	/**
	 * @param string $shippingAddressId
	 */
	public function setShippingAddressId($shippingAddressId) {
		$this->shippingAddressId = $shippingAddressId;
	}

	/**
	 * @return AuthenticationTransactionData
	 */
	public function getTransactionData() {
		return $this->transactionData;
	}

	/**
	 * @param AuthenticationTransactionData $transactionData
	 */
	public function setTransactionData($transactionData) {
		$this->transactionData = $transactionData;
	}

	/**
	 * @return Risk
	 */
	public function getRisk() {
		return $this->risk;
	}

	/**
	 * @param Risk $risk
	 */
	public function setRisk($risk) {
		$this->risk = $risk;
	}

	/**
	 * @return string
	 */
	public function getBrowserInfoId() {
		return $this->browserInfoId;
	}

	/**
	 * @param string $browserInfoId
	 */
	public function setBrowserInfoId($browserInfoId) {
		$this->browserInfoId = $browserInfoId;
	}

	/**
	 * @return Async
	 */
	public function getAsync() {
		return $this->async;
	}

	/**
	 * @param Async $async
	 */
	public function setAsync($async) {
		$this->async = $async;
	}

}

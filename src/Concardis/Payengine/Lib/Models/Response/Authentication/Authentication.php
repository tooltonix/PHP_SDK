<?php

namespace Concardis\Payengine\Lib\Models\Response\Authentication;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Orders\ThreeDsData\AuthenticationResult;

class Authentication extends AbstractResponseModel {

	const CLASSNAME = __CLASS__;

	protected $subModels = [
		'authenticationResult' => AuthenticationResult::CLASSNAME
	];

	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var  string
	 */
	protected $createdAt;

	/**
	 * @var string
	 */
	protected $modifiedAt;

	/**
	 * @var string
	 */
	protected $paymentInstrumentId;

	/**
	 * @var string
	 */
	protected $threeDsVersionId;

	/**
	 * @var Orders\ThreeDsData\AuthenticationResult
	 */
	protected $authenticationResult;

	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getCreatedAt() {
		return $this->createdAt;
	}

	/**
	 * @param string $createdAt
	 */
	public function setCreatedAt($createdAt) {
		$this->createdAt = $createdAt;
	}

	/**
	 * @return string
	 */
	public function getModifiedAt() {
		return $this->modifiedAt;
	}

	/**
	 * @param string $modifiedAt
	 */
	public function setModifiedAt($modifiedAt) {
		$this->modifiedAt = $modifiedAt;
	}

	/**
	 * @return string
	 */
	public function getPaymentInstrumentId() {
		return $this->paymentInstrumentId;
	}

	/**
	 * @param string $paymentInstrumentId
	 */
	public function setPaymentInstrumentId($paymentInstrumentId) {
		$this->paymentInstrumentId = $paymentInstrumentId;
	}

	/**
	 * @return string
	 */
	public function getThreeDsVersionId() {
		return $this->threeDsVersionId;
	}

	/**
	 * @param string $threeDsVersionId
	 */
	public function setThreeDsVersionId($threeDsVersionId) {
		$this->threeDsVersionId = $threeDsVersionId;
	}

	/**
	 * @return AuthenticationResult $authenticationResult
	 */
	public function getAuthenticationResult() {
		return $this->authenticationResult;
	}

	/**
	 * @param AuthenticationResult $authenticationResult
	 */
	public function setAuthenticationResult($authenticationResult) {
		$this->authenticationResult = $authenticationResult;
	}

}

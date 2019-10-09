<?php

namespace Concardis\Payengine\Lib\Models\Response\PaymentInstrument;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Orders\CredentialOnFile;
use Concardis\Payengine\Lib\Models\Response\Orders\ThreeDsData\AuthenticationResult\ErrorDetails;

class CardCheck extends AbstractResponseModel
{
	const CLASSNAME = __CLASS__;

    protected $subModels = array(
        'cofContract' => CredentialOnFile::CLASSNAME
    );

	/**
	 * @var string
	 */
    protected $id;

	/**
	 * @var string
	 */
	protected $createdAt;

	/**
	 * @var string
	 */
	protected $modifiedAt;

	/**
	 * @var string
	 */
	protected $status;

    /**
     * @var string
     */
	protected $threeDsAuthenticationId;

	/**
	 * @var CredentialOnFile
	 */
	protected $cofContract;

	/**
	 * @var ErrorDetails
	 */
	protected $errorDetails;

	/**
	 * @return array
	 */
	public function getSubModels() {
		return $this->subModels;
	}

	/**
	 * @param array $subModels
	 */
	public function setSubModels($subModels) {
		$this->subModels = $subModels;
	}

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
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @return string
	 */
	public function getThreeDsAuthenticationId() {
		return $this->threeDsAuthenticationId;
	}

	/**
	 * @param string $threeDsAuthenticationId
	 */
	public function setThreeDsAuthenticationId($threeDsAuthenticationId) {
		$this->threeDsAuthenticationId = $threeDsAuthenticationId;
	}

	/**
	 * @return CredentialOnFile
	 */
	public function getCofContract() {
		return $this->cofContract;
	}

	/**
	 * @param CredentialOnFile $cofContract
	 */
	public function setCofContract($cofContract) {
		$this->cofContract = $cofContract;
	}

	/**
	 * @return ErrorDetails
	 */
	public function getErrorDetails() {
		return $this->errorDetails;
	}

	/**
	 * @param ErrorDetails $errorDetails
	 */
	public function setErrorDetails($errorDetails) {
		$this->errorDetails = $errorDetails;
	}

}

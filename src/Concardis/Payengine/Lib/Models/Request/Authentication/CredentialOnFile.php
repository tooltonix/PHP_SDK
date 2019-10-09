<?php

namespace Concardis\Payengine\Lib\Models\Request\Authentication;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class CredentialOnFile extends AbstractModel {

	/**
	 * @var string Enum:"ONECLICK" "UNSCHEDULED" "SCHEDULED"
	 */
	private $type;

	/**
	 * @var string Enum: ECOM MOTO
	 */
	private $channel;

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
	public function getChannel() {
		return $this->channel;
	}

	/**
	 * @param string $channel
	 */
	public function setChannel($channel) {
		$this->channel = $channel;
	}

}

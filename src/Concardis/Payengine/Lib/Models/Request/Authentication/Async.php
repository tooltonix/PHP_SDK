<?php
namespace Concardis\Payengine\Lib\Models\Request\Authentication;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class Async extends AbstractModel
{

    /**
     * @var string
     */
    private $successUrl;

    /**
     * @var string
     */
    private $failureUrl;

    /**
     * @var string
     */
    private $notificationUrl;

    /**
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * @param string $successUrl
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * @return string
     */
    public function getFailureUrl()
    {
        return $this->failureUrl;
    }

    /**
     * @param string $failureUrl
     */
    public function setFailureUrl($failureUrl)
    {
        $this->failureUrl = $failureUrl;
    }

	/**
	 * @return string
	 */
	public function getNotificationUrl() {
		return $this->notificationUrl;
	}

	/**
	 * @param string $notificationUrl
	 */
	public function setNotificationUrl($notificationUrl) {
		$this->notificationUrl = $notificationUrl;
	}

}

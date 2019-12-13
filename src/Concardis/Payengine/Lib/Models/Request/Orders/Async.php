<?php
namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Models\Request\Orders\Notification\NotificationSubscription;

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
    private $cancelUrl;
    
	/**
	 * @var NotificationSubscription[]
	 */
    private $notifications;

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
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * @param string $cancelUrl
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }
    
	/**
	 * @param NotificationSubscription[]
	 */
	public function setNotifications(array $notificationSubscriptions)
	{
		$this->notifications = $notificationSubscriptions;
	}

	/**
	 * @param NotificationSubscription $notificationSubscription
	 */
	public function addNotification(NotificationSubscription $notificationSubscription)
	{
		$this->notifications[] = $notificationSubscription;
	}
	
	/**
	* @return NotificationSubscription[]
	*/
	public function getNotifications()
	{
		return $this->notifications;
	}

}

<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders\Notification;

use Concardis\Payengine\Lib\Models\Request\AbstractClass\AbstractOrder;

class NotificationSubscription extends AbstractOrder {

	const NOTIFICATION_VERSION_1 = '1.0';
	const NOTIFICATION_VERSION_2 = '2.0';
	
	const NOTIFICATION_STATE_CREATED = 'CREATED';
	const NOTIFICATION_STATE_UPDATED = 'UPDATED';

	const NOTIFICATION_TYPE_PREAUTH_PENDING   = 'trx.preauth.pending';
	const NOTIFICATION_TYPE_PREAUTH_SUCCESS   = 'trx.preauth.success';
	const NOTIFICATION_TYPE_PREAUTH_FAILURE   = 'trx.preauth.failure';
	const NOTIFICATION_TYPE_CANCEL_INITIATED  = 'trx.cancel.initiated';
	const NOTIFICATION_TYPE_CANCEL_SUCCESS    = 'trx.cancel.success';
	const NOTIFICATION_TYPE_CANCEL_FAILURE    = 'trx.cancel.failure';
	const NOTIFICATION_TYPE_DEBIT_PENDING     = 'trx.debit.pending';
	const NOTIFICATION_TYPE_DEBIT_INITIATED   = 'trx.debit.initiated';
	const NOTIFICATION_TYPE_DEBIT_SUCCESS     = 'trx.debit.success';
	const NOTIFICATION_TYPE_DEBIT_FAILURE     = 'trx.debit.failure';
	const NOTIFICATION_TYPE_CAPTURE_INITIATED = 'trx.capture.initiated';
	const NOTIFICATION_TYPE_CAPTURE_SUCCESS   = 'trx.capture.success';
	const NOTIFICATION_TYPE_CAPTURE_FAILURE   = 'trx.capture.failure';
	const NOTIFICATION_TYPE_REFUND_INITIATED  = 'trx.refund.initiated';
	const NOTIFICATION_TYPE_REFUND_SUCCESS    = 'trx.refund.success';
	const NOTIFICATION_TYPE_REFUND_FAILURE    = 'trx.refund.failure';
	const NOTIFICATION_TYPE_CREDIT_INITIATED  = 'trx.credit.initiated';
	const NOTIFICATION_TYPE_CREDIT_SUCCESS    = 'trx.credit.success';
	const NOTIFICATION_TYPE_CREDIT_FAILURE    = 'trx.credit.failure';
	const NOTIFICATION_TYPE_3DS_RESULT        = '3ds.result';

	/**
	 * @var string
	 */
	private $notificationUrn;

	/**
	 * Only if version 2.0 (default = 1.0)
	 * @var string
	 */
	private $notificationVersion;

	/**
	 * @deprecated - use Version 2.0 with events
	 * Only if version 1.0
	 * @var array of Enum string CREAED | UPDATED
	 */
	private $notificationState;

	/**
	 * Only if version 2.0
	 * @var array
	 */
	private $notificationEvent;

	/**
	 * @return string
	 */
	public function getNotificationUrn() {
		return $this->notificationUrn;
	}

	/**
	 * @param string $notificationUrn
	 */
	public function setNotificationUrn($notificationUrn) {
		$this->notificationUrn = $notificationUrn;
	}

	/**
	 * @return string
	 */
	public function getNotificationVersion() {
		return $this->notificationVersion;
	}

	/**
	 * @param string $notificationVersion
	 */
	public function setNotificationVersion($notificationVersion) {
		$this->notificationVersion = $notificationVersion;
	}

	/**
	 * @return array
	 */
	public function getNotificationState() {
		return $this->notificationState ? $this->notificationState : [];
	}

	/**
	 * @deprecated - use Version 2.0 with events
	 * @param array $notificationState
	 */
	public function setNotificationState(array $notificationStates) {
		$this->notificationState = $notificationStates;
	}

	/**
	 * @deprecated - use Version 2.0 with events
	 * @param string $notificationState
	 */
	public function addNotificationState($notificationState) {
		$this->notificationState[] = $notificationState;
	}

	/**
	 * @return array
	 */
	public function getNotificationEvent() {
		return $this->notificationEvent ? $this->notificationEvent : [];
	}

	/**
	 * @param array $notificationEvents
	 */
	public function setNotificationEvent(array $notificationEvents) {
		$this->notificationEvent = $notificationEvents;
	}

	/**
	 * @param string $notificationEvent
	 */
	public function addNotificationEvent($notificationEvent) {
		$this->notificationEvent[] = $notificationEvent;
	}

}

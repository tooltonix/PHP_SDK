<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders\Notification;

use Concardis\Payengine\Lib\Models\Request\AbstractClass\AbstractOrder;

class NotificationSubscription extends AbstractOrder {

	const NOTIFICATION_VERSION_1 = '1.0';
	const NOTIFICATION_VERSION_2 = '2.0';
	
	const NOTIFICATION_STATE_CREATED = 'CREATED';
	const NOTIFICATION_STATE_UPDATED = 'UPDATED';

	// v1 types
	const NOTIFICATION_TYPE_TRANSACTION_CREATE_SUCCESS                = 'transaction.create.success';
	const NOTIFICATION_TYPE_TRANSACTION_CREATE_FAILURE                = 'transaction.create.failure';
	const NOTIFICATION_TYPE_TRANSACTION_UPDATE_SUCCESS                = 'transaction.update.success';
	const NOTIFICATION_TYPE_TRANSACTION_UPDATE_FAILURE                = 'transaction.update.failure';
	const NOTIFICATION_TYPE_CUSTOMER_UPDATE_SUCCESS                   = 'customer.update.success';
	const NOTIFICATION_TYPE_CUSTOMER_UPDATE_FAILURE                   = 'customer.update.failure';
	const NOTIFICATION_TYPE_CUSTOMER_PERSONA_CREATE_SUCCESS           = 'customer.persona.create.success';
	const NOTIFICATION_TYPE_CUSTOMER_PERSONA_CREATE_FAILURE           = 'customer.persona.create.failure';
	const NOTIFICATION_TYPE_CUSTOMER_PERSONA_DUPLICATE_SUCCESS        = 'customer.persona.duplicate.success';
	const NOTIFICATION_TYPE_CUSTOMER_PAYMENTINSTRUMENT_ADD_SUCCESS    = 'customer.paymentInstrument.add.success';
	const NOTIFICATION_TYPE_CUSTOMER_PAYMENTINSTRUMENT_ADD_FAILURE    = 'customer.paymentInstrument.add.failure';
	const NOTIFICATION_TYPE_CUSTOMER_PAYMENTINSTRUMENT_DELETE_SUCCESS = 'customer.paymentInstrument.delete.success';
	const NOTIFICATION_TYPE_CUSTOMER_PAYMENTINSTRUMENT_DELETE_FAILURE = 'customer.paymentInstrument.delete.failure';
	const NOTIFICATION_TYPE_CUSTOMER_ADDRESS_CREATE_SUCCESS           = 'customer.address.create.success';
	const NOTIFICATION_TYPE_CUSTOMER_ADDRESS_CREATE_FAILURE           = 'customer.address.create.failure';
	const NOTIFICATION_TYPE_CUSTOMER_ADDRESS_DUPLICATE_SUCCESS        = 'customer.address.duplicate.success';
	const NOTIFICATION_TYPE_CUSTOMER_CREATE_SUCCESS                   = 'customer.create.success';
	const NOTIFICATION_TYPE_CUSTOMER_CREATE_FAILURE                   = 'customer.create.failure';
	const NOTIFICATION_TYPE_PAYMENTINSTRUMENT_CREATE_SUCCESS          = 'paymentInstrument.create.success';
	const NOTIFICATION_TYPE_PAYMENTINSTRUMENT_CREATE_FAILURE          = 'paymentInstrument.create.failure';
	const NOTIFICATION_TYPE_PAYMENTINSTRUMENT_EXPIRES                 = 'paymentInstrument.expires';
	const NOTIFICATION_TYPE_ORDER_CREATE_SUCCESS                      = 'order.create.success';
	const NOTIFICATION_TYPE_ORDER_CREATE_FAILURE                      = 'order.create.failure';
	const NOTIFICATION_TYPE_ORDER_UPDATE_SUCCESS                      = 'order.update.success';
	const NOTIFICATION_TYPE_ORDER_UPDATE_FAILURE                      = 'order.update.failure';

	// v2 types
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

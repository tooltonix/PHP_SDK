<?php

namespace Concardis\Payengine\Lib\Models\Request\Authentication;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class CredentialOnFile extends AbstractModel
{

    /**
     * @var string Enum:"ONECLICK" "UNSCHEDULED" "SCHEDULED"
     */
    private $type;

    /**
     * @var string Enum: ECOM MOTO
     */
    private $channel;

    /**
     * Date after which no further authorizations shall be performed
     *
     * @var string <date>
     */
    private $recurringExpiry;

    /**
     * Indicates the minimum number of days between authorizations [ 1 .. 9999 ]
     *
     * @var int
     */
    private $recurringFrequency;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return string
     */
    public function getRecurringExpiry()
    {
        return $this->recurringExpiry;
    }

    /**
     * @param string $recurringExpiry
     */
    public function setRecurringExpiry($recurringExpiry)
    {
        $this->recurringExpiry = $recurringExpiry;
    }

    /**
     * @return int
     */
    public function getRecurringFrequency()
    {
        return $this->recurringFrequency;
    }

    /**
     * @param int $recurringFrequency
     */
    public function setRecurringFrequency($recurringFrequency)
    {
        $this->recurringFrequency = $recurringFrequency;
    }
}

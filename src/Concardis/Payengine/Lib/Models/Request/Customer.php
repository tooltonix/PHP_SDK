<?php

namespace Concardis\Payengine\Lib\Models\Request;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class Customer extends AbstractModel
{
    /**
     * Email of the customer
     *
     * @var string
     */
    private $email;

    /**
     * Id for this customer on your System
     *
     * @var string
     */
    private $merchantCustomerId;

    /**
     * required for b2b: official name of the organization
     *
     * @var string|null
     */
    private $companyName;

    /**
     * required for b2b: when customer is an organization, this parameter has one possible value: 'organization'
     *
     * @var string|null
     */
    private $customerType;

    /**
     * optional for b2b: unique VAT ID number of the organization
     *
     * @var string|null
     */
    private $organizationVatId;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMerchantCustomerId()
    {
        return $this->merchantCustomerId;
    }

    /**
     * @param string $merchantCustomerId
     */
    public function setMerchantCustomerId($merchantCustomerId)
    {
        $this->merchantCustomerId = $merchantCustomerId;
    }

    /**
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string|null $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string|null
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * @param string|null $customerType
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;
    }

    /**
     * @return string|null
     */
    public function getOrganizationVatId()
    {
        return $this->organizationVatId;
    }

    /**
     * @param string|null $organizationVatId
     */
    public function setOrganizationVatId($organizationVatId)
    {
        $this->organizationVatId = $organizationVatId;
    }
}

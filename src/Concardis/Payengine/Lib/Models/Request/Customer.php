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
     * @var string
     */
    private $companyName;

    /**
     * required for b2b: when customer is an organization, this parameter has one possible value: 'organization'
     *
     * @var string
     */
    private $customerType;

    /**
     * optional for b2b: unique VAT ID number of the organization
     *
     * @var string
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
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName(string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string
     */
    public function getCustomerType(): string
    {
        return $this->customerType;
    }

    /**
     * @param string $customerType
     */
    public function setCustomerType(string $customerType): void
    {
        $this->customerType = $customerType;
    }

    /**
     * @return string
     */
    public function getOrganizationVatId(): string
    {
        return $this->organizationVatId;
    }

    /**
     * @param string $organizationVatId
     */
    public function setOrganizationVatId(string $organizationVatId): void
    {
        $this->organizationVatId = $organizationVatId;
    }
}

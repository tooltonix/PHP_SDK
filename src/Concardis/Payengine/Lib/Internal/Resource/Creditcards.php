<?php
namespace Concardis\Payengine\Lib\Internal\Resource;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Resource\Creditcard\Authentications;
use mysql_xdevapi\Exception;

class Creditcards extends AbstractResource
{
    protected $resourcePath = Api::RESOURCE_CREDITCARD;

    /**
     * @return Authentications
     */
    public function authentication($threeDsAuthenticationId)
    {
        return new Authentications($this->connection, $threeDsAuthenticationId, $this->resourcePath);
    }

	/**
	 * @return Order
	 */
	protected function getResponseModel()
	{
		throw new Exception('Creditcard response model not implemented');
	}
}

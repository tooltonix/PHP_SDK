<?php
namespace Concardis\Payengine\Lib\Internal\Resource\Creditcard;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Models\Response\Authentication\Authentication;
use Concardis\Payengine\Lib\Models\Response\Creditcard;

class Authentications extends AbstractResource implements Getable
{
    protected $resourcePath = Api::RESOURCE_CREDITCARD_3DSAUTHENTICATION;

	/**
	 * @param array $queryParams
	 *
	 * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Transaction
	 * A list of Transactions if $queryParams provided or one Transaction
	 * if called with ID set, if transactionId is set $queryParams will be ignored.
	 */
	public function get($queryParams = null)
	{
		return parent::get($queryParams);
	}

    /**
     * @return Authentication
     */
    protected function getResponseModel()
    {
        return new Authentication();
    }
}

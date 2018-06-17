<?php

namespace Railken\LaraOre\Contract\Attributes\PriceEnd\Exceptions;

use Railken\LaraOre\Contract\Exceptions\ContractAttributeException;

class ContractPriceEndNotAuthorizedException extends ContractAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'price_end';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CONTRACT_PRICE_END_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
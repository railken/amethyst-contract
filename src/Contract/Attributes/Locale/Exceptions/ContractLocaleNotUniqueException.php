<?php

namespace Railken\LaraOre\Contract\Attributes\Locale\Exceptions;

use Railken\LaraOre\Contract\Exceptions\ContractAttributeException;

class ContractLocaleNotUniqueException extends ContractAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'locale';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CONTRACT_LOCALE_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}

<?php

namespace Heidelpay\Tests\PhpApi\Unit\ParameterGroup;

use PHPUnit\Framework\TestCase;
use Heidelpay\PhpApi\ParameterGroups\PaymentParameterGroup as Payment;

/**
 * Unit test for PaymentParameterGroup
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  http://dev.heidelpay.com/heidelpay-php-api/
 *
 * @author  Jens Richter
 *
 * @category unittest
 */
class PaymentParameterGroupTest extends TestCase
{
    /**
     * Payment code setter/getter test
     */
    public function testCode()
    {
        $Payment = new Payment();

        $value = 'IV.PA';
        $Payment->setCode($value);

        $this->assertEquals($value, $Payment->getCode());
    }
}

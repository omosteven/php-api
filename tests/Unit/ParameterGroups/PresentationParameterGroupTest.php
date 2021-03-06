<?php

namespace Heidelpay\Tests\PhpApi\Unit\ParameterGroup;

use PHPUnit\Framework\TestCase;
use Heidelpay\PhpApi\ParameterGroups\PresentationParameterGroup as Presentation;

/**
 * Unit test for PresentationParameterGroup
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
class PresentationParameterGroupTest extends TestCase
{
    /**
     * Amount getter/setter test
     *
     * @test
     */
    public function amount()
    {
        $presentation = new Presentation();

        $value = '20.11';
        $presentation->setAmount($value);

        $this->assertEquals($value, $presentation->getAmount());
    }

    /**
     * Currency getter/setter test
     *
     * @test
     */
    public function currency()
    {
        $presentation = new Presentation();

        $value = 'USD';
        $presentation->setCurrency($value);

        $this->assertEquals($value, $presentation->getCurrency());
    }

    /**
     * Usage getter/setter test
     *
     * @test
     */
    public function presentationUsage()
    {
        $presentation = new Presentation();

        $value = 'Heidelpay Invoice ID 12345';
        $presentation->setUsage($value);

        $this->assertEquals($value, $presentation->getUsage());
    }
}

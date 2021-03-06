<?php

namespace Heidelpay\PhpApi\ParameterGroups;

/**
 * This class provides every api parameter related to the customers risk factors
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  http://dev.heidelpay.com/heidelpay-php-api/
 *
 * @author  Daniel Kraut
 *
 * @package  Heidelpay
 * @subpackage PhpApi
 * @category PhpApi
 */
class RiskInformationParameterGroup extends AbstractParameterGroup
{
    /**
     * @var bool if guest checkout (true/false) (optional)
     */
    public $guestcheckout = null;

    /**
     * @var string first date of customers relationship (YYYY-MM-DD) (optional)
     */
    public $since = null;

    /**
     * @var integer of customer's order count (optional)
     */
    public $ordercount = null;

    /**
     * Guestcheckout getter
     *
     * @return bool state
     */
    public function getGuestcheckout()
    {
        return $this->guestcheckout;
    }

    /**
     * Since getter
     *
     * @return string since
     */
    public function getSince()
    {
        return $this->since;
    }

    /**
     * Ordercount getter
     *
     * @return int ordercount
     */
    public function getOrdercount()
    {
        return $this->ordercount;
    }

    /**
     * setter for is quest checkout
     *
     * @param string $guestcheckout
     *
     * @return \Heidelpay\PhpApi\ParameterGroups\RiskInformationParameterGroup
     */
    public function setGuestCheckout($guestcheckout)
    {
        $this->guestcheckout = $guestcheckout;
        return $this;
    }

    /**
     * setter for customer since
     *
     * @param string $since
     *
     * @return \Heidelpay\PhpApi\ParameterGroups\RiskInformationParameterGroup
     */
    public function setSince($since)
    {
        $this->since = $since;
        return $this;
    }

    /**
     * setter for order count
     *
     * @param int $ordercount
     *
     * @return \Heidelpay\PhpApi\ParameterGroups\RiskInformationParameterGroup
     */
    public function setOrderCount($ordercount)
    {
        $this->ordercount = $ordercount;
        return $this;
    }
}

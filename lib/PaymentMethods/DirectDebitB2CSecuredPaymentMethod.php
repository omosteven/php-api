<?php

namespace Heidelpay\PhpApi\PaymentMethods;

use Heidelpay\PhpApi\TransactionTypes\RegistrationTransactionType;
use Heidelpay\PhpApi\TransactionTypes\AuthorizeTransactionType;
use Heidelpay\PhpApi\TransactionTypes\DebitTransactionType;
use Heidelpay\PhpApi\TransactionTypes\AuthorizeOnRegistrationTransactionType;
use Heidelpay\PhpApi\TransactionTypes\DebitOnRegistrationTransactionType;
use Heidelpay\PhpApi\TransactionTypes\RefundTransactionType;
use Heidelpay\PhpApi\TransactionTypes\ReversalTransactionType;
use Heidelpay\PhpApi\TransactionTypes\CaptureTransactionType;
use Heidelpay\PhpApi\TransactionTypes\RebillTransactionType;
use Heidelpay\PhpApi\TransactionTypes\FinalizeTransactionType;

/**
 * Direct debit secured for b2c payment Class
 *
 * Direct debit secured for b2c  payment method
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  http://dev.heidelpay.com/heidelpay-php-api/
 *
 * @author  Jens Richter
 *
 * @package  Heidelpay
 * @subpackage PhpApi
 * @category PhpApi
 */
class DirectDebitB2CSecuredPaymentMethod
{
    use BasicPaymentMethodTrait;
    use RegistrationTransactionType;
    use AuthorizeTransactionType;
    use DebitTransactionType;
    use AuthorizeOnRegistrationTransactionType;
    use DebitOnRegistrationTransactionType;
    use RefundTransactionType;
    use ReversalTransactionType;
    use CaptureTransactionType;
    use RebillTransactionType;
    use FinalizeTransactionType;

    /**
     * Payment code for this payment method
     *
     * @var string payment code
     */
    protected $_paymentCode = 'DD';

    /**
     * Payment brand name for this payment method
     *
     * @var string brand name
     */
    protected $_brand = null;
}

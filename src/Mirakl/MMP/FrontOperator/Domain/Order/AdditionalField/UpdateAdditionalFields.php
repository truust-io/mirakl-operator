<?php
namespace Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderLineCollection;

/**
 * @method  AdditionalFieldValueCollection  getAdditionalFields()
 * @method  $this                           setAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  OrderLineCollection             getOrderLines()
 * @method  $this                           setOrderLines(array|OrderLineCollection $orderLines)
 */
class UpdateAdditionalFields extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_additional_fields' => 'additional_fields',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines'       => [OrderLineCollection::class, 'create'],
        'additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
    ];
}
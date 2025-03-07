<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncGoodsDelivery.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncSalesOrderGoodsDeliveries
 *
 * @property int64 $Timestamp Timestamp
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $DeliveryAccount Reference to account for delivery
 * @property string $DeliveryAccountCode Delivery account code
 * @property string $DeliveryAccountName Account name
 * @property string $DeliveryAddress Reference to shipping address
 * @property string $DeliveryContact Reference to contact for delivery
 * @property string $DeliveryContactPersonFullName Name of the contact person of the customer who will receive delivered goods
 * @property string $DeliveryDate Date of goods delivery
 * @property int $DeliveryNumber Delivery number
 * @property string $Description Header description
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the sales order delivery
 * @property string $DocumentSubject Document Subject
 * @property string $EntryID Primary key
 * @property int $EntryNumber Entry number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Remarks Remarks
 * @property string $ShippingMethod Reference to shipping method
 * @property string $ShippingMethodCode Code of shipping method
 * @property string $ShippingMethodDescription Description of shipping method
 * @property string $TrackingNumber Reference to header tracking number
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 */
class SyncGoodsDelivery extends GoodsDelivery
{
    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Creator',
        'CreatorFullName',
        'DeliveryAccount',
        'DeliveryAccountCode',
        'DeliveryAccountName',
        'DeliveryAddress',
        'DeliveryContact',
        'DeliveryContactPersonFullName',
        'DeliveryDate',
        'DeliveryNumber',
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'EntryID',
        'EntryNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Remarks',
        'ShippingMethod',
        'ShippingMethodCode',
        'ShippingMethodDescription',
        'TrackingNumber',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'sync/SalesOrder/GoodsDeliveries';
}

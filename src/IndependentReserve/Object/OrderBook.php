<?php

namespace IndependentReserve\Object;

use stdClass;

class OrderBook extends AbstractTimestampedObject
{
    /**
     * The primary currency being shown.
     * @return string
     */
    public function getPrimaryCurrencyCode()
    {
        return $this->object->PrimaryCurrencyCode;
    }

    /**
     * The secondary currency being used for pricing.
     * @return string
     */
    public function getSecondaryCurrencyCode()
    {
        return $this->object->SecondaryCurrencyCode;
    }

    /**
     * @return array
     */
    public function getBuyOrders()
    {
        return $this->generateOrders($this->object->BuyOrders);
    }

    /**
     * @return array
     */
    public function getSellOrders()
    {
        return $this->generateOrders($this->object->SellOrders);
    }

    /**
     * @param array $orders
     * @return array
     */
    protected function generateOrders(array $orders)
    {
        return array_map(function (stdClass $object) {
            return Order::createFromObject($object);
        }, $orders);
    }
}

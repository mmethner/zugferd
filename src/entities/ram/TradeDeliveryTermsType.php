<?php

namespace horstoeko\zugferd\ram;

/**
 * Class representing TradeDeliveryTermsType
 *
 *
 * XSD Type: TradeDeliveryTermsType
 */
class TradeDeliveryTermsType
{

    /**
     * @property string $deliveryTypeCode
     */
    private $deliveryTypeCode = null;

    /**
     * Gets as deliveryTypeCode
     *
     * @return string
     */
    public function getDeliveryTypeCode()
    {
        return $this->deliveryTypeCode;
    }

    /**
     * Sets a new deliveryTypeCode
     *
     * @param string $deliveryTypeCode
     * @return self
     */
    public function setDeliveryTypeCode($deliveryTypeCode)
    {
        $this->deliveryTypeCode = $deliveryTypeCode;
        return $this;
    }


}

<?php

namespace horstoeko\zugferd\ram;

/**
 * Class representing TradeSettlementHeaderMonetarySummationType
 *
 *
 * XSD Type: TradeSettlementHeaderMonetarySummationType
 */
class TradeSettlementHeaderMonetarySummationType
{

    /**
     * @property \horstoeko\zugferd\udt\AmountType $lineTotalAmount
     */
    private $lineTotalAmount = null;

    /**
     * @property \horstoeko\zugferd\udt\AmountType $chargeTotalAmount
     */
    private $chargeTotalAmount = null;

    /**
     * @property \horstoeko\zugferd\udt\AmountType $allowanceTotalAmount
     */
    private $allowanceTotalAmount = null;

    /**
     * @property \horstoeko\zugferd\udt\AmountType[] $taxBasisTotalAmount
     */
    private $taxBasisTotalAmount = null;

    /**
     * @property \horstoeko\zugferd\udt\AmountType[] $taxTotalAmount
     */
    private $taxTotalAmount = null;

    /**
     * @property \horstoeko\zugferd\udt\AmountType $roundingAmount
     */
    private $roundingAmount = null;

    /**
     * @property \horstoeko\zugferd\udt\AmountType[] $grandTotalAmount
     */
    private $grandTotalAmount = null;

    /**
     * @property \horstoeko\zugferd\udt\AmountType $totalPrepaidAmount
     */
    private $totalPrepaidAmount = null;

    /**
     * @property \horstoeko\zugferd\udt\AmountType $duePayableAmount
     */
    private $duePayableAmount = null;

    /**
     * Gets as lineTotalAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType
     */
    public function getLineTotalAmount()
    {
        return $this->lineTotalAmount;
    }

    /**
     * Sets a new lineTotalAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType $lineTotalAmount
     * @return self
     */
    public function setLineTotalAmount(\horstoeko\zugferd\udt\AmountType $lineTotalAmount)
    {
        $this->lineTotalAmount = $lineTotalAmount;
        return $this;
    }

    /**
     * Gets as chargeTotalAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType
     */
    public function getChargeTotalAmount()
    {
        return $this->chargeTotalAmount;
    }

    /**
     * Sets a new chargeTotalAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType $chargeTotalAmount
     * @return self
     */
    public function setChargeTotalAmount(\horstoeko\zugferd\udt\AmountType $chargeTotalAmount)
    {
        $this->chargeTotalAmount = $chargeTotalAmount;
        return $this;
    }

    /**
     * Gets as allowanceTotalAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType
     */
    public function getAllowanceTotalAmount()
    {
        return $this->allowanceTotalAmount;
    }

    /**
     * Sets a new allowanceTotalAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType $allowanceTotalAmount
     * @return self
     */
    public function setAllowanceTotalAmount(\horstoeko\zugferd\udt\AmountType $allowanceTotalAmount)
    {
        $this->allowanceTotalAmount = $allowanceTotalAmount;
        return $this;
    }

    /**
     * Adds as taxBasisTotalAmount
     *
     * @return self
     * @param \horstoeko\zugferd\udt\AmountType $taxBasisTotalAmount
     */
    public function addToTaxBasisTotalAmount(\horstoeko\zugferd\udt\AmountType $taxBasisTotalAmount)
    {
        $this->taxBasisTotalAmount[] = $taxBasisTotalAmount;
        return $this;
    }

    /**
     * isset taxBasisTotalAmount
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxBasisTotalAmount($index)
    {
        return isset($this->taxBasisTotalAmount[$index]);
    }

    /**
     * unset taxBasisTotalAmount
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxBasisTotalAmount($index)
    {
        unset($this->taxBasisTotalAmount[$index]);
    }

    /**
     * Gets as taxBasisTotalAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType[]
     */
    public function getTaxBasisTotalAmount()
    {
        return $this->taxBasisTotalAmount;
    }

    /**
     * Sets a new taxBasisTotalAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType[] $taxBasisTotalAmount
     * @return self
     */
    public function setTaxBasisTotalAmount(array $taxBasisTotalAmount)
    {
        $this->taxBasisTotalAmount = $taxBasisTotalAmount;
        return $this;
    }

    /**
     * Adds as taxTotalAmount
     *
     * @return self
     * @param \horstoeko\zugferd\udt\AmountType $taxTotalAmount
     */
    public function addToTaxTotalAmount(\horstoeko\zugferd\udt\AmountType $taxTotalAmount)
    {
        $this->taxTotalAmount[] = $taxTotalAmount;
        return $this;
    }

    /**
     * isset taxTotalAmount
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxTotalAmount($index)
    {
        return isset($this->taxTotalAmount[$index]);
    }

    /**
     * unset taxTotalAmount
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxTotalAmount($index)
    {
        unset($this->taxTotalAmount[$index]);
    }

    /**
     * Gets as taxTotalAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType[]
     */
    public function getTaxTotalAmount()
    {
        return $this->taxTotalAmount;
    }

    /**
     * Sets a new taxTotalAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType[] $taxTotalAmount
     * @return self
     */
    public function setTaxTotalAmount(array $taxTotalAmount)
    {
        $this->taxTotalAmount = $taxTotalAmount;
        return $this;
    }

    /**
     * Gets as roundingAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType
     */
    public function getRoundingAmount()
    {
        return $this->roundingAmount;
    }

    /**
     * Sets a new roundingAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType $roundingAmount
     * @return self
     */
    public function setRoundingAmount(\horstoeko\zugferd\udt\AmountType $roundingAmount)
    {
        $this->roundingAmount = $roundingAmount;
        return $this;
    }

    /**
     * Adds as grandTotalAmount
     *
     * @return self
     * @param \horstoeko\zugferd\udt\AmountType $grandTotalAmount
     */
    public function addToGrandTotalAmount(\horstoeko\zugferd\udt\AmountType $grandTotalAmount)
    {
        $this->grandTotalAmount[] = $grandTotalAmount;
        return $this;
    }

    /**
     * isset grandTotalAmount
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGrandTotalAmount($index)
    {
        return isset($this->grandTotalAmount[$index]);
    }

    /**
     * unset grandTotalAmount
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGrandTotalAmount($index)
    {
        unset($this->grandTotalAmount[$index]);
    }

    /**
     * Gets as grandTotalAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType[]
     */
    public function getGrandTotalAmount()
    {
        return $this->grandTotalAmount;
    }

    /**
     * Sets a new grandTotalAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType[] $grandTotalAmount
     * @return self
     */
    public function setGrandTotalAmount(array $grandTotalAmount)
    {
        $this->grandTotalAmount = $grandTotalAmount;
        return $this;
    }

    /**
     * Gets as totalPrepaidAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType
     */
    public function getTotalPrepaidAmount()
    {
        return $this->totalPrepaidAmount;
    }

    /**
     * Sets a new totalPrepaidAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType $totalPrepaidAmount
     * @return self
     */
    public function setTotalPrepaidAmount(\horstoeko\zugferd\udt\AmountType $totalPrepaidAmount)
    {
        $this->totalPrepaidAmount = $totalPrepaidAmount;
        return $this;
    }

    /**
     * Gets as duePayableAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType
     */
    public function getDuePayableAmount()
    {
        return $this->duePayableAmount;
    }

    /**
     * Sets a new duePayableAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType $duePayableAmount
     * @return self
     */
    public function setDuePayableAmount(\horstoeko\zugferd\udt\AmountType $duePayableAmount)
    {
        $this->duePayableAmount = $duePayableAmount;
        return $this;
    }


}

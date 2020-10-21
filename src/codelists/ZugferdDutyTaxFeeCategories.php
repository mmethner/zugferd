<?php

namespace horstoeko\zugferd\codelists;

/**
 * Class representing the Duty or tax or fee categories
 */
class ZugferdDutyTaxFeeCategories
{
    /**
     * Standard rate
     */
    const STANDARD_RATE = "S";

    /**
     * Zero rated goods
     */
    const ZERO_RATED_GOODS = "Z";

    /**
     * Exempt from tax
     */
    const EXEMPT_FROM_TAX = "E";

    /**
     * VAT Reverse charge
     */
    const VAT_REVERSE_CHARGE = "AE";

    /**
     * VAT exempt for EEA intra-community supply of goods and services
     */
    const VAT_EXEMPT_FOR_EEA_INTRACOMMUNITY_SUPPLY_OF_GOODS_AND_SERVICES = "K";

    /**
     * Free export item, tax not charged
     */
    const FREE_EXPORT_ITEM_TAX_NOT_CHARGED = "G";

    /**
     * Service outside scope of tax
     */
    const SERVICE_OUTSIDE_SCOPE_OF_TAX = "O";

    /**
     * Canary Islands general indirect tax
     */
    const CANARY_ISLANDS_GENERAL_INDIRECT_TAX = "L";

    /**
     * Tax for production, services and importation in Ceuta and Melilla
     */
    const TAX_FOR_PRODUCTION_SERVICES_AND_IMPORTATION_IN_CEUTA_AND_MELILLA = "M";
}

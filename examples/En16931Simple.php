<?php

use horstoeko\zugferd\ZugferdDocumentBuilder;
use horstoeko\zugferd\ZugferdProfiles;

require getcwd() . "/vendor/autoload.php";

/**
 * ===================================================================================================================================================
 * BUILDER EXAMPLE
 * ===================================================================================================================================================
 */

$document = ZugferdDocumentBuilder::CreateNew(ZugferdProfiles::PROFILE_EN16931);
$document
    ->SetDocumentInformation("471102", "380", new \DateTime(), "EUR")
    ->AddDocumentNote('Rechnung gemäß Bestellung vom 01.03.2018.')
    ->AddDocumentNote('Lieferant GmbH' . PHP_EOL . 'Lieferantenstraße 20' . PHP_EOL . '80333 München' . PHP_EOL . 'Deutschland' . PHP_EOL . 'Geschäftsführer: Hans Muster' . PHP_EOL . 'Handelsregisternummer: H A 123' . PHP_EOL . PHP_EOL, null, 'REG')
    ->SetDocumentSupplyChainEvent(\DateTime::createFromFormat('Ymd', '20180305'))
    ->SetDocumentSeller("Lieferant GmbH", "549910")
    ->AddDocumentSellerGlobalId("4000001123452", "0088")
    ->AddDocumentSellerTaxRegistration("FC", "201/113/40209")
    ->AddDocumentSellerTaxRegistration("VA", "DE123456789")
    ->SetDocumentSellerAddress("Lieferantenstraße 20", "", "", "80333", "München", "DE")
    ->SetDocumentBuyer("Kunden AG Mitte", "GE2020211")
    ->SetDocumentBuyerAddress("Kundenstraße 15", "", "", "69876", "Frankfurt", "DE")
    ->SetDocumentDeliveryNoteReferencedDocument("abc", new \DateTime())
    ->AddDocumentTax("S", "VAT", 275.0, 19.25, 7.0)
    ->AddDocumentTax("S", "VAT", 198.0, 37.02, 19.0)
    ->SetDocumentSummation(529.87, 529.87, 473.00, 0.0, 0.0, 473.00, 56.87, null, 0.0)
    ->AddDocumentPaymentTerm("Zahlbar innerhalb 30 Tagen netto bis 04.04.2018, 3% Skonto innerhalb 10 Tagen bis 15.03.2018")
    ->AddNewPosition("1")
    ->SetDocumentPositionProductDetails("Trennblätter A4", "", "TB100A4", null, "0160", "4012345001235")
    ->SetDocumentPositionGrossPrice(9.9000)
    ->SetDocumentPositionNetPrice(9.9000)
    ->SetDocumentPositionQuantity(20, "H87")
    ->AddDocumentPositionTax('S', 'VAT', 19)
    ->SetDocumentPositionLineSummation(198.0)
    ->AddNewPosition("2")
    ->SetDocumentPositionProductDetails("Joghurt Banane", "", "ARNR2", null, "0160", "4000050986428")
    ->SetDocumentPositionGrossPrice(5.5000)
    ->SetDocumentPositionNetPrice(5.5000)
    ->SetDocumentPositionQuantity(50, "H87")
    ->AddDocumentPositionTax('S', 'VAT', 7)
    ->SetDocumentPositionLineSummation(275.0)
    ->WriteFile(getcwd() . "/factur-x.xml");

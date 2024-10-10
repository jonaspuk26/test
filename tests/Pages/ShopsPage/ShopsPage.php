<?php

namespace Pages\ShopsPage;

use Pages\PageObject;

class ShopsPage extends PageObject
{
    public array $selector =
        [
            'addNewShopButton' => '[class="button add-new search-field-action search-field-action-small ng-binding ng-scope active"]',
            'shopNameField' => '[id="name"]',
            'descriptionField' => '[id="description"]',
            'receiptHeaderField' => '[id="receipt_text_header"]',
            'receiptFooterField' => '[id="receipt_text_footer"]',
            'priceRegionField' => '[id="price_region"]',
            'stockLocationField' => '[id="stock_location"]',
            'phoneNumberField' => '[id="phone_number"]',
            'addressField' => '[id="address"]',
            'zipField' => '[id="zipcode"]',
            'cityField' => '[id="city"]',
            'countryField' => '[id="country"]',
            'orgNrField' => '[id="cvr"]',
            'latitudeField' => '[id="lat"]',
            'longitudeField' => '[id="lng"]',
            'saveShopButton' => '[id="button-save"]',
            'shopsSearchResults' => '[class="search-result-text ng-binding"]',
            'removeShopButton' => '[id="button-remove"]',
            'confirmRemoveShopButton' => '[ng-click="$close(true)"]',
            'shopRemovedToastMessage' => '[class="inner"]',
            'shopUpdatedToastMessage' => '[class="messages"]',
            'openingHoursTab' => '[id="tab-button--tab-2"]',
            'setAllDaysHoursFromField' => '//*[@id="day_template_from"]/table/tbody/tr[2]/td[1]/input',
            'setAllDaysMinutesFromField' => '//*[@id="day_template_from"]/table/tbody/tr[2]/td[3]/input',
            'setAllDaysHoursToField' => '//*[@id="day_template_to"]/table/tbody/tr[2]/td[1]/input',
            'setAllDaysMinutesToField' => '//*[@id="day_template_to"]/table/tbody/tr[2]/td[3]/input',
            'vippsTab' => '[id="tab-button--tab-3"]',
            'vippsActiveRadioButton' => '[for="vipps_enabled"]',
            'merchantSerialNumberField' => '[id="vipps_merchant_serial_number"]',
        ];

    public array $data =
        [
            'shopName' => 'testShop',
            'description' => 'test',
            'receiptHeader' => 'test',
            'receiptFooter' => 'test',
            'phoneNumber' => '1234567890',
            'address' => 'test st. 1, test',
            'zipCode' => '123456',
            'city' => 'test',
            'country' => 'test',
            'orgNr' => '1',
            'latitude' => '1',
            'longitude' => '1',
        ];
}
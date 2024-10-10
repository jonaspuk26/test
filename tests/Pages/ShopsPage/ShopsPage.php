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
            'saveShopButton' => '[ng-if="parent_form.main_form.$valid"]',
            'shopsSearchResults' => '[class="search-result-text ng-binding"]',
            'removeShopButton' => '[id="button-remove"]',
            'confirmRemoveShopButton' => '[ng-click="$close(true)"]',
            'shopRemovedToastMessage' => '[class="inner"]',
            'shopUpdatedToastMessage' => '[class="messages"]',
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
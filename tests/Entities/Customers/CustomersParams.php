<?php

namespace Dotenv\Entities\Customers;
class CustomersParams
{
    public string $customersEndpoint = '/customers';
    public string $customersWithIdEndpoint;
    public string $customersCountEndpoint;
    public array $customersFullParams = [];
    public array $customersPostResponseParams = [];
    public string $customerId;
    public object $customerObjects;

    public function __construct()
    {
        $this->customerId = uniqid();
        $this->customerObjects = new CustomerObjects($this->customerId, 2, 2);
        $customerContacts = $this->customerObjects->customerContacts;
        $customerLocations = $this->customerObjects->customerLocations;
        $this->customersFullParams =
            [
                "id" => $this->customerId,
                "name" => "name1",
                "email" => "$this->customerId@example.com",
                "card_number" => "string",
                "mobilephone" => "string",
                "workphone" => "string",
                "otherphone" => "string",
                "contact" => "string",
                "warning" => "string",
                "address" => "string",
                "city" => "string",
                "zipcode" => "string",
                "country" => "string",
                "company_cvr" => "string",
                "customer_type" => "CUSTOMER_TYPE_BASIC",
                "offline_customer" => true,
                "flat_discount_rate" => 100,
                "notes" => "string",
                "password" => "string",
                "customer_contacts" => $customerContacts,
                "customer_locations" => $customerLocations,
            ];
        $this->customersWithIdEndpoint = "$this->customersEndpoint/$this->customerId";
        $this->customersPostResponseParams =
            [
                "id" => $this->customerId,
                "name" => "name1",
                "email" => "$this->customerId@example.com",
                "card_number" => "string",
                "mobilephone" => "string",
                "workphone" => "string",
                "otherphone" => "string",
                "contact" => "string",
                "warning" => "string",
                "address" => "string",
                "city" => "string",
                "zipcode" => "string",
                "country" => "string",
                "company_cvr" => "string",
                "customer_group_id" => null,
                "customer_type" => "CUSTOMER_TYPE_BASIC",
                "offline_customer" => '1',
                "flat_discount_rate" => '100',
                "notes" => "string",
                "customer_contacts" => $customerContacts,
                "customer_locations" => $customerLocations,
                "has_password" => true,
            ];
        $this->customersCountEndpoint = "/count$this->customersEndpoint";
    }
}
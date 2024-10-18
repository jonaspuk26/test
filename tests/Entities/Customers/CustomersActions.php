<?php

namespace Dotenv\Entities\Customers;

use Tests\Support\ApiTester;

class CustomersActions
{
    private CustomersParams $customersParams;

    public function __construct(CustomersParams $customersParams)
    {
        $this->customersParams = $customersParams;
    }

    public function createCustomer(ApiTester $I): self
    {
        $I->sendPOST(
            $this->customersParams->customersEndpoint,
            $this->customersParams->customersFullParams
        );
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson($this->customersParams->customersPostResponseParams);
        return $this;
    }

    public function deleteCustomer(ApiTester $I): self
    {
        $I->sendDELETE($this->customersParams->customersWithIdEndpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContains('"success":true');
        return $this;
    }

    public function getCustomer(ApiTester $I): self
    {
        $I->sendGET($this->customersParams->customersWithIdEndpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson($this->customersParams->customersGetResponseParams);
        return $this;
    }

    public function assertCustomersAmount(ApiTester $I): self
    {
        $countFromList = $this->countCustomersFromGetList($I);
        $I->sendGet($this->customersParams->customersCountEndpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(
            [
                'count' => $countFromList
            ]
        );
        return $this;
    }

    private function getCustomersList(ApiTester $I): string
    {
        $list = $I->sendGet($this->customersParams->customersEndpoint);
        $I->seeResponseCodeIsSuccessful();
        return $list;
    }

    private function countCustomersFromGetList(ApiTester $I): int
    {
        return substr_count(
            $this->getCustomersList($I),
            'card_number'
        );
    }
}
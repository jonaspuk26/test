<?php

namespace Entities\Suppliers;

use Tests\Support\ApiTester;

class SuppliersActions
{
    private SuppliersParams $suppliersParams;

    public function __construct(SuppliersParams $suppliersParams)
    {
        $this->suppliersParams = $suppliersParams;
    }

    public function createSupplier(ApiTester $I): self
    {
        $this->suppliersParams = new SuppliersParams();
        $I->sendPost(
            $this->suppliersParams->suppliersEndpoint,
            $this->suppliersParams->suppliersPostParams
        );
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson($this->suppliersParams->suppliersPostResponseParams);
        return $this;
    }

    public function deleteSupplier(ApiTester $I): self
    {
        $I->sendDelete($this->suppliersParams->suppliersWithIdEndpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson($this->suppliersParams->suppliersDeleteResponseParams);
        return $this;
    }

    public function getSupplier(ApiTester $I): self
    {
        $I->sendGet($this->suppliersParams->suppliersWithIdEndpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson($this->suppliersParams->suppliersPostResponseParams);
        return $this;
    }

    public function assertSuppliersAmount(ApiTester $I): self
    {
        $countFromList = $this->countSuppliersFromGetList($I);
        $I->sendGet($this->suppliersParams->suppliersCountEndpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(
            [
                'count' => $countFromList
            ]);
        return $this;
    }

    private function getSuppliersList(ApiTester $I): string
    {
        $list = $I->sendGet($this->suppliersParams->suppliersEndpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        return $list;
    }

    private function countSuppliersFromGetList(ApiTester $I): int
    {
        return substr_count(
            $this->getSuppliersList($I),
            'name'
        );
    }

    public function modifySupplier(ApiTester $I): self
    {
        $I->sendPatch(
            $this->suppliersParams->suppliersWithIdEndpoint,
            $this->suppliersParams->modifiedNameParam
        );
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(
            $this->suppliersParams->modifiedNameParam
        );
        return $this;
    }
}
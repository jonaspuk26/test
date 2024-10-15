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
        $I->sendDelete($this->suppliersParams->suppliersDeleteUrl);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson($this->suppliersParams->suppliersDeleteResponseParams);
        return $this;
    }
}
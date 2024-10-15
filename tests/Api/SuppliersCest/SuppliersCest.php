<?php


namespace Api\SuppliersCest;

use Entities\Authentication\Authentication;
use Entities\Suppliers\SuppliersActions;
use Tests\Support\ApiTester;

class SuppliersCest
{
    private Authentication $auth;
    private SuppliersActions $suppliers;

    public function _inject(
        Authentication   $auth,
        SuppliersActions $suppliers
    ): void
    {
        $this->auth = $auth;
        $this->suppliers = $suppliers;
    }

    public function _before(ApiTester $I): void
    {
        $this->auth
            ->authenticate($I);
    }

    // tests
    public function testCreateSupplier(ApiTester $I): void
    {
        $this->suppliers
            ->createSupplier($I)
            ->deleteSupplier($I);
    }

    public function testGetSupplier(ApiTester $I): void
    {
        $this->suppliers
            ->createSupplier($I)
            ->getSupplier($I)
            ->deleteSupplier($I);
    }

    public function testSuppliersGetCountFromGetList(ApiTester $I): void
    {
        $this->suppliers
            ->assertSupplierGetCountAndGetListHaveSameAmounts($I);
    }
}

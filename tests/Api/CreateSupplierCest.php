<?php


namespace Api;

use Tests\Support\ApiTester;

class CreateSupplierCest
{
    public function _before(ApiTester $I): void
    {
//        $I->amHttpAuthenticated('jonas.pukenas@twoday.com', 'admin123');
        $I->amBearerAuthenticated('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJleHAiOjE3Mjg5MTM2MjUuNzQzNjY5LCJhdWQiOiJiYWNrb2ZmaWNlIiwianRpIjoiZjM4ZTI5ZWZhODY0OGEyZTc4YjUwYTk2ZTdlZWM1NjU0YjdlNTE4OTcyMmM1NDgxNzE4ZjRiYmRkMDYwYTNjZTQ2ZjQ2MDNhNDg0NDZiYTAiLCJpYXQiOjE3Mjg5MTAwMjUuNzkxODcsIm5iZiI6MTcyODkxMDAyNS43OTE4NzIsInN1YiI6IjliMWU1NDUzLTI0NzctNDVlYi1hM2M0LTAwZTVlNzlmNWEzZiIsInNjb3BlcyI6WyJiYWNrb2ZmaWNlIl19.mkS2EG1P3UcQTnOBW6YwgGiB2QYqDGuWrZDFw60gv_ytt3TU2LKnKGrxoHmMSs7PA9p4QlEXpxFH-w5k--HT8MU-9LrmKxruJ2xayJJgyoNWkmV-YWJwGC3sQT97iTCNpTm-7RGujP5q-ilcuunj9mKxAFeK-lkamplv7KYx6Ma6bPzgx7HcQorNHvMeHHBkqU-N2nml8gSqTeARtvWoWRvu6AhO0Z0mZNz3drgO0Zs0Dx8ODYwJCBuZ4NRrpbIM9z_LxNX3zVrQHOJg5b7xIDG20DOv3fxZq4tsHFg-kiO-XBJhpOeL0AKUXtJcddzfjcZC2_syAViDVXgT9af6aQ');
        $I->haveHttpHeader('wm-api-version', 'latest');
    }

    // tests
    public function testCreateSupplier(ApiTester $I): void
    {
        $I->sendPost(
            '/suppliers',
            [
                'id' => '1014cb76-43b4-483a-b49f-1e3000be7200',
                'name' => 'jonnnn',
                'email' => 'test@test.com'
            ]);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContains(
            '"id":"1014cb76-43b4-483a-b49f-1e3000be7200","name":"jonnnn","cvr":null,"email":"test@test.com","phone":null,"address":null,"contact_person":null,"external_id":null'
        );
    }

    public function testDeleteSupplier(ApiTester $I): void
    {
        $I->sendDelete('/suppliers/1014cb76-43b4-483a-b49f-1e3000be7200', ['id' => '1014cb76-43b4-483a-b49f-1e3000be7200']);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContains('"success":true');
    }
}

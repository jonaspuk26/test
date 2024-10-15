<?php

namespace Entities\Authentication;

use Tests\Support\ApiTester;

class Authentication
{
 public function authenticate(ApiTester $I): self
 {
     $I->sendPost(
         '/auth/token',
         [
             'grant_type' => 'password',
             'client_id' => '957aa1579a268e23c008cb5b8d20b24a',
             'client_secret' => 'd99399dc1d5f27a645f89ef8f46c9dcf633ae3d5c148de0168977d3c1e1957f153170364b090cfc6ef87337fe50c69f924b592993e2e115c73314bff6fd8ebff',
             'scope' => 'public',
             'username' => 'jonas.pukenas@twoday.com',
             'password' => 'admin123'
         ]
     );
     $I->seeResponseContains('"token_type":"Bearer"');
     $bearerAuth = $I->grabDataFromResponseByJsonPath('$.access_token')[0];
     $I->amBearerAuthenticated($bearerAuth);
     $I->haveHttpHeader('wm-api-version', 'latest');
     return $this;
 }
}
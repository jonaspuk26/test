<?php

namespace Entities\Authentication;

class AuthenticationParams
{
    public string $authTokenEndpoint = '/auth/token';
    public string $tokenTypeBearerText = '"token_type":"Bearer"';
    public string $accessTokenJsonPath = '$.access_token';
    public string $httpHeaderVersionName = 'wm-api-version';
    public string $httpHeaderVersionValue = 'latest';
public array $authPostParams =
    [
        'grant_type' => 'password',
        'client_id' => '957aa1579a268e23c008cb5b8d20b24a',
        'client_secret' => 'd99399dc1d5f27a645f89ef8f46c9dcf633ae3d5c148de0168977d3c1e1957f153170364b090cfc6ef87337fe50c69f924b592993e2e115c73314bff6fd8ebff',
        'scope' => 'public',
        'username' => 'jonas.pukenas@twoday.com',
        'password' => 'admin123'
    ];
}
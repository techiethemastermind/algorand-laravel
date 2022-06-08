<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Algod Credentials
    |--------------------------------------------------------------------------
    |
    | The credentials used to communicate with the Algod daemon.
    | As default, the credentials are used for the TestNet hosted by AlgoExplorer.
    | PureStake API Token header: X-API-Key
    | Algorand API Token header: X-Algo-API-Token
    |
    | For more information see:
    | * https://developer.algorand.org/docs/build-apps/setup/
    | * https://testnet.algoexplorer.io/api-dev/v2
    | * https://www.purestake.com/technology/algorand-api/
    |
    */
    'algod' => [
        'api_url' => 'https://testnet-algorand.api.purestake.io/ps2',
        'api_key' => 'TGSUFUbqF49VESAHaSjsS7a1Lkx3hc299CLYFa30',
        'api_token_header' => 'TGSUFUbqF49VESAHaSjsS7a1Lkx3hc299CLYFa30',
    ],

    /*
    |--------------------------------------------------------------------------
    | Indexer Credentials
    |--------------------------------------------------------------------------
    |
    | The credentials used to communicate with the Indexer daemon.
    | As default, the credentials are used for the TestNet hosted by AlgoExplorer.
    | PureStake API Token header: X-API-Key
    | Algorand API Token header: X-Indexer-API-Token
    |
    | For more information see:
    | * https://developer.algorand.org/docs/build-apps/setup/
    | * https://testnet.algoexplorer.io/api-dev/indexer-v2
    | * https://www.purestake.com/technology/algorand-api/
    |
    */
    'indexer' => [
        'api_url' => 'https://testnet-algorand.api.purestake.io/idx2',
        'api_key' => 'TGSUFUbqF49VESAHaSjsS7a1Lkx3hc299CLYFa30',
        'api_token_header' => 'TGSUFUbqF49VESAHaSjsS7a1Lkx3hc299CLYFa30',
    ],

    /*
    |--------------------------------------------------------------------------
    | KMD Credentials
    |--------------------------------------------------------------------------
    |
    | The credentials used to communicate with the KMD daemon.
    | As default, localhost is used.
    | If you are using a third-party API service, this process likely will not be available to you.
    |
    | For more information see:
    | * https://developer.algorand.org/docs/build-apps/setup/
    | * https://developer.algorand.org/docs/features/accounts/create/#wallet-derived-kmd
    |
    */
    'kmd' => [
        'api_url' => '127.0.0.1',
        'api_key' => '',
        'api_token_header' => 'X-KMD-API-Token',
    ],

];

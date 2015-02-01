<?php

return array(

    'appNameIOS'     => array(
        'environment' =>'development',
        'certificate' =>'/path/to/certificate.pem',
        'passPhrase'  =>'password',
        'service'     =>'apns'
    ),
    'appNameAndroid' => array(
        'environment' =>'production',
        'apiKey'      =>'yourAPIKey',
        'service'     =>'gcm',
        'restrictedPackageName' => 'com.example.app',
        'delayWhileIdle' => false,
        'dryRun' => false,
        'collapseKey' => null,
        'ttl' => 900 //15 min (in seconds)
    )

);
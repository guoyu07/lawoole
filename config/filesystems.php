<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 默认文件存储盘
    |--------------------------------------------------------------------------
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | 默认云端文件存储盘
    |--------------------------------------------------------------------------
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | 文件存储盘
    |--------------------------------------------------------------------------
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root'   => storage_path('app'),
        ],

        'public' => [
            'driver'     => 'local',
            'root'       => storage_path('app/public'),
            'url'        => '/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key'    => 'AWS_ACCESS_KEY_ID',
            'secret' => 'AWS_SECRET_ACCESS_KEY',
            'region' => 'AWS_DEFAULT_REGION',
            'bucket' => 'AWS_BUCKET',
        ],
    ],
];

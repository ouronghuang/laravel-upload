<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 启用示例页面
    |--------------------------------------------------------------------------
    |
    | 访问地址：{host}/aetherupload
    | 默认：true【true：开启，false：关闭】
    |
    */
    'enable_example_page' => true,

    /*
    |--------------------------------------------------------------------------
    | 上传时的分块大小，越大传输越快，必须小于 WEB 服务器和 php.ini 中设置的上传限值
    |--------------------------------------------------------------------------
    |
    | 单位：B
    | 默认：1 * 1000 * 1000【1MB】
    |
    */
    'chunk_size' => 1 * 1000 * 1000,

    /*
    |--------------------------------------------------------------------------
    | 上传目录的本地物理根路径
    |--------------------------------------------------------------------------
    |
    | 默认：storage_path() . '/app/aetherupload'
    |
    */
    'upload_path' => storage_path() . '/app/aetherupload',

    /*
    |--------------------------------------------------------------------------
    | 指针头文件目录的名称，建议保持默认
    |--------------------------------------------------------------------------
    |
    | 默认：'_head'
    |
    */
    'head_dir' => '_head',

    /*
    |--------------------------------------------------------------------------
    | 资源文件目录的子目录生成规则，变量或常量均可
    |--------------------------------------------------------------------------
    |
    | 默认：date('Y/m/d/His')
    |
    */
    'file_sub_dir' => date('Y/m/d'),

    /*
    |--------------------------------------------------------------------------
    | Redis 中 hashes 的 key 名称
    |--------------------------------------------------------------------------
    |
    | 默认：'aetherupload_file_hashes'
    |
    */
    'redis_key' => 'aetherupload_file_hashes',

    /*
    |--------------------------------------------------------------------------
    | 分组，可设置多个不同分组，各自拥有独立配置
    | 新增分组请尽量使用 video、audio 等有意义的分组名
    |--------------------------------------------------------------------------
    |
    | 默认分组：file
    |
    */
    'groups' => [
        'file' => [
            // 被允许的资源文件大小【MB】，0 为不限制
            'file_maxsize' => 0,

            // 被允许的资源文件扩展名，空为不限制，多个值以逗号分隔
            'file_extensions' => '',

            // 上传预处理时的路由中间件
            'middleware_preprocess' => [],

            // 上传文件分块时的路由中间件
            'middleware_save_chunk' => [],

            // 文件展示时的路由中间件
            'middleware_display' => [],

            // 文件下载时的路由中间件
            'middleware_download' => [],

            // 上传完成前触发的事件（临时文件），Receiver 的实例被注入
            'event_before_upload_complete' => '',

            // 上传完成后触发的事件【已存文件】，Receiver 的实例被注入
            'event_upload_complete' => '',
        ],
    ],
];

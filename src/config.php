<?php
/**
 * Created by PhpStorm.
 * User: fanxinyu
 * Date: 2020-11-09
 * Time: 16:55
 */

return [
    'defaults' => [

        'key' => env('WEATHER_KEY'),
        /*
         * 使用 Laravel 的缓存系统
         */
        'use_laravel_cache' => true,

        /*
         * 日志配置
         *
         * level: 日志级别，可选为：
         *                 debug/info/notice/warning/error/critical/alert/emergency
         * file：日志文件位置(绝对路径!!!)，要求可写权限
         */
        'log' => [
            'level' => env('WECHAT_LOG_LEVEL', 'debug'),
            'file' => env('WECHAT_LOG_FILE', storage_path('logs/wechat.log')),
        ],
    ]
];
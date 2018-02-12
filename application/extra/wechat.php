<?php
/**
 * Created by PhpStorm.
 * User: hooklife
 * Date: 2017/1/12
 * Time: 11:52
 */
return [
    /**
     * Debug 模式，bool 值：true/false
     *
     * 当值为 false 时，所有的日志都不会记录
     */
    'debug'  => false,
    /**
     * 账号基本信息，请从微信公众平台/开放平台获取
     */
    'app_id'  => 'wxa1b18fd79baf4de7',//'wx79c0b818ca367bc6',//'wx41e0bad389e2d0ef',         // AppID
    'secret'  => '496fd8764545fb768580ce68a07ef7c3',//'b0d516d0a423589dd638a1a9d1d2e772',//'609ae556d623f12bd1c6037d5d99ecf5',     // AppSecret
    'token'   => 'ulsL6sTHlLp47jBPL7PzzLLh3ZPSTb2l',          // Token
    'aes_key' => '8mC7vMwcEHk18vdGrRzYpU5HJyTcNFZI7NLKqHlr3kq',                    // EncodingAESKey，安全模式下请一定要填写！！！
    /**
     * 日志配置
     *
     * level: 日志级别, 可选为：
     *         debug/info/notice/warning/error/critical/alert/emergency
     * permission：日志文件权限(可选)，默认为null（若为null值,monolog会取0644）
     * file：日志文件位置(绝对路径!!!)，要求可写权限
     */
    'log' => [
        'level'      => 'debug',
        'permission' =>  0777,
        'file'       =>  LOG_PATH.'easywechat.log',
    ],
    /**
     * OAuth 配置
     *
     * scopes：公众平台（snsapi_userinfo / snsapi_base），开放平台：snsapi_login
     * callback：OAuth授权完成后的回调页地址
     */
    'oauth' => [
        'scopes'   => ['snsapi_userinfo'],
        'callback' => '/game.php/login/weixinloginback.html',
    ],
    /**
     * 微信支付
     */
    'payment' => [
        'merchant_id'        => 'your-mch-id',
        'key'                => 'key-for-signature',
        'cert_path'          => 'path/to/your/cert.pem', // XXX: 绝对路径！！！！
        'key_path'           => 'path/to/your/key',      // XXX: 绝对路径！！！！
        // 'device_info'     => '013467007045764',
        // 'sub_app_id'      => '',
        // 'sub_merchant_id' => '',
        // ...
    ],
    /**
     * Guzzle 全局设置
     *
     * 更多请参考： http://docs.guzzlephp.org/en/latest/request-options.html
     */
    'guzzle' => [
        'timeout' => 3.0, // 超时时间（秒）
        'verify' => false, // 关掉 SSL 认证（强烈不建议！！！）
//		'verify' => __DIR__.'/../../cacert-2017-06-07.pem'
		'https_errors' => false
    ],
];
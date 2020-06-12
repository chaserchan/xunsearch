<?php

namespace Chasechan\Xunsearch\Exceptions;
/**
 *  SmsException.php
 * $Id: SmsException.php 2017-08-16 上午11:05 $
 */
class XunsearchException extends \Exception
{
    protected static $errorMsgs = [
        '101' => '缺少必填的参数，出现这个情况还可能是et的值和实际加密方式不对应',
        '102' => '不支持的语言类型',
        '103' => '翻译文本过长',
        '104' => '不支持的API类型',
        '105' => '不支持的签名类型',
        '106' => '不支持的响应类型',
        '107' => '不支持的传输加密类型',
        '108' => 'appKey无效，注册账号， 登录后台创建应用和实例并完成绑定， 可获得应用ID和密钥等信息，其中应用ID就是appKey（ 注意不是应用密钥）',
        '109' => 'batchLog格式不正确',
        '110' => '无相关服务的有效实例',
        '111' => '开发者账号无效',
        '113' => 'q不能为空',
        '201' => '解密失败，可能为DES,BASE64,URLDecode的错误',
        '202' => '签名检验失败',
        '203' => '访问IP地址不在可访问IP列表',
        '301' => '辞典查询失败',
        '302' => '翻译查询失败',
        '303' => '服务端的其它异常',
        '401' => '账户已经欠费',
        '411' => '访问频率受限,请稍后访问',
        '412' => '长请求过于频繁，请稍后访问',
        '10000' => '不存在这种语言',
        '10001' => '当前只支持 google,baidu,youdao三种翻译服务',
        '10002' => '备用服务参数为空',
        '10003' => '翻译失败',
        '52001' => '请求超时',
        '52002' => '系统错误',
        '52003' => '未授权用户',
        '54000' => '必填参数为空',
        '54001' => '签名错误',
        '54003' => '访问频率受限',
        '54004' => '账户余额不足',
        '54005' => '长query请求频繁',
        '58000' => '客户端IP非法',
        '58001' => '译文语言方向不支持',
    ];
    public function __construct($code)
    {
        parent::__construct(self::$errorMsgs[$code], $code);
    }
}
 
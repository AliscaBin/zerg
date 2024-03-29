<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/27
 * Time: 22:18
 */

namespace app\lib\exception;


use think\Exception;
use Throwable;

class BaseException extends Exception
{
    //HTTP状态码 404,200...
    public $code = 400;
    //错误具体信息
    public $msg = "parameter error";
    //自定义的错误码
    public $errorCode = 10000;

    //construct function
    public function __construct($params = []){
        if (!is_array($params)) {
            return;
        }
        if (array_key_exists('code', $params)) {
            $this->code = $params['code'];
        }
        if (array_key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }
        if (array_key_exists('errorCode', $params)) {
            $this->errorCode = $params['errorCode'];
        }
    }
}
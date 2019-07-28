<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/28
 * Time: 12:15
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = "parameter error";
    public $errorCode = 10000;
}
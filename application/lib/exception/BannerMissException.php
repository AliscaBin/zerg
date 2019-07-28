<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/27
 * Time: 22:22
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = 'request banner is not exists!';
    public $errorCode = 40000;
}
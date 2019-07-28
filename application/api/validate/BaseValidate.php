<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/27
 * Time: 20:02
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        //获取http传入的参数
        $request = Request::instance();
        $param = $request->param();
        //对这些参数进行校验
        $result = $this->batch()->check($param);
        if (!$result) {
            $e = new ParameterException(['msg' => $this->error]);
            throw $e;
//            $error = $this->error;
//            throw new Exception($error);
        } else {
            return true;
        }
    }
}
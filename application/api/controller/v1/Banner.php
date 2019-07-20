<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/20
 * Time: 16:33
 */

namespace app\api\controller\v1;
use app\api\validate\TestValidate;
use think\Validate;

class Banner
{
    /**
     * 获取指定id的banner的信息
     * @url /banner/:id
     * @http GET
     * @param $id banner id
     */
    public function getBanner($id){
        //独立验证
        $data = ['name' => "wangbin1111", 'email' => "wangbinqq.com"];
//        $validate = new Validate(['name'=>"require|max:10",'email'=>"email"]);
        $validate = new TestValidate();
        $result = $validate->batch()->check($data);
//        echo $validate->getError();
        var_dump($validate->getError());
        //验证器

    }
}
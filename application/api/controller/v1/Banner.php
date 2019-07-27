<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/20
 * Time: 16:33
 */

namespace app\api\controller\v1;
use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;

class Banner
{
    /**
     * 获取指定id的banner的信息
     * @url /banner/:id
     * @http GET
     * @param $id banner id
     */
    public function getBanner($id){
//        //独立验证
////        $data = ['name' => "wangbin1111", 'email' => "wangbinqq.com"];
//        $data = ['id' => $id];
////        $validate = new Validate(['name'=>"require|max:10",'email'=>"email"]);
//        $validate = new IDMustBePositiveInt();
//        $result = $validate->batch()->check($data);
////        echo $validate->getError();
//        var_dump($validate->getError());
//        //验证器
        (new IDMustBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerById($id);
        return $banner;
    }
}
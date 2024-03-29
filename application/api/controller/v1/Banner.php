<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/20
 * Time: 16:33
 */

namespace app\api\controller\v1;
use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\BannerMissException;

class Banner
{
    /**
     * 获取指定id的banner的信息
     * @url /banner/:id
     * @http GET
     * @param $id banner id
     * @return 返回banners
     * @throws BannerMissException
     */
    public function getBanner($id)
    {
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
//        $banner = BannerModel::with(['items','items.image'])->find($id);
        $banner->hidden(['update_time','delete_time']);
        if (!$banner) {
            throw new BannerMissException();
        }
        return $banner;
    }
}
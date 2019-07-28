<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/27
 * Time: 21:00
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends BaseModel
{
    protected $hidden = ['update_time','delete_time'];

    /**
     * @param $id banner id
     * @return string return the result
     */
    public static function getBannerById($id)
    {
//        $result = Db::query('select * from banner_item where banner_id=?',[$id]);
//        $result = Db::table("banner_item")->where("banner_id",'=',$id);//return the Query object
//        $result = Db::table("banner_item")->where("banner_id", "=", $id)->select();//find return one result| select return all result

//        $result = Db::table('banner_item')
//            ->where(function ($query) use ($id) {
//                $query->where('banner_id', '=', $id);
//            })
//            ->select();
//        return $result;
        $banner = self::with(['items','items.image'])->find($id);
        return $banner;
    }


    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
}
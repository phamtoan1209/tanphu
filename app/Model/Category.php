<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const TYPE_POST = 1;
    const TYPE_PRODUCT = 0;
    const PAGE_ITEM = 10;

    public $table = 'categorys';

    public $fillable = ['name','slug','type','parent_id','description','hot','thumb','large'];

    public function getList($filter = [],$limit = self::PAGE_ITEM){
        $query = $this->select(['*']);
        if(isset($filter['name']) && $filter['name'] != ''){
            $query->where('name','like','%'.$filter['name'].'%');
        }
        if(isset($filter['type'])){
            $query->where('type',(int)$filter['type']);
        }
        return $query->paginate($limit);
    }

    public static function getParentCategory($type = 'product'){
        $query = static::select('id','name');
        if($type == 'post'){
            $query->where('type',self::TYPE_POST);
        }else{
            $query->where('type',self::TYPE_PRODUCT);
        }
        return $query->where('parent_id',0)->pluck('name','id');
    }

    public static function getAllCategoryProduct(){
        return static::select('id','name')->where('type',self::TYPE_PRODUCT)->pluck('name','id');
    }

    public static function getAllCategoryPost(){
        return static::select('id','name')->where('type',self::TYPE_POST)->pluck('name','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name','price','sale_price','description','size_id','color_id','image','status','category_id','brand_id','promotion_id','origin','year','stock'];
    public $timestamps = false;

    public function getCategoryName()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function getBrandName()
    {
        return $this->belongsTo(Brands::class,'brand_id');
    }
    
    public function getPromotionName()
    {
        return $this->belongsTo(Promotions::class,'promotion_id');
    }
    
    public function scopeSearch($query){

        $query = $query->where('name','like','%'.request()->keyword.'%');
        return $query;
    }
}


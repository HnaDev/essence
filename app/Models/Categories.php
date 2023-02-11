<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
<<<<<<< HEAD
=======
    protected $fillable = ['name', 'status', 'parent_id'];
>>>>>>> origin/bac
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['type', 'name', 'status'];
    public $timestamps = false;

    // used to search
    public function scopeSearch($query)
    {
        // $query = $query->where('type','like','%'.request()->keyword.'%');
        return $query;
    }
    public function getTypeName()
    {
        return $this->belongsTo(Category_type::class,'type');
    }
}
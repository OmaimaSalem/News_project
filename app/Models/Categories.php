<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\categories_en;
use App\Models\categories_ar;


class Categories extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $guarded;

    //relation between post and category M-N
    public function post()
    {
        return $this->belongsToMany(Posts::class, "category_post", 'post_id', 'category_id');
    }

    public function categories_ar()
    {
        return $this->hasOne(categories_ar::class, 'categories_id', 'id');
    }
    public function categories_en()
    {
        return $this->hasOne(categories_en::class, 'categories_id', 'id');
    }
}

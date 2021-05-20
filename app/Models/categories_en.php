<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\categories;

class categories_en extends Model
{
    protected $connection = 'mysql1';
    protected $table = 'categories_en';
    protected $primaryKey = 'id';
    protected $guarded;

    public function postEN()
 {
     return $this->belongsToMany(posts_en::class, "category_post_en", 'post_id', 'category_id');
 }

    public function category(){

        return $this->belongsTo(Caregories::class);

     } 
}

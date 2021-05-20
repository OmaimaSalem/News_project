<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\posts;

class posts_ar extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'posts_ar';
    protected $primaryKey = 'id';
    protected $guarded;

    public function categoryAR()
   {
       return $this->belongsToMany(categories_ar::class,"category_post_ar",'post_id','category_id');
   }

    public function posts(){

        return $this->belongsTo(Posts::class);

     } 
}

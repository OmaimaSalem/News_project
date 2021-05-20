<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\posts;
class posts_en extends Model
{
    protected $connection = 'mysql1';
    protected $table = 'posts_en';
    protected $primaryKey = 'id';
    protected $guarded;

    public function categoryEN()
   {
       return $this->belongsToMany(categories_en::class,"category_post_en",'post_id','category_id');
   }

    public function posts(){

        return $this->belongsTo(Posts::class);

     } 
}

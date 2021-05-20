<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\posts_en;
use App\Models\posts_ar;

class Posts extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $guarded;

   // relation between post and Category M-N
   public function category()
   {
       return $this->belongsToMany(Categories::class,"category_post",'post_id','category_id');
   }

   public function user(){

    return $this->belongsTo(User::class);

 }


public function feedback()
{
    return $this->belongsToMany(Feedback::class);
}


public function posts_ar()
{
    return $this->hasOne(posts_ar::class,'posts_id','id');
}
public function posts_en()
{
    return $this->hasOne(posts_en::class,'posts_id','id');
}

}

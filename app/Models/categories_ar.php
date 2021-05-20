<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\categories;

class categories_ar extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'categories_ar';
    protected $primaryKey = 'id';
    protected $guarded;

 //relation between post and category M-N
 public function postAR()
 {
     return $this->belongsToMany(posts_ar::class, "category_post_ar", 'post_id', 'category_id');
 }

    public function category(){

        return $this->belongsTo(Caregories::class);

     } 

}

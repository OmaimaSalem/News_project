<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class category_post_en extends Model
{

    protected $connection = 'mysql1';
    protected $table = 'category_post_en';
    protected $primaryKey = 'id';
    protected $guarded;
    use HasFactory;
}

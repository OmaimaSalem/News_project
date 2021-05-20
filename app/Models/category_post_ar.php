<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
class category_post_ar extends Model
{

    protected $connection = 'mysql2';
    protected $table = 'category_post_ar';
    protected $primaryKey = 'id';
    use HasFactory;
}

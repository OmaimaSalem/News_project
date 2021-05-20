<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


class Feedback extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'feedback';
    protected $primaryKey = 'id';

    protected $guarded;
    public function post(){

        return $this->belongsTo(Posts::class);
    
     }

     
}
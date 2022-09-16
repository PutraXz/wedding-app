<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multipleuploads extends Model
{
    use HasFactory;
    protected $table ='multipleuploads';
    protected $primaryKey = 'id';
    protected $fillable = array('filename','created_at','updated_at');
}

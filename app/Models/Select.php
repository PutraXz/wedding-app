<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    use HasFactory;
    protected $table ='selects';
    protected $primaryKey = 'id';
    protected $fillable = array('name_url','created_at','updated_at');
}

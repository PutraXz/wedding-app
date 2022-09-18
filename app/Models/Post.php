<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table ='posts';

    protected $fillable = array('name_url','title','name_groom','name_bride','child_groom','father_groom','mother_groom','child_bride','father_bride','mother_bride','created_at','updated_at');
    public function getRouteKeyName()
        {
   return 'name_url';
    }

}

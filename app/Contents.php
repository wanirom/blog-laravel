<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    protected $table = 'contents';
    public $primaryKey = 'id';
    public $timestamps = true;
    
    protected $fillable = array('title',  'full_content', 'author', 'category', 'created_at', 'updated_at');
  
    protected $guarded = array();
}

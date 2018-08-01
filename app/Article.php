<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // 可填充
  protected $fillable= ['title','content','publish_at','user_id'];


}

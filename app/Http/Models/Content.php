<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable=['article_id','title','type','description','file'];

    public function article(){
      return $this->belongsTo(Articles::class,'article_id','id');
    }
}

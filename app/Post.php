<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table    = "posts";
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $guarded  = "id";
    protected $fillable = ['nome', 'email', 'titulo', 'subtitulo', 'mensagem', 'arquivo'];
}

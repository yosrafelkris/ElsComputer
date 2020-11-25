<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comments";
    protected $fillable = ["message"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function servis()
    {
        return $this->belongsTo(Servis::class);
    }
}

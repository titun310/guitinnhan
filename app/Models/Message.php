<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    // Quan hệ nhiều-nhiều với Group
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'message_group', 'message_id', 'group_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Quan hệ nhiều-nhiều với User
    public function users()
    {
        return $this->belongsToMany(User::class, 'group_user');
    }

    // Quan hệ nhiều-nhiều với Message
    public function messages()
    {
        return $this->belongsToMany(Message::class, 'message_group', 'group_id', 'message_id');
    }
}
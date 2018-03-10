<?php

namespace App;

use App\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Service extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeByUser(Builder $query, User $user)
    {
        return $query->where('user_id', $user->id);
    }
}

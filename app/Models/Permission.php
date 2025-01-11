<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;

class Permission extends Model
{
    use Hasfactory;

    protected $fillable = [
        'user_id',
        'date_permission',
        'reason',
        'image',
        'is_approved',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
    public function fvotes()
    {
        return $this->hasMany(Fvote::class);
    }
}

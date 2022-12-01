<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function nomination()
    {
        return $this->hasOne(Nomination::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

}

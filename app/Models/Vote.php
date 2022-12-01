<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public function nomination()
    {
        return $this->belongsTo(Nomination::class);
    }
    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}

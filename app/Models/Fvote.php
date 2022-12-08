<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fvote extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the nomination that owns the comment.
     */
    public function nomination()
    {
        return $this->belongsTo(Nomination::class);
    }

    /**
     * Get the office that owns the comment.
     */
    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}

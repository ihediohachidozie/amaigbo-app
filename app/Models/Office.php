<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function nomination()
    {
        return $this->hasOne(Nomination::class);
    }

    /**
     * Get the votes for the blog post.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    /**
     * Get the fvotes for the blog post.
     */
    public function fvotes()
    {
        return $this->hasMany(Fvote::class);
    }
}

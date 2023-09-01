<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftShardComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'draft_shard_id',
        'user_id',
        'comment',
    ];

    public function draftShard()
    {
        return $this->belongsTo(DraftShard::class);
    }
}

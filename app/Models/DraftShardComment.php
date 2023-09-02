<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DraftShardComment
 *
 * @property int $id
 * @property int $draft_shard_id
 * @property int $user_id
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DraftShard $draftShard
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShardComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShardComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShardComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShardComment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShardComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShardComment whereDraftShardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShardComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShardComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShardComment whereUserId($value)
 * @mixin \Eloquent
 */
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DraftShard
 *
 * @property int $id
 * @property int $draft_id
 * @property string $title
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Draft $draft
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShard query()
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShard whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShard whereDraftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShard whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DraftShard whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DraftShard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'draft_id'
    ];

    public function draft(){
        return $this->belongsTo(Draft::class);
    }
}

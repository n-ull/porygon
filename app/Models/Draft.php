<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Draft
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property string|null $thumbnail
 * @property bool $published
 * @property int|null $category_id
 * @property int $user_id
 * @property int $views
 * @property array|null $tags
 * @property array|null $images
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DraftShard> $shards
 * @property-read int|null $shards_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Draft newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Draft newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Draft query()
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Draft whereViews($value)
 * @mixin \Eloquent
 */
class Draft extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'published',
        'category_id',
        'user_id',
        'views',
        'tags',
        'images'
    ];

    protected $casts = [
        'published' => 'boolean',
        'tags' => 'array',
        'images' => 'array'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function shards(){
        return $this->hasMany(DraftShard::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}

<?php

namespace App\Domains\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $meta_desc
 * @property string $seo_title
 * @property string $short_description
 * @property string $slug
 * @property string $url
 * @property string $image_large
 * @property string $keywords
 * @property string $image_medium
 * @property string $image_thumbnail
 * @property string $body
 * @property int $created_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
*/
class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'subtitle',
        'seo_title',
        'keywords',
        'meta_desc',
        'slug',
        'body',
        'short_description',
        'image_large',
        'image_medium',
        'image_thumbnail',
        'created_by',
    ];

    public function getUrlAttribute(): string
    {
        return action('PostController@show', [$this->id, $this->slug]);
    }
}

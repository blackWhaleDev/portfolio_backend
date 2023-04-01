<?php

namespace App\Domains\Home\Models;

use App\Domains\Home\Providers\EventServiceProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property int $key
 * @property string $title
 * @property string $subtitle
 * @property string $meta_desc
 * @property string $keywords
 * @property string $body
 * @property string $short_description
 * @property string $image_large
 * @property string $image_medium
 * @property string $image_thumbnail
 * @property string $created_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @see EventServiceProvider
 */
class HomePage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'key',
        'title',
        'subtitle',
        'meta_desc',
        'keywords',
        'body',
        'short_description',
        'image_large',
        'image_medium',
        'image_thumbnail',
        'created_by',
    ];
}

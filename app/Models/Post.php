<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Post extends Model implements HasMedia
{
    use HasFactory;  
    use InteractsWithMedia;

    protected $fillable = [
        //'image',
        'title',
        'slug',
        'content',
        'category_id',
        'user_id',
        'published_at',
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->width(400)
            ->nonQueued();

        $this
            ->addMediaConversion('large')
            ->width(1200);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function claps()
    {
        return $this->hasMany(Clap::class);
    }

    public function readTime($wordsPerMinute = 100)
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $readingTimeMinutes = ceil($wordCount / $wordsPerMinute);
        return max(1, $readingTimeMinutes);
    }

    public function imageUrl($conversionName = '')
    {
            return $this->getFirstMedia()?->getUrl($conversionName);

    }

    /**
     * Use slug for route model binding instead of ID
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

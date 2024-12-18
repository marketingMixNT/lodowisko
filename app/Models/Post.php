<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'content',
        'thumbnail_mobile',
        'thumbnail',
        'published_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'published_at' => 'datetime',
    ];



    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
 

    public function getThumbnailUrl()
    {
        return  asset('storage/' . $this->thumbnail);
    }
    public function getPublishedDate()
    {
        return  $this->published_at->diffForHumans();
    }
    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->content), 300);
    }
    public function getMetaTitle(): string
    {
        if ($this->meta_title) {
            return $this->meta_title;
        } else {
            return str_replace(['"', "'"], '', $this->title) . ' - Lodowisko Biała Owca';
        }
    }

    public function getMetaDesc(): string
    {
        if ($this->meta_desc) {
            return $this->meta_desc;
        } else {
            return substr(strip_tags($this->content), 0, 150);
        }
    }
}

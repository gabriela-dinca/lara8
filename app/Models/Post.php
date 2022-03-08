<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    use HasFactory;

    //protected $guarded = [];
    protected $fillable = ['title', 'excerpt', 'body', 'category_id'];
    //protected $with = ['category', 'author'];

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query
                ->where('title', 'like', '%'.$search.'%')
                ->orWhere('body', 'like', '%'.$search.'%')
        );

        $query->when($filters['category'] ?? false, fn($query, $categorySlug) =>
            $query->whereHas('category_id', fn($query) =>
                $query->where('slug', $categorySlug)
            )
        );
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}

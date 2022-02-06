<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public function __construct(
        public string $title,
        public string $slug,
        public string $excerpt,
        public string $date,
        public string $body
    ){}

    public static function all(){
        return cache()->rememberForever(
            'posts.all',
            fn() => collect(File::files(resource_path('posts')))
                ->map(fn($file) => YamlFrontMatter::parse($file->getContents()))
                ->map(fn($doc) => new Post(
                    $doc->title,
                    $doc->slug,
                    $doc->excerpt,
                    $doc->date,
                    $doc->body()
                ))
                ->sortByDesc('date')
        );
    }

    public static function find(string $slug){
        return static::all()->firstWhere('slug', $slug);
    }

    public static function findOrFail(string $slug){
        $post = static::find($slug);

        if (!$post){
            throw new ModelNotFoundException();
        }

        return $post;
    }
}

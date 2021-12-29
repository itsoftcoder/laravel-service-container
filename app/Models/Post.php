<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $guarded = [];

   /**
    * The categories that belong to the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function categories()
   {
       return $this->belongsToMany(Category::class, 'category_post');
   }


   /**
    * The tags that belong to the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function tags()
   {
       return $this->belongsToMany(Tag::class, 'post_tag');
   }

   /**
    * Get all of the comments for the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function comments()
   {
       return $this->hasMany(Comment::class, 'post_id', 'id');
   }

   /**
    * Get all of the likes for the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function likes()
   {
       return $this->hasMany(Like::class, 'post_id');
   }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $table = "replies";

    protected $guarded = [];

    /**
     * Get the user that owns the Reply
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the comment that owns the Reply
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment()
    {
        return $this->belongsTo(Comments::class, 'comment_id');
    }

    /**
     * Get the parent that owns the Reply
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Reply::class, 'parent_id');
    }

    /**
     * Get all of the child for the Reply
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function child()
    {
        return $this->hasMany(Reply::class, 'parent_id');
    }


    /**
     * Get all of the images for the Reply
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ReplyImage::class, 'reply_id');
    }


    /**
     * Get all of the likes for the Reply
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes()
    {
        return $this->hasMany(ReplyLike::class, 'reply_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentImage extends Model
{
    use HasFactory;

    protected $table = "comment_images";

    protected $guarded = [];

    /**
     * Get the comment that owns the CommentImage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment()
    {
        return $this->belongsTo(Comments::class, 'comment_id');
    }
}

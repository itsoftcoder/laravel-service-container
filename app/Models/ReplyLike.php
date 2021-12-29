<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyLike extends Model
{
    use HasFactory;

    protected $table = "reply_likes";

    protected $guarded = [];

    /**
     * Get the user that owns the ReplyLike
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the reply that owns the ReplyLike
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reply()
    {
        return $this->belongsTo(Reply::class, 'reply_id');
    }
}

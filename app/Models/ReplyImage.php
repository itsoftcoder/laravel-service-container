<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyImage extends Model
{
    use HasFactory;

    protected $table = "reply_images";

    protected $guarded = [];

    /**
     * Get the reply that owns the ReplyImage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reply()
    {
        return $this->belongsTo(Reply::class, 'reply_id');
    }
}

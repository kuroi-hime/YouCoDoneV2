<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    /**
     * Get the parent imageable model (user or post).
     */
    protected $primaryKey = 'id_image';
    protected $fillable = ['path_image', 'imageable_id', 'imageable_type'];
    
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}

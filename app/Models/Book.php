<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;

class Book extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function category()
    {
        return $this->BelongsTo(Category::class);
    }
}

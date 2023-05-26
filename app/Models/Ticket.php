<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function response(): HasMany {
        return $this->hasMany(Response::class);
    }
    public function category(): HasMany {
        return $this->hasMany(Category::class);
    }
}

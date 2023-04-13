<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * This is the model class for table "articles"
 *
 * @property int $id
 * @property string $subject
 * @property string $body
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = ['subject', 'body'];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function rawComments(): HasMany
    {
        return $this->comments()->whereNull('parent_id')
            ->with(['replies', 'user']);
    }

}

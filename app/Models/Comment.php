<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * This is the model class for table "comments"
 *
 * @property int $id
 * @property int $user_id
 * @property int $article_id
 * @property int|null $parent_id
 * @property string $message
 */
class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'user_id', 'parent_id', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(self::class, 'parent_id', 'id')->with(['replies', 'user']);
    }

}

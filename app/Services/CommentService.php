<?php

namespace App\Services;

use App\Models\Comment;

class CommentService
{

    /**
     * Saves the comment
     *
     * @param int $user_id
     * @param array $data
     * @return bool
     */
    public function addComment(int $user_id, array $data): bool
    {
        $comment = new Comment();
        $comment->article_id = $data['article_id'];
        $comment->user_id = $user_id;
        $comment->parent_id = $data['parent_id'] ?? null;
        $comment->message = $data['message'];

        return $comment->save();
    }

}

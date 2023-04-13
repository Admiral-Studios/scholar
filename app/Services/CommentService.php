<?php

namespace App\Services;

use App\Models\Comment;

class CommentService
{

    /**
     * Saves the comment
     *
     * @param $data
     * @return bool
     */
    public function addComment(int $user_id, array $data)
    {
        $comment = new Comment();
        $comment->article_id = $data['article_id'];
        $comment->user_id = $user_id;
        $comment->parent_id = $data['parent_id'] ?? null;
        $comment->message = $data['message'];

        return $comment->save();
    }

}

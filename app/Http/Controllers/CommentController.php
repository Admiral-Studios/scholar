<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Services\CommentService;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    /**
     * Store comment
     *
     * @param CommentStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommentStoreRequest $request)
    {
        $data = $request->all();

        $comment_service = new CommentService();
        if ($comment_service->addComment(Auth::id(), $data)) {
            return redirect('/#comments')->with('success', 'Comment added');
        } else {
            return back()->with('error', 'Failed to add comment');
        }
    }

}

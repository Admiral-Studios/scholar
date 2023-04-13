@extends('layouts.app')

@section('styles')
    <style>
        .answers {
            padding-left: 60px !important;
        }
    </style>
@endsection

@section('content')
    @if($article)
        <h1 class="text-body-emphasis">{{ $article->subject }}</h1>
        <div class="fs-5">
            {!! $article->body !!}
        </div>

        <div class="card mt-5" id="comments">
            <div class="card-header">Comments</div>
            <div class="card-body">
                @if($article->rawComments->isNotEmpty())
                    @include('comments._list', ['comments' => $article->rawComments])
                @else
                    <i>The article has no comments yet</i>
                @endif
            </div>
            @auth()
            <div class="card-footer" id="commentsBottom">
                <form id="commentForm" action="{{ route('comment.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <input type="hidden" name="parent_id">

                    <span id="replyToName" class="mx-2 mb-1 d-block" style="display:none!important;">Reply to: <b></b>
                        <button type="button" class="btn btn-sm py-0 comment-drop-parent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path
      d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>
                        </button></span>

                    <div class="input-group">
                        <textarea class="form-control" name="message" id="commentMessage" rows="2"
                                  placeholder="Type your message" required></textarea>
                        <button class="btn btn-outline-secondary" type="submit" id="commentSubmitBtn">Send</button>
                    </div>
                </form>
            </div>
            @endauth
        </div>
    @else
        <h2 class="text-danger">ERROR! No articles found!</h2>
        <h3>Please, run migration: <code>php artisan migrate</code></h3>
    @endif
@endsection

@section('scripts')
    <script src="{{ asset('js/scripts.js') }}"></script>
@endsection

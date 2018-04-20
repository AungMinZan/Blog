@extends('layouts.user')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $title }}</h4>

            <form method="POST" action="{{ route('posts.update', $post['id']) }}">
                @csrf

                <input type="hidden" name="_method" value="PATCH">

                <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="post" required>{{ $post['post'] }}</textarea>
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                    <a href="{{ URL::previous() }}" class="btn btn-warning btn--icon-text"><i class="zmdi zmdi-arrow-back"></i>Back</a>
                    <button class="btn btn-success btn--icon-text" type="submit"><i class="zmdi zmdi-check-all"></i>Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
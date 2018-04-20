@extends('layouts.user')

@section('content')
    <header class="content__title">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Create New Post</a>
    </header>

    <div class="row">
        <div class="col-lg-9 col-md-7">

            @foreach($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-11 col-md-10 col-10">
                                <h4 class="card-title">By {{ $post['user']['name'] }} </h4>
                                <h6 class="card-subtitle">on {{ date('Y-m-d H:i', strtotime($post['updated_at'])) }}</h6>
                            </div>

                            @if (Auth::id() == $post['user']['id'])
                                <div class="col-lg-1 col-md-2 col-2">
                                    <a href="" data-toggle="dropdown" class="btn btn-dark btn--icon"><i class="zmdi zmdi-more-vert"></i></a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('posts.edit', $post['id']) }}" class="dropdown-item">Edit</a>
                                        <a href="{{ route('posts.destroy', $post['id']) }}" class="dropdown-item" id="delete">Delete</a>

                                        <form method="POST" action="{{ route('posts.destroy', $post['id']) }}" id="deleteForm">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </div>
                                </div>
                            @endif

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="card-text">{{ $post['post'] }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

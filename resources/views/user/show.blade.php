@extends('layouts.user')

@section('content')
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1>{{ $user['name'] }}</h1>
            <small>Web/UI Developer, Edinburgh, Scotland</small>
        </header>

        <div class="card profile">
            <div class="profile__img">
                <img src="/demo/img/contacts/2.jpg" alt="">
            </div>

            <div class="profile__info">
                <p>Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magnae tiam porta sem malesuada magna mollis euismod.</p>

                <ul class="icon-list">
                    <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                    <li><i class="zmdi zmdi-email"></i>{{ $user['email'] }}</li>
                    <li><i class="zmdi zmdi-twitter"></i>@mallinda-hollaway</li>
                </ul>

                <br>
                <a href="{{ route('users.edit', Auth::id()) }}" class="btn btn-outline-info">Edit Profile</a>
            </div>
        </div>

        <div class="toolbar">
            <nav class="toolbar__nav">
                <a href="" id="about">About</a>
                <a href="" id="post" class="active">Post</a>
                <a href="" id="photo">Photos</a>
            </nav>
        </div>

        <div class="card aboutForm">
            <div class="card-body">

            </div>
        </div>

        @foreach($posts as $post)
            <div class="card postForm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-11 col-md-10 col-10">
                            <h4 class="card-title">By {{ $post['user']['name'] }} </h4>
                            <h6 class="card-subtitle">on {{ date('Y-m-d H:i', strtotime($post['updated_at'])) }}</h6>
                        </div>

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
@endsection
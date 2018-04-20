@extends('layouts.user')

@section('content')
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1>{{ $title }}</h1>
        </header>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('users.update', Auth::id()) }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="_method" value="PATCH">

                <!-- name -->
                <div class="row">
                    <label class="col-md-2 col-form-label">Name</label>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{ (old('name') == null)? $user['name'] : old('name') }}" placeholder="e.g David">
                            <i class="form-group__bar"></i>
                        </div>

                        @if($errors->has('name'))
                            <p class="validation-fails">
                                <strong>{{ $errors->first('name') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <!-- email -->
                <div class="row">
                    <label class="col-md-2 col-form-label">Email</label>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" value="{{ $user['email'] }}" placeholder="e.g abc@mail.com">
                            <i class="form-group__bar"></i>
                        </div>

                        @if($errors->has('email'))
                            <p class="validation-fails">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <!-- password -->
                <div class="row">
                    <label class="col-md-2 col-form-label">Password</label>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control">
                            <i class="form-group__bar"></i>
                        </div>

                        @if($errors->has('password'))
                            <p class="validation-fails">
                                <strong>{{ $errors->first('password') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <!-- work -->
                <div class="row">
                    <label class="col-md-2 col-form-label">Work</label>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="work" class="form-control" placeholder="What are you? Eg. Student or Employee or Employer">
                            <i class="form-group__bar"></i>
                        </div>

                        @if($errors->has('work'))
                            <p class="validation-fails">
                                <strong>{{ $errors->first('work') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <!-- position -->
                <div class="row">
                    <label class="col-md-2 col-form-label">Position</label>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="position" class="form-control" placeholder="Your position at your job.">
                            <i class="form-group__bar"></i>
                        </div>

                        @if($errors->has('position'))
                            <p class="validation-fails">
                                <strong>{{ $errors->first('position') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <!-- about_you -->
                <div class="row">
                    <label class="col-md-2 col-form-label">About you</label>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="about_you" class="form-control" placeholder="Describe about yourself.">
                            <i class="form-group__bar"></i>
                        </div>

                        @if($errors->has('about_you'))
                            <p class="validation-fails">
                                <strong>{{ $errors->first('about_you') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <!-- phone_number -->
                <div class="row">
                    <label class="col-md-2 col-form-label">Phone Number</label>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control" placeholder="Your phone number.">
                            <i class="form-group__bar"></i>
                        </div>

                        @if($errors->has('phone_number'))
                            <p class="validation-fails">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <!-- save -->
                <div class="form-group text-center">
                    <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
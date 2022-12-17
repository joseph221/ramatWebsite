@extends('Admin.layout.navbar')

@section('title')
Add User
@endsection

@section('content')
<div class="row" style="margin-top: 3%">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Update Event</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
    
            <div class="box-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>

                       
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    </div>

                    <div class="form-group py-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form> 
            {{-- <form action=""  method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" id="" name="title" placeholder="Enter news title">
                  </div>
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control"  id="" name="date">
                  </div>
                  <div class="form-group">
                    <label for="">Images</label>
                    <input type="file" class="form-control" id="" value="{{ old('image') }}" name="image" placeholder="Enter news Images">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="desc" class="form-control" value="{{ old('desc') }}" id="" cols="30" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Place</label>
                    <input type="text" class="form-control"  id="" name="place" placeholder="Enter news title">
                  </div>
                  <div class="form-group">
                    <label for="">Cost</label>
                    <input type="number" class="form-control"  id="" name="cost" placeholder="Enter news title">
                  </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form> --}}
        </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
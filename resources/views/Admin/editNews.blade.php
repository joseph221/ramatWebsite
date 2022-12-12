@extends('Admin.layout.navbar')

@section('title')
Update News
@endsection

@section('content')

<section class="content-header">
  <h1>
    Update News
  </h1>

</section>

<div class="row" style="margin-top: 3%">
    <!-- left column -->
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Update News</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->

            <div class="box-body">
                
            <form action="{{ route('adminnews.update',[$data->id]) }}"  method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" value="{{ $data->title }}" id="" name="title" placeholder="Enter news title">
                  </div>
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control" value="{{ $data->date }}" id="" name="date">
                  </div>
                  <div class="form-group">
                    <label for="">Images</label>
                    <input type="file" class="form-control" id="" value="{{ old('image') }}" name="image" placeholder="Enter news Images">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="desc" class="form-control" value="{{ old('desc') }}" id="" cols="30" rows="4">{{ $data->desc }}</textarea>
                  </div>
    
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
        </div>
        </div>
    </div>
    <div class="col-md-2">

    </div>

</div>

@endsection

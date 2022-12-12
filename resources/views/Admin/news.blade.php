@extends('Admin.layout.navbar')

@section('title')
News
@endsection

@section('content')

<section class="content-header">
  <h1>
    News
  </h1>

</section>

<div class="row" style="margin-top: 3%">
    <!-- left column -->
    <div class="col-md-3">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">New News</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->

            <div class="box-body">

                {{-- @include('sweetalert::alert') --}}
            <form action="{{ route('adminnews.store') }}"  method="post" enctype="multipart/form-data" autocomplete="off">

                @if ( Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                        @endif
                        @if ( Session::get('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                        @endif

                @csrf
              <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" value="{{ old('title') }}" id="" name="title" placeholder="Enter news title">
                @error('name')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <label for="">Date</label>
                <input type="date" class="form-control" value="{{ old('date') }}" id="" name="date">
                @error('name')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <label for="">Images</label>
                <input type="file" class="form-control" id="" value="{{ old('image') }}" name="image" placeholder="Enter news Images">
                @error('image')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <label for="">Description</label>
                <textarea name="desc" class="form-control" value="{{ old('desc') }}" id="" cols="30" rows="4"></textarea>
                @error('desc')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        </div>
    </div>

    <!-- left column -->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">News Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Date</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $dt )
                                <tr>
                                    <td><img src="{{ asset('News_Image/'.$dt->image) }}" alt="" width="100" height="100" class="img img-responsive rounded"></td>
                                    <td>{{ $dt->title }}</td>
                                    <td><p>{{ $dt->desc }}</p></td>
                                    <td>{{ $dt->date }}</td>
                                    <td>
                                        <div class="float-rigth">
                                            <a href="{{ route('adminnews.edit',$dt->id) }}" class="btn btn-sm btn-success">edit</a>
                                            <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletenews{{ $dt->id }}"> <i class="fa fa-trash-alt"></i> delete</a>
                                        </div>
                                    </td>
                                  </tr>
                                  <div class="modal right fade" id="deletenews{{ $dt->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title" id="staticBackdropLabel" style="color: whitesmoke">Delete News</h4>
                                        </div>
                                        <div class="modal-body">
                                           <form action="{{ route('adminnews.destroy',$dt->id) }}" method="post">
                                              @csrf
                                              @method('delete')
                                              <p style="font-size: 20px">Are you sure you want to delete {{ $dt->title }} news</p>
                                             <div class="modal-footer">
                                                <button class="btn btn-warning btn-sm" data-dismiss="modal">cancel</button>
                                                <button type="submit" class="btn btn-sm btn-danger">delete news</button>
                                             </div>
                                           </form>
                                        </div>
                                    
                                    </div>
                                    </div> 
                                  </div>
                                @endforeach


                            </tbody>

                          </table>
                    </div>

                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
        </div>
    </div>
</div>

@endsection

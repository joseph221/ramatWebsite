@extends('Admin.layout.navbar')

@section('title')
Dashboard
@endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Dashboard
    </h1>

</section>

<div class="row" style="margin-top: 3%">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>10</h3>

            <p>Events</p>
          </div>
            <div class="icon">
                <i class="fa fa-cube"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>2</h3>

            <p>News</p>
          </div>
          <div class="icon">
            <i class="fa fa-cubes"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>3</h3>

            <p>Users</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      
     
</div>




@endsection

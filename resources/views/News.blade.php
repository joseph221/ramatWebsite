@extends('layouts.app')
@section('content')
<style>
    hr.style1{
	    border-top: 2px solid #383232;
    }
</style>
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Our News</h2>
            <ul>
                <li> <a href="/"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> News</li>
            </ul>
        </div>
    </div>
</div>
    <div class="container p-5">
    
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3>News</h3> 
                    </div>
                    <div class="col">
                        {{ $news->links() }}
                    </div>
                </div>
              
            </div>
            <div class="card-body">
                    @foreach ($news as $new)
                    <div class="row p-2">
                        <div class="col-md-8">
                            <h6>{{ $new->date }}</h6>
                            <p>{{ $new->desc }}</p></td>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('News_Image/'.$new->image) }}" alt="" srcset="">
                        </div>
                    </div>
                    <hr class="style1">
                @endforeach
            </div>
        </div>
       
        {{-- <table class="table table-borderd">
            @foreach ($news as $new)
            <tr>
                <td>
                    <p>{{ $new->date }}</p>
                    <p>{{ $new->desc }}</p></td>
                <td><img src="{{ asset('News_Image/'.$new->image) }}" alt="" srcset=""></td>
            </tr>
            @endforeach
        </table> --}}
    </div>
@endsection
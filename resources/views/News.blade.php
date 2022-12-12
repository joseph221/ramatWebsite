@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>News</h3>
      
        <table class="table table-borderd">
            @foreach ($news as $new)
            <tr>
                <td>
                    <p>{{ $new->date }}</p>
                    <p>{{ $new->desc }}</p></td>
                <td><img src="{{ asset('News_Image/'.$new->image) }}" height="200" width="200" alt="" srcset=""></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
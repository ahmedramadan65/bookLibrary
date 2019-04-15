@if(count($book)>0)
@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading text-center">{{$book->name}}</div>

        <div class="panel-body">
    
                <div class="row">
                        <div class="col-md-3">
                            
                            <img src="{{asset('storage/thumbnails/' . $book->image)}}" class="img-responsive"/>
                        </div>
                        
                        <div class="col-md-9 text-center">
                            <h1 class="text-center" >{{$book->category->name}}</h1>
                            <h2>{{$book->title}}</h2>
                            <p>{{$book->info}}</p>
                            <br/>
                            Author : {{$book->author}} <br/>
                            <a href="{{asset('storage/books/' . $book->bookfile)}}" class="btn btn-primary">Download</a>
                            
                        </div>
                    </div>
                    
                
        </div>
    </div>
<hr>
@include('commentbox')

@endsection
@else
    Error Not Book found
@endif
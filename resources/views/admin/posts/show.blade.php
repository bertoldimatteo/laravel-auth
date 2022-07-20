@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>{{$post->title}}</h1>
            </div>
            <div class="card-body">
                {{$post->content}}
            </div>
        </div>        
    </div>    
@endsection
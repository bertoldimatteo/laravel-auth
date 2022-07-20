@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Lista posts</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Content</th>
                        <th scope="col">Status</th>
                        <th scope="col">Modify</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}}</td>
                            <td>{{substr($post->content, 0, 10)}}</td>  
                            <td>
                                @if ($post->published)
                                    <span class="badge bg-success">Published</span>
                                @else
                                <span class="badge bg-warning text-dark">Not Published</span>
                                @endif
                            </td>
                            <td>azioni per dopo</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>   
    </div>
</div>         
@endsection
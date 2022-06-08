@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">image</th>
                    <th scope="col">slug</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <th>{{ $post->title }}</th>
                    <td>
                        <p>{{ $post->content }}</p>
                    </td>
                    <td>
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" width="50">
                    </td>
                    <td> {{ $post->slug }} </td>
                    <td>
                        <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">View</a>
                    </td>
                </tr>                    
                @empty
                  <h2> non ci sono post</h2>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
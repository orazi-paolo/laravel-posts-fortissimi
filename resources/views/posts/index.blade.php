@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Add New Post</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->date }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id )}}"
                        class="btn btn-primary btn-sm mb-1">Show</a>
                    <a href="{{ route('posts.edit', $post->id )}}"
                        class="btn btn-warning btn-sm mb-1">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm delete-button mb-1"
                            data-post-name="{{ $post->name }}">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('additional-script')
<script>
    @vite('resources/js/delete-posts.js')
</script>
@endsection

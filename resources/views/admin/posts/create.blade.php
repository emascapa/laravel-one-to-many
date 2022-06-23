@extends('layouts.admin')

@section('content')

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{route('admin.posts.store')}}" method="post"> {{-- {{route('posts.store')}} --}}

            <h2 class="text-center">Create a new Post</h2>

            @csrf


            <div class="mb-3">
                <label for="title">Post Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}">

                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content">Content</label>
                <textarea rows="3" type="text" name="content" id="content"
                    class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}">
                </textarea>
            </div>

            <div class="mb-3">
                <label for="image">Post Image</label>
                <input type="text" name="image" id="image"
                    class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">

            </div>

            <div class="mb-5">
                <label for="date">Date of the Post</label>
                <input type="date" name="date" id="date"
                    class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">

                    @error('date')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class=" btn btn-dark">Add Post</button>

        </form>
    </div>

@endsection

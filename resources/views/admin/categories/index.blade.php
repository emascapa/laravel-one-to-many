@extends('layouts.admin')

@section('content')
    <div class="container py-4">

        <h2>Categories List</h2>

        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            Delete
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td scope="row">No Category to show</td>
                    </tr>
                @endforelse



            </tbody>
        </table>


    </div>
@endsection

@extends('layouts.app')

@section('content')
        <div class="container-fluid">
                <h1>Categories</h1>

                <br>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-lg">Create Category</a>
                <br>

                <table class="table table-striped">
                        <thead>
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $cat)
                        <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->active }}</td>
                                <td></td>
                        </tr>
                        @endforeach

                        </tbody>
                </table>
        </div>
@endsection

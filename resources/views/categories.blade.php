@extends('app')

@section('content')
    <div class="container">
        <h1>Categories</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
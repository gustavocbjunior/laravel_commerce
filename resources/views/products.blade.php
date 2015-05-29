@extends('app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td class="text-right">{{ number_format($product->price, 2, ',', '.') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
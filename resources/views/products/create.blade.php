@extends('app')

@section('content')
    <div class="container">
        <h1>Create Product</h1>

        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'products.store']) !!}
        <!-- Input name -->
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description: ') !!}
            {!! Form::textArea('description', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Input price -->
        <div class="form-group">
            {!! Form::label('price', 'Price: ') !!}
            {!! Form::text('price', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            <div class="form-group">
                {!! Form::hidden('featured', 0) !!}
                {!! Form::label('featured', 'Featured: ') !!}
                {!! Form::checkbox('featured', 1, false, ['class'=>'checkbox-inline']) !!}
            </div>

            <div class="form-group">
                {!! Form::hidden('recommend', 0) !!}
                {!! Form::label('recommend', 'Recommend: ') !!}
                {!! Form::checkbox('recommend', 1, false, ['class'=>'checkbox-inline']) !!}
            </div>
        </div>
        <br />
        <div class="form-group">
            {!! Form::submit('Add Product', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
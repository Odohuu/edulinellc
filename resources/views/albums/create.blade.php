@extends('app')

@section('content')

<h1>Зураг оруулах</h1>
    <hr/>

    {!! Form::open(['route' => 'albums.store', 'files' => true]) !!}
        
        <div class="form-group">
            {!! Form::label('name','Зургийн цомгийн нэр:') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description','Зургийн цомгийн тайлбар:') !!}
            {!! Form::text('description',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cover_image','Зургийн цомгийн нүүр зураг:') !!}
            {!! Form::file('cover_image', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Үүсгэх', ['class'=>'btn btn-primary ']) !!}
        </div>

    {!! Form::close() !!}


    @include('errors.list')
@stop
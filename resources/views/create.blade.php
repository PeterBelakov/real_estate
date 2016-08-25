@extends('layouts.master')
@section('title')
Create new Product
@stop
@sectional('body')
{!!Form::open(['route' => 'property.store'])!!}

{!!Form::label('name' => 'Name')!!}
{!!Form::text('name')!!}

{!!Form::label('price', 'Price')!!}
{!!Form::text('price')!!}

{!!Form::close()!!}

@stop
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizzas
        </div>

        <!-- for loop -->
        @foreach($pizzas as $pizza)
            <div>
                {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }} - {{ $pizza->price }}
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('Heading')
    <title>Pizzas</title>
@endsection

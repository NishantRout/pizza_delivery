@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizzas
        </div>

        <p>{{ $name }}</p>
        <!-- for loop -->
        @foreach($pizza as $i)
            <div>
                {{$loop -> index}}.{{$i['type']}} - {{$i['base']}} - {{$i['price']}}
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('Heading')
    <title>Pizzas</title>
@endsection

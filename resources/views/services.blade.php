@extends('layout')

@section('titulo', $titulo)

@section('content')
    <h1>Nossa página de serviços</h1> 
    <ul>
        <!--
        @for ($i = 0; $i < count($services); $i++)
        <li>{{ $services[$i]['name'] }} - {{ $services[$i]['description'] }} - item{{$i+1}}</li>        
        @endfor
        -->

        @foreach ($services as $service)
        <li>{{ $service['name'] }} - {{ $service['description'] }}</li>    
        @endforeach 

        <!--
        @while ($repeticoes < 4)
        <li>{{ $service['name'] }} - {{ $service['description'] }}</li>    
        {{ $repeticoes++; }}    
        @endwhile
        -->
    </ul>   
@endsection


@extends('layout')


@section('content')
    <h1>Seja bem-vindo(a)
        @if ($userType == 'admin')
            <span style="color: red">admin</span>
            @include('painel_admin')
        @elseif ($userType == 'editor')
            <span style="color: blue">editor</span>
        @else    
            <span style="color: green">user</span>
        @endif

    </h1>

    <p> - Número sem formatar: 1000</p>
    <p> - Número formatado com a diretiva criada: @moeda(1000)</p>
    <p> - Número com o number format: <?php echo number_format(1000, 2, ',', '.'); ?></p>
@endsection

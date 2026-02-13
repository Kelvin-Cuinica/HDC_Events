@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')
    <h1>Ola, Mundo!😁</h1>
    <a href="/contactos">Contactos</a>
    <a href="/produtos">Produtos</a>
    <a href="/login">Login</a>


    <div class="info">
        <b>Nome: </b>{{ $nome }}<br>
        <b>Apelido: </b>{{ $apelido }}
    </div>
    <div class="info-2">
        @if ($nome == 'Pedro')
            <p>O nome é Pedro.</p>
        @elseif ($nome == 'Kelvin')
            <p>O nome é: {{ $nome }} {{ $apelido }}</p>
            <img src="/img/banner.png" alt="Banner">
        @else
            <p>O nome não é Pedro.</p>
        @endif


        @for ($i = 0; $i < count($arr); $i++)
            <p>i = {{ $arr[$i] }} - indice {{ $i }}</p>
            @if ($i == 2)
                <p>* O i é 2</p>
            @endif
        @endfor


        @php
            $nome = 'Alberto';
            $apelido = 'Mabunda';
            $nomeCompleto = '<b>Nome:</b> ' . $nome . '<br>';
            $nomeCompleto .= '<b>Apelido:</b> ' . $apelido;
            echo $nomeCompleto;
        @endphp

        <!-- Comentario do HTML -->
        {{-- Este é o comentário do Blade --}}

        @foreach ($nomes as $nome)
            <p><b>Nome</b> {{ $loop->index }}: {{ $nome }} - {{ $profissao }}</p>
        @endforeach
    </div>
@endsection

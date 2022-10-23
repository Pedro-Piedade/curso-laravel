@extends('layouts.main')

@section('title', 'HDC EVENTS')

@section('content')
     <h1>algum titulo</h1> 
     <img src="/img/evento1.jpg" alt="evento2">
     @if(10 > 15)
        <p>A condição e true</p>
     @endif

     <p>{{ $nome }}</p>

     @if($nome == "Pedro")
        <p>O nome é pedro</p>
     @elseif($nome == "Matheus")
        <p>o nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
     @else
     <p>o nome não é pedro</p>
     @endif

     @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if($i == 2)
        <p>O i é dois</p>
        @endif
     @endfor

     @foreach($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
     @endforeach

     @php
        $name = "João";
        echo $name;
     @endphp
     

     <!-- Comentário com HTML(estaria ferrado) -->
     {{-- Comentario com blade(estaria menos ferrado )--}}
@endsection
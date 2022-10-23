@extends('layouts.main')

@section('title', 'Products')

@section('content')
  @if($id != null)
   <p>Exibindo produto id: {{ $id }}</p>
  @endif
@endsection

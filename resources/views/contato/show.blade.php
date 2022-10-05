@extends('layout.app')
@section('title','Contato - {{$contato->nome}}')
@section('content')
    <h1>Contato - {{$contato->nome}}</h1>
    <ul>
        <li><mark>id:</mark> {{$contato->id}}</li>
        <li><mark>nome:</mark> {{$contato->nome}}</li>
        <li><mark>email:</mark> <a href="mailto:{{$contato->email}}">{{$contato->email}}</a> &nbsp; <-- enviar e-mail</li>
        <li><mark>telefone:</mark> {{$contato->telefone}}</li>
        <li><mark>cidade:</mark> {{$contato->cidade}}</li>
        <li><mark>estado:</mark> {{$contato->estado}}</li>
    </ul>
    <a href="{{url('contatos')}}">Voltar</a>
@endsection
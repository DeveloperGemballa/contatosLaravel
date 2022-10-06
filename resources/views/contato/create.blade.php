<?php ?>
@extends('layout.app')
@section('title','Criar novo Contato')
@section('content')
    <h1>Criar novo Cadastro</h1>
    {!! Form::open(['route' => 'contatos.store', 'method' => 'POST']) !!}
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome', '', ['class'=>'form-control', 'required', 'placehoder' =>'Nome completo']) !!}

    {!! Form::label('email', 'E-mail') !!}
    {!! Form::text('email', '', ['class'=>'form-control', 'required', 'placehoder' =>'E-mail completo']) !!}

    {!! Form::label('telefone', 'Telefone') !!}
    {!! Form::text('telefone', '', ['class'=>'form-control', 'required', 'placehoder' =>'+55 (99)8888-8888']) !!}

    {!! Form::label('cidade', 'Cidade') !!}
    {!! Form::text('cidade', '', ['class'=>'form-control', 'required', 'placehoder' =>'Cidade residente']) !!}
    
    {!! Form::label('estado', 'Estado') !!}
    {!! Form::text('estado', '', ['class'=>'form-control', 'required', 'placehoder' =>'Estado residente']) !!}
<hr>
    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
    {!!Form::button('Cancelar',['onclick'=>'javascript:history.go(-1)', 'class'=>'btn btn-secondary'])!!}
    {!! Form::close() !!}
@endsection
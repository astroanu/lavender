@extends('layouts.single')

@section('head.title')

    Entity: {{ $entity }}

@stop

@section('content')

    @workflow($workflow, ['entity' => $model])

@stop
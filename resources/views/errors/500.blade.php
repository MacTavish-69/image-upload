@extends('errors::minimal')

@section('title', __('Server Error'))

@section('code')
    {{$exception->getStatusCode()}}
@endsection

@section('message')
    {{$exception->getMessage()}}
@endsection
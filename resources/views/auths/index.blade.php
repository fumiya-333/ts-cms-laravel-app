@extends('templates.index')

@section('title', AppConstants::VIEW_TITLE)

@section('head')

@endsection

@section('contents')
    @include('projects.login', ['url' => 'login', 'form_class' => 'p-login__inner__form', 'form_inner_class' => 'p-login__inner__form__inner'])
@endsection

@section('script')

@endsection

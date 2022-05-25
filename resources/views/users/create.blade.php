@extends('templates.index')

@section('title', AppConstants::VIEW_TITLE)

@section('head')

@endsection

@section('contents')
    @include('projects.users.create')
@endsection

@section('script')

@endsection

@extends('index')
@section('content')
    @livewire('post.detail', ['id' => @intval($id)])
@endsection
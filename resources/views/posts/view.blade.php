@extends('index')
@section('content')
    @livewire('post.view', ['id' => @intval($id)])
    @livewire('post.footer')
@endsection
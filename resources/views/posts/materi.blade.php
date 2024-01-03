@extends('index')
@section('content')
    @livewire('post.materi', ['id' => @intval($id)])
@endsection
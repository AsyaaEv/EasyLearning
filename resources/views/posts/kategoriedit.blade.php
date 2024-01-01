@extends('index')
@section('content')
    @livewire('post.kategoriedit', ['id' => @intval($id)])
    @livewire('post.footer')
@endsection
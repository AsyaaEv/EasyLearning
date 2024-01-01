@extends('index')
@section('content')
    @livewire('post.mapelview', ['id' => @intval($id)])
    @livewire('post.footer')
@endsection
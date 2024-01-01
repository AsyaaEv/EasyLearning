@extends('index')
@section('content')
    @livewire('post.mapeldetail', ['id' => @intval($id)])
    @livewire('post.footer')
@endsection
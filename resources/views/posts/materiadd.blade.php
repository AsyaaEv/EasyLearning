@extends('index')
@section('content')
    @livewire('post.materiadd', ['id' => @intval($id)])
@endsection
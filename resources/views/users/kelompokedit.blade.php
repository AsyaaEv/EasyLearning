@extends('index')
@section('content')
    @livewire('user.kelompokedit', ['id' => @intval($id)])
@endsection
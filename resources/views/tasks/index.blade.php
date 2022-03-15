@extends('layout')

@section('content')
    @section('head', 'My head')
    <div class="container bootstrap snippets bootdey">
        @livewire('tasks.task')
    </div>


@endsection

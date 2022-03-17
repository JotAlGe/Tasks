@extends('layout')

@section('head', 'Things to do')

@section('content')

    <div class="container bootstrap snippets bootdey">
        
        @livewire('tasks.task')
    </div>


@endsection

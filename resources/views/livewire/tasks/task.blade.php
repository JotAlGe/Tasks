<div class="row">
    {{-- button --}}
    @include('partials.button')

    @if($showShowView)
        @include('livewire.tasks.show')
    @else

        @if($showPartial)
            @include('livewire.tasks.create')
        @else

            {{-- alert deleted --}}
            @if(session()->has('deleted'))
                <div class="alert bg-dark alert-dismissible fade show" role="alert">
                    <strong class="text-info">{{ session('deleted') }}</strong>
                    <button type="button" class="btn-close  text-info" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

            {{-- success message --}}
            @if(session()->has('success'))
                <div class="alert bg-dark alert-dismissible fade show" role="alert">
                    <strong class="text-info">{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- show modal edit --}}
            @if($showEdit)
                @include('livewire.tasks.edit')
            @else

                @forelse ($tasks as $task)

                <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default bg-dark px-3 shadow">

                        <div class="panel-body py-2">
                                <div class="row">
                                    <div class="d-flex justify-content-between align-items-center">

                                        {{-- link to show view --}}
                                        <button wire:click="show({{ $task->id }})" class="btn btn-link text-decoration-none">
                                            <h4 class="text-thin mt text-white">{{ $task->description }}</h4>
                                        </button>

                                        <small class="text-warning">Creado hace {{ $task->created_at->diffForHumans() }}</small>

                                        <button wire:click="destroy({{ $task->id }})" class="btn btn-link">
                                            <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="clearfix">
                                        <div class="pull-right d-flex justify-content-between">
                                            <small class="text-light bg-danger p-2 rounded-start mx-1"> "{{ $task->category->description }}"
                                            </small>

                                            <small
                                            class="text-light
                                            {{-- accediendo a los colores de la prioridad a través de su relación --}}
                                            bg-{{ $task->priority->color->description}}
                                            p-2 rounded-start">Prioridad: 
                                                {{ $task->priority->description}}
                                            </small>
                                            <button wire:click="edit({{$task->id}})" class="btn btn-link">

                                            {{-- edit icon --}}
                                            <i class="fa fa-edit text-orange" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2>No hay tareas, todavía...</h2>
                @endforelse
            @endif
        @endif
    @endif
</div>

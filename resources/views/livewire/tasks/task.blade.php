
<div class="row">
    <button wire:click="$toggle('showPartial')" type="button" class="btn
    @if(!$showPartial) btn-outline-dark @else btn-outline-danger @endif
    mb-4
    fw-bolder">
        @if(!$showPartial) Crea una nueva tarea @else Cancelar @endif
    </button>


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
                                    <h4 class="text-thin mt text-white">{{ $task->description }}</h4>
                                    <small class="text-info">{{ $task->priority->description}}</small>
                                    <button wire:click="destroy({{ $task->id }})" class="btn btn-link">
                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="clearfix">
                                    <div class="pull-right d-flex justify-content-between">
                                        <small class="text-danger fst-italic fw-bolder">Category: "{{ $task->category->description }}"</small>
                                        <small class="text-warning">Creado hace {{ $task->created_at->diffForHumans() }}</small>
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
</div>


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
    @forelse ($tasks as $task)

    <div class="col-sm-6 col-xs-12">
        <div class="panel panel-default bg-dark px-3 py-1 shadow">
            <div class="panel-body">
                <div class="d-flex justify-content-between">
                    <h4 class="text-thin mt text-white">{{ $task->description }}</h4>
                    <small class="text-info">{{ $task->priority->description}}</small>
                </div>

                <div class="clearfix">
                    <div class="pull-right d-flex justify-content-between">
                        <small class="text-danger fst-italic fw-bolder">Category: "{{ $task->category->description }}"</small>
                        <small class="text-warning">Creado hace {{ $task->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @empty
        <h2>No things to do, yet...</h2>
        @endforelse
    @endif
</div>


<button wire:click="$set('showShowView', false)" class="btn btn-danger mb-3">Volver</button>
<div class="container bootdey d-flex justify-space-between">
    <div class="col-md-6 bg-dark p-4 text-info rounded-1">
        <div class="well">
            <h2 class="h2 text-light">Número de tarea: {{ $task->id }}</h2>
            <h2 class="h2 text-warning">Creado: {{ $task->created_at->diffForHumans() }}</h2>
            <h2 class="h2 text-danger">
                Categoría:
                <span
                    style="max-height:30px"
                    class="badge rounded-pill bg-secondary col-md-2 px-1"
                >
                    {{ $task->category->description }}
                </span>

            </h2>
            <h2 class="h2">
                Prioridad:
                <span
                    style="max-height: 30px"
                    class="text-light
                        badge rounded-pill pb-3
                        bg-{{ $task->priority->color->description }}
                ">
                    {{ $task->priority->description }}
                </span>
            </h2>
        </div>
    </div>
    <div class="col-md-6 bg-dark p-4 text-info d-flex justify-content-center">
        <h1 class="display-5">{{ $task->description}}</h1>
    </div>
</div>

<button wire:click="$toggle('showPartial')" type="button" class="btn
    @if(!$showPartial)
        btn-outline-dark
    @else
        btn-outline-danger
    @endif
        mb-4
        fw-bolder

    @if($showEdit || $showShowView)
        d-none
    @endif
        ">

    @if(!$showPartial)
        Crea una nueva tarea
    @else
        Cancelar
    @endif

</button>

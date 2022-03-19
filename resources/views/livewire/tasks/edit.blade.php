<div class="container bootdey d-flex justify-space-between mb-4">
    <div class="col-md-6 bg-dark p-4 text-info rounded-1">
        <div class="well">
            <form>
                {{-- priorities --}}
                <label class="mt-1">Elige un prioridad</label>
                <select class="form-select" aria-label="Default select example" wire:model="priority_id"
                name="priority">
                    <option selected>Prioridad</option>
                    @forelse ($priorities as $priority)

                        <option value="{{$priority->id}}" @selected(true)>{{$priority->description}}</option>
                    @empty
                        <h2>No hay prioridades, aún!</h2>
                    @endforelse
                </select>
                @error('priority_id') <span class="text-danger fw-bold">{{ $message }}</span> @enderror

                <br>

                {{-- categories --}}
                <label class="mt-4">Elige un Categor[ia</label>
                <select class="form-select" aria-label="Default select example" wire:model="category_id" name="category">
                    <option selected>Categorías</option>
                    @forelse ($categories as $category)

                        <option value="{{$category->id}}">{{$category->description}}</option>
                    @empty
                        <h2>No hay prioridades, aún!</h2>
                    @endforelse
                </select>
                @error('category_id') <span class="text-danger fw-bold">{{ $message }}</span> @enderror

                {{-- {{ dd($task_id->description) }} --}}
                <div class="input-group text-center mt-4">
                     <input type="text" placeholder="Actualizar la tarea..." class="form-control input-lg"
                     wire:model="task"
                     >
                    <span class="input-group-btn">
                        <button wire:click="update" type="button" class="btn btn-lg btn-warning">Actualizar</button>
                        <button wire:click="$set('showEdit', false)" type="button" class="btn btn-lg btn-danger">Cancelar</button>
                    </span>


                 </div>
                 @error('task') <span class="text-danger fw-bold">{{ $message }}</span> @enderror
            </form>

        </div>
    </div>
    <div class="col-md-6 bg-dark p-4 text-info d-flex justify-content-center">
        <h1 class="display-5">Edita la tarea </h1>
    </div>
</div>

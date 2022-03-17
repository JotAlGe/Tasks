<div class="container bootdey">
    <div class="col-md-8 col-sm-12">
        <div class="well">
            <form class="form">
            <h4>Ingresa una nueva tarea</h4>

                {{-- priorities --}}
                <label class="mt-4">Elige un prioridad</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @forelse ($priorities as $priority)

                        <option value="{{$priority->id}}">{{$priority->description}}</option>
                    @empty
                        <h2>No hay prioridades, aún!</h2>
                    @endforelse
                </select>
                {{-- categories --}}
                <label class="mt-4">Elige un Categor[ia</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @forelse ($categories as $category)

                        <option value="{{$category->id}}">{{$category->description}}</option>
                    @empty
                        <h2>No hay prioridades, aún!</h2>
                    @endforelse
                </select>

                <div class="input-group text-center mt-4">
                    <input wire:model="task" type="text" placeholder="New task to do..." class="form-control input-lg">
                    <span class="input-group-btn">
                        <button wire:click="save" type="button" class="btn btn-lg btn-primary"> Acordarme</button>
                    </span>
                </div>
                @error('task') <span class="text-danger">{{ $message }}</span> @enderror
                @if(session()->has('success')) <span class="text-success">{{ session('success') }}</span> @endif

            </form>
        </div>
    </div>
</div>

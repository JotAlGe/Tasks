<div class="row">
    @foreach ($tasks as $task)

        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default bg-dark px-3 py-1 shadow">
                <div class="panel-body">
                    <h2 class="text-thin mt text-white">{{ $task->description }}</h2>
                    <div class="clearfix">
                        <div class="pull-right text-end">
                            <small class="text-warning">Creado hace {{ $task->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
</div>


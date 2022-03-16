<div class="row">
    @foreach ($tasks as $task)
    {{-- {{ $task->id}}  - {{ $task->description }} --}}
    <div class="col-sm-6 col-xs-12">
        <div class="panel panel-default bg-success px-3 py-1">
            <div class="panel-body">
                <h2 class="text-thin mt text-white">{{ $task->description }}</h2>
                <div class="clearfix">
                    <div class="pull-right">
                        {{-- <ul class="list-inline m0">
                            <li class="p0">
                                <a href="">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Follower" class="img-responsive img-circle thumb24">
                                </a>
                            </li>
                            <li class="p0">
                                <a href="">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Follower" class="img-responsive img-circle thumb24">
                                </a>
                            </li>
                            <li class="p0">
                                <a href="">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Follower" class="img-responsive img-circle thumb24">
                                </a>
                            </li>
                            <li class="p0">
                                <a href="">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Follower" class="img-responsive img-circle thumb24">
                                </a>
                            </li>
                            <li class="p0">
                                <a href="" class="v-middle">
                                    <strong>+7</strong>
                                </a>
                            </li>
                        </ul> --}}
                        <small class="text-warning text-right">{{ $task->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>



@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Minhas Tarefas</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($tasks as $task)
                                <li class="list-group-item">
                                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->titulo }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

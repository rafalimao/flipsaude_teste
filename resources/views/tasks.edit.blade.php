
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar minha tarefa</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $task->titulo }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Descricao</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $task->descricao }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Editar >></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

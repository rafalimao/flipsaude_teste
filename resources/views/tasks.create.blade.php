
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Criar Nova Tarefa</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" class="form-control" id="titulo" name="titulo">
                            </div>

                            <div class="form-group">
                                <label for="description">Descricao</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="5"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Criar >></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

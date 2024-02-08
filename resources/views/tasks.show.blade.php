
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $task->titulo }}</div>

                    <div class="card-body">
                        <p>{{ $task->descricao }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

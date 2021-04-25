@extends('layouts.master')
@section('title', 'Tâche : ' . $task->name)
@section('content')
    <h1 class="mb-3">Tâche : {{ $task->name }}</h1>
    <div class="row">
        <div class="col-6">{{ $task->description }}</div>
        <div class="col-6">
            @if ($task->status)
                <a class="btn btn-success" href="{{ route('tasks.confirm', $task->id) }}">
                    Valider
                </a>
            @else
                <a class="btn btn-warning" href="{{ route('tasks.unconfirm', $task->id) }}">
                    Invalider
                </a>
            @endif
            <a class="btn btn-primary" href="{{ route('tasks.edit', $task->id) }}">
                Editer
            </a>
            <a class="btn btn-danger" href="{{ route('tasks.destroy', $task->id) }}">
                Supprimer
            </a>
        </div>
    </div>
@stop

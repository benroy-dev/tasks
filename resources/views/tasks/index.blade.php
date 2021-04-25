@extends('layouts.master')
@section('title', 'Liste des tâches en cours')
@section('content')
    <h2 class="mb-3">Liste des tâches en cours</h2>
    <table class="table">
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($tasks_unconfirmed as $task)
                <tr>
                    <td>
                        <a href="{{ route('tasks.show', $task->id) }}">
                            {{ $task->name }}
                        </a>
                    </td>
                    <td>
                        {{ $task->description }}
                    </td>
                    <td class="text-right">
                        <a class="btn btn-success" href="{{ route('tasks.confirm', $task->id) }}">
                            Valider
                        </a>
                        <a class="btn btn-primary" href="{{ route('tasks.edit', $task->id) }}">
                            Editer
                        </a>
                        <a class="btn btn-danger" href="{{ route('tasks.destroy', $task->id) }}">
                            Supprimer
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="mb-3">Liste des tâches validées</h2>
    <table class="table">
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($tasks_confirmed as $task)
                <tr>
                    <td>
                        <a href="{{ route('tasks.show', $task->id) }}">
                            {{ $task->name }}
                        </a>
                    </td>
                    <td>
                        {{ $task->description }}
                    </td>
                    <td class="text-right">
                        <a class="btn btn-warning" href="{{ route('tasks.unconfirm', $task->id) }}">
                            Invalider
                        </a>
                        <a class="btn btn-primary" href="{{ route('tasks.edit', $task->id) }}">
                            Editer
                        </a>
                        <a class="btn btn-danger" href="{{ route('tasks.destroy', $task->id) }}">
                            Supprimer
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

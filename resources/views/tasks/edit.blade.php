@extends('layouts.master')
@section('title', 'Editer une tâche')
@section('content')
    <h1 class="mb-3">Editer une tâche</h1>
    <form action="/tasks/{{ $task->id }}" method="post">
        {{csrf_field()}}
        <div class="form-group row align-items-center">
            <div class="col-4 mb-4">
                <label>Nom</label>
                <input type="text" name="name" class="form-control input-sm" value="{{ $task->name }}">
            </div>
            <div class="col-12 mb-2">
                <label>Description</label>
                <textarea rows="6" name="description" class="form-control input-sm">{{ $task->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Éditer</button>
    </form>
@stop

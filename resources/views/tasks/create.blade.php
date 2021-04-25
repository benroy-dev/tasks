@extends('layouts.master')
@section('title', 'Créer une tâche')
@section('content')
    <h1 class="mb-3">Créer une tâche</h1>
    <form action="/tasks" method="post">
        {{csrf_field()}}
        <div class="form-group row align-items-center">
            <div class="col-4 mb-4">
                <label>Nom</label>
                <input type="text" class="form-control input-sm" name="name">
            </div>
            <div class="col-12 mb-2">
                <label>Description</label>
                <textarea rows="6" class="form-control input-sm" name="description"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Créer tâche</button>
    </form>
@stop

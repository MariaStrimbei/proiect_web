@extends('layouts.master')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading"> Modificare informatii Eveniment</div>
    <div class="panel-body">
        <!-- Există înregistrări în tabelul events -->
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Eroare:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- Populez câmpurile formularului cu datele aferente din tabela events -->
        {!! Form::model($event, ['method' => 'PATCH','route' => ['events.update', $event->id]]) !!}
        <div class="form-group">
            <label for="name">Nume</label>
            <input type="text" name="name" class="form-control" value="{{ $event->name }}">
        </div>
        <div class="form-group">
            <label for="description">Descriere</label>
            <textarea name="description" class="form-control" rows="3">{{ $event->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" name="date" class="form-control" value="{{ $event->date }}">
        </div>

        <div class="form-group">
            <label for="location">Locație</label>
            <input type="text" name="location" class="form-control" value="{{ $event->location }}">
        </div>
        <div class="form-group">
            <input type="submit" value="Salvare Modificări" class="btn btn-info">
            <a href="{{ route('events.index') }}" class="btn btn-default">Cancel</a>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
@extends('layouts.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Adaugă Eveniment nou</div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ Form::open(array('route' => 'events.store', 'method' => 'POST')) }}
            <div class="form-group">
                <label for="name">Titlu eveniment</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="description">Descriere</label>
                <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Data</label>
                <input type="date" name="date" class="form-control" value="{{ old('date') }}">
            </div>
            <div class="form-group">
                <label for="location">Locație</label>
                <input type="text" name="location" class="form-control" value="{{ old('location') }}">
            </div>
            <div class="form-group">
                <input type="submit" value="Adauga Eveniment" class="btn btn-info">
                <a href="{{ route('events.index') }}" class="btn btn-default">Cancel</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

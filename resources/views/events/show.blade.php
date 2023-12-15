@extends('layouts.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            View Event
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('events.index') }}">Inapoi</a>
            </div>
            <div class="form-group">
                <strong>Nume: </strong> {{ $event->name }}
            </div>
            <div class="form-group">
                <strong>Descriere: </strong> {{ $event->description }}
            </div>
            <div class="form-group">
                <strong>Data: </strong> {{ $event->date }}
            </div>
            <div class="form-group">
                <strong>Locație: </strong> {{ $event->location }}
            </div>
        </div>
    </div>
@endsection

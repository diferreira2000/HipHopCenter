@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show {{ $genero->nome }} Songs</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('generos.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection

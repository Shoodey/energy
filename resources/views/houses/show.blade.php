@extends('layouts.app')

@section('content')
    <div class="page-header" style="justify-content: space-between;">
        <h1 class="page-title">
            <i class="fe fe-grid"></i> {{ $game->name }}
        </h1>
        <h2 class="page-title">
            <small class="text-muted"><i class="fe fe-user"></i> {{ $game->user->username }}</small>
        </h2>
    </div>

    <game :game="{{ json_encode($game) }}"></game>
@endsection

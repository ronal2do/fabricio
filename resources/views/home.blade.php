@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if ( Auth::user()->admin )
           @include('painel.admin.panel-body')
        @else
           @include('painel.user.panel-body')
        @endif

    </div>
</div>

@endsection

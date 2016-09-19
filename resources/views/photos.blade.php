@extends('layouts.app')

@section('content')
	<div class="col-md-10 col-md-offset-1">
	    @include('painel.foto.tabela')            
	    @include('painel.foto.index')            
	</div>
@endsection
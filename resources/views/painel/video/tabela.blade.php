@if ( Auth::user()->admin )
	<div class="col-md-7">
	
@else
	<div class="col-md-12">
@endif

    <div class="panel panel-default">
        <div class="panel-heading">Vídeos</div>
        <div class="panel-body">
         @include('painel.video.table')
        </div>
    </div>
</div>
@extends('layouts.site')

@section('content')
    <style>
     .pagination {
        display: flex;
        padding-left: 5px;
        margin: 1em;
        /* padding: 1em; */
        /* margin-bottom: 1rem; */
        border-radius: 0.25rem;
    }
    </style>

    <div class="plano biografias">
        <div class="container">

                <div class="frase">
                    <div class="col-md-4">
                        <span class="hr">
                            <img src="./img/dotted.png" alt="" style="max-width:100%;">
                        </span>
                    </div>  

                    <div class="col-md-4 text-md-center">
                        <h2 class="planodecidade">Fotos</h2>
                    </div> 

                     <div class="col-md-4">
                        <span class="hr">
                            <img src="./img/dotted.png" alt="" style="max-width:100%;">
                        </span>
                    </div>  

                </div>
              
        </div>
    </div>

    <section id="fabricio" class="fabricio">
        <div class="container">  
            <div class="row">

                <div class="padding"></div>
                @if($photos->count() > 0)
                    @foreach($photos as $p)
                    <div class="col-lg-3 col-md-4 col-xs-6 img-thumb">
                        <a class="thumbnail" href="/uploads/{{$p->name}}.png" data-gallery>
                            <img class="img-responsive" src="/uploads/{{$p->name}}.png" alt="{{$p->name}}">
                        </a>
                        @if($p->location)<p>{{$p->location}}</p>@endif
                        @if($p->description)<p>{{$p->description}}</p>@endif
                    </div>
                    @endforeach()

                @else
                    <p>Sem fotos</p>
                @endif
            </div>
            <hr />
            @if($photos->count() > 0)
                {{ $photos->links() }}
            @endif
        </div>
    </section>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

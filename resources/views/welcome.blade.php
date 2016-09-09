@extends('layouts.site')

@section('content')

    <section class="header">
        <div class="banner" style="">
        </div>

        <div class="plano">
            <div class="container">
                <div class="col-md-10">
                    <div class="frase">
                        <div class="col-md-7">
                            <span class="hr">
                                <img src="./img/dotted.png" alt="" style="max-width:100%;">
                            </span>
                        </div>  
                        <div class="col-md-5 pull-sm-right">
                            <h2 class="planodecidade">plano de cidade</h2>
                        </div> 
                    </div>
                  

                </div>
                <div class="col-md-2">

                    <div class="text-sm-center">
                        <a href="/baixar" class="btn btn-warning btn-header">download</a>  
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="ideias">
        <div class="container">
           <div class="tab-content" id="myTabContent"> 
                <div class="tab-pane fade in active" role="tabpanel" id="home">
                @include('includes.tab')
                </div>

                <div class="tab-pane fade" role="tabpanel" id="eixos">
                   
                      
                        <h2 class="h2">A QUEDA DO MURO</h2>
                        <h3 class="Eixo__sub">Cidade unificada</h3>
                        <p >A cidade que vamos construir juntos será unificada em tratamento e em benefícios de forma igualitária, com investimentos, obras e políticas públicas que atendam a todos os bairros. A divisão entre centro, beira-mar e bairros que atualmente existe, vai acabar, implementaremos uma gestão para uma cidade única.
                        </p>
             
                        <h2 class="h2">GOVERNO DECENTE </h2>
                        <h3 class="Eixo__sub">Gestão Moderna, Eficaz, Transparente e junto das Pessoas</h3>
                        <p >
                            A cidade será administrada de forma plural, governo e sociedade. Uma gestão pública moderna e eficaz, amparada pela tecnologia e focada na funcionalidade, planejando uma Balneário para os próximos 20 anos. Um governo transparente que garantirá o acesso público à informação, focado em profissionalização, meritocracia, capacitação e valorização do quadro de servidores municipais.
                        </p>
         
                        <h2 class="h2">TODOS SOMOS BALNEÁRIO</h2>
                        <h3 class="Eixo__sub">Cuidar da cidade é cuidar das pessoas</h3>
                        <p >Além de investimentos habituais em obras e em políticas públicas que fortalecem a infraestrutura e a prestação de serviços à população, teremos algo a mais: o compromisso em cuidar e atender bem às pessoas. As áreas de Educação, Saúde, Acessibilidade e Segurança demandam atenção especial, com ferramentas de tecnologia e modernização da gestão. A cidade não pode mais perder recursos estaduais e federais nessas áreas.
                        </p>
                   
       
                        <h2 class="h2">BALNEÁRIO DE ÁGUAS LIMPAS</h2>
                        <h3 class="Eixo__sub">Cidade Desenvolvida e Sustentável</h3>
                        <p >
                            Desenvolvimento econômico e cidade sustentável, onde o poder público e a iniciativa privada caminhem juntos, com responsabilidade social e ambiental, construindo um futuro saudável das gerações. Nossa cidade necessita de saneamento básico de padrão internacional, água e praias limpas. Nosso pulmão verde do Interpraias pode ser explorado de forma consciente. Nova matriz econômica é uma necessidade, tecnologia é uma oportunidade, nossa gente em nossas universidades deve fazer parte da construção desse novo modelo. Atrair riqueza o ano todo com uma cidade de referências positivas é fundamental, turismo de inverno e grandes eventos culturais, esportivos, de lazer e corporativos são necessidades para o desenvolvimento da cidade. 
                        </p>
                        <p class="Eixo__destaque">
                            Vamos construir a Balneário que queremos para os próximos 20 anos.
                        </p>
                        <p class="Eixo__destaque">
                            Fabrício Oliveira <br>
                                Presidente do PSB/BC
                        </p>

                 
                </div>

                <div class="tab-pane fade" role="tabpanel" id="form">
                    <div class="col-sm-5">
                        <img src="./img/fabricio_square.png" alt="" style="max-width:100%;">
                    </div>
                    <div class="col-sm-7">
                        @include('includes.form')
                    </div>
                </div>

            </div>

            <div class="col-sm-12 text-sm-center">
                <br>
                <br>

                <a data-toggle="tab" href="#home" class="btn btn-primary">novas ideias</a>
                <a data-toggle="tab" href="#eixos" class="btn btn-primary">eixos</a>
                <a data-toggle="tab" href="#form" class="btn btn-primary">suas ideias</a>
            </div>
        </div>
    </section>


    <section class="biografia">
        <div class="container-fluid" style="max-width:1400px;">
            <a href="/biografias">
                <img src="./img/bio.png" alt="" class="" style="max-width: 100%">
            </a>
        </div>
    </section>

    <section class="agenda" id="agenda">
        <div class="container">
            <h1 class="h1">Agenda 
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="87.87px" height="96.38px" viewBox="0 0 87.87 96.38" xml:space="preserve">
                <g>
                    <g>
                        <path fill="#54C5D1" d="M76.172,8.295H65.159v1.336c0.83,1.067,1.329,2.407,1.329,3.864c0,3.486-2.827,6.312-6.312,6.312
                            c-3.486,0-6.313-2.826-6.313-6.312c0-1.457,0.499-2.797,1.329-3.864V8.295H34.286v1.336c0.83,1.067,1.33,2.407,1.33,3.864
                            c0,3.486-2.827,6.312-6.314,6.312c-3.485,0-6.312-2.826-6.312-6.312c0-1.457,0.499-2.797,1.329-3.864V8.295H13.306
                            c-2.166,0-3.924,1.757-3.924,3.924v63.413c0,2.168,1.758,3.924,3.924,3.924h62.866c2.167,0,3.924-1.756,3.924-3.924V12.219
                            C80.096,10.052,78.339,8.295,76.172,8.295z M76.172,75.632H13.306v-45.86h62.866V75.632z"/>
                        <g>
                            <path fill="#54C5D1" d="M29.302,15.513c-1.885,0-3.413-1.529-3.413-3.414V4.49c0-1.886,1.528-3.414,3.413-3.414
                                c1.886,0,3.415,1.528,3.415,3.414v7.608C32.717,13.983,31.188,15.513,29.302,15.513z"/>
                            <path fill="#54C5D1" d="M60.176,15.513c-1.885,0-3.414-1.529-3.414-3.414V4.49c0-1.886,1.529-3.414,3.414-3.414
                                S63.59,2.604,63.59,4.49v7.608C63.59,13.983,62.061,15.513,60.176,15.513z"/>
                        </g>
                        <g>
                            <rect x="29.836" y="35.313" fill="#54C5D1" width="7.832" height="6.329"/>
                            <rect x="40.822" y="35.313" fill="#54C5D1" width="7.833" height="6.329"/>
                            <rect x="51.81" y="35.313" fill="#54C5D1" width="7.833" height="6.329"/>
                            <rect x="62.797" y="35.313" fill="#54C5D1" width="7.832" height="6.329"/>
                            <rect x="18.849" y="44.797" fill="#54C5D1" width="7.833" height="6.328"/>
                            <rect x="29.836" y="44.797" fill="#54C5D1" width="7.832" height="6.328"/>
                            <rect x="40.822" y="44.797" fill="#54C5D1" width="7.833" height="6.328"/>
                            <rect x="51.81" y="44.797" fill="#54C5D1" width="7.833" height="6.328"/>
                            <rect x="62.797" y="44.797" fill="#54C5D1" width="7.832" height="6.328"/>
                            <rect x="18.849" y="54.279" fill="#54C5D1" width="7.833" height="6.328"/>
                            <rect x="29.836" y="54.279" fill="#54C5D1" width="7.832" height="6.328"/>
                            <rect x="40.822" y="54.279" fill="#54C5D1" width="7.833" height="6.328"/>
                            <rect x="51.81" y="54.279" fill="#54C5D1" width="7.833" height="6.328"/>
                            <rect x="62.797" y="54.279" fill="#54C5D1" width="7.832" height="6.328"/>
                            <rect x="18.849" y="63.762" fill="#54C5D1" width="7.833" height="6.328"/>
                            <rect x="29.836" y="63.762" fill="#54C5D1" width="7.832" height="6.328"/>
                        </g>
                    </g>
                    
                        <radialGradient id="SVGID_1_" cx="97.2969" cy="319.1562" r="279.5684" gradientTransform="matrix(0.1527 0 0 0.0236 29.8823 82.0576)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#989898"/>
                        <stop  offset="0.1907" style="stop-color:#AEADAD"/>
                        <stop  offset="0.5541" style="stop-color:#D5D4D3"/>
                        <stop  offset="0.8359" style="stop-color:#F1F0EF"/>
                        <stop  offset="1" style="stop-color:#FFFFFF"/>
                    </radialGradient>
                    <ellipse fill="url(#SVGID_1_)" cx="44.739" cy="89.59" rx="42.71" ry="6.595"/>
                </g>
            </svg>
            </h1>
            <br>
            @if($agendas->count() > 0)
                @foreach($agendas as $a)
                <div class="artigo">
                    <h3 class="h3">Dia {{ date('d/m ', strtotime($a->data)) }} @if( $a->hora != null || $a->hora != '' ) a partir das {{$a->hora}}h @endif</h3>
                    <h4 class="h4">{{$a->titulo}}</h4>
                    <p>{{$a->detalhes}}</p>
                </div>
                @endforeach
            @else
                 <div class="artigo">
                    <p>Sem novas datas</p>
                </div>
            @endif
            
        </div>
    </section>

    <section id="videos" class="video">
        <div class="container">
            <h1 class="h1">YouTube</h1>
        </div>
        <div class="sessao_video" ng-controller="controller">

            <div id="player-container1" class="player-container contain-mlvp">
                <div class="player-container">

                    <!-- THE YOUTUBE PLAYER -->
                    <div class="vid-container">
                        @if($destaque->count() > 0)
                            @foreach ($destaque as $id)
                            <iframe id="vid_frame" src="http://www.youtube.com/embed/{{$id->url}}?rel=0&showinfo=0&autohide=1" width="560" height="315" frameborder="0"></iframe>
                            @endforeach
                        @else
                            <iframe id="vid_frame" src="http://www.youtube.com/embed/GYfLK9eOneA?rel=0&showinfo=0&autohide=1" width="560" height="315" frameborder="0"></iframe>
                        @endif
                       
                    </div>

                    <div class="owl-carousel">
                    @if($videos->count() > 0)
                        @foreach($videos as $v)
                        <div class="" onclick="document.getElementById('vid_frame').src='http://youtube.com/embed/{{$v->url}}?autoplay=1&amp;rel=0&amp;showinfo=0&amp;autohide=1'">
                          <div class="thumb"><img src="http://img.youtube.com/vi/{{$v->url}}/0.jpg"></div>
                          <div class="desc">{{$v->titulo}}</div>
                        </div>
                       @endforeach
                    @else
                         <div class="artigo">
                            <p>Sem novas datas</p>
                        </div>
                    @endif
                       
                                               
                    </div>


                </div>
            </div>
        </div>           
         <div class="col-sm-12 text-sm-center">
              
                   <a class="btn btn-warning btn-todos" href="https://www.youtube.com/channel/UC5DsmBGsyR5dMmxl4NokHqA?sub_confirmation=1" target="_blank">ver todos</a>
            </div>
    </section>

@endsection



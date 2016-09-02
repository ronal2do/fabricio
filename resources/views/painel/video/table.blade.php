  <table class="table table-condensed table-striped table-hovered">
    <thead>
      <tr>        
        <th>Título</th>
        <th>ID do Youtube</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>

      @foreach($videos as $v)
      <tr>

        <td>{{ $v->titulo }}</td>     
        <td>{{ $v->url }}</td>
     
        <td>
        @if ( Auth::user()->admin )
           <a href="/{{ $v->id }}/delvideo"><i class="glyphicon glyphicon-trash"></i></a>
        @endif       
        </td>
   
      </tr>
      @endforeach
    </tbody>
  </table>
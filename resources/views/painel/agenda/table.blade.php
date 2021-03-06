  <table class="table table-condensed table-striped table-hovered">
    <thead>
      <tr>        
        <th>Data</th>
        <th>Hora</th>
        <th>Título</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>

      @foreach($agendas as $a)
      <tr>
        <td>{{ date('d/m ', strtotime($a->data)) }}</td>
        <td>{{ $a->hora }}</td>
        <td>{{ $a->titulo }}</td>     
        <td>
        @if ( Auth::user()->admin )
            <a href="/{{ $a->id }}/editar"><i class="glyphicon glyphicon-pen"></i></a>
            <a href="/{{ $a->id }}/deletar"><i class="glyphicon glyphicon-trash"></i></a>
        @endif       
        </td>
   
      </tr>
      @endforeach
    </tbody>
  </table>
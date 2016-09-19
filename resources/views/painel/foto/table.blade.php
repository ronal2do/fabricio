  <table class="table table-condensed table-striped table-hovered">
    <thead>
      <tr>        
        <th>Nome</th>
        <th>Local</th>
        <th>Descrição</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>

      @foreach($photos as $p)
      <tr>
        <td><img src="/uploads/{{ $p->name }}.png" alt="" width="50px"> {{ $p->name }} </td>
        <td>{{ $p->location }}</td>
        <td>{{ $p->description }}</td>     
        <td>
        @if ( Auth::user()->admin )
            <a href="/{{ $p->id }}/editar"><i class="glyphicon glyphicon-pen"></i></a>
            <a href="/{{ $p->id }}/deletar"><i class="glyphicon glyphicon-trash"></i></a>
        @endif       
        </td>
   
      </tr>
      @endforeach
    </tbody>
  </table>
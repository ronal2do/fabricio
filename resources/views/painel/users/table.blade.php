 <table class="datatable table table-striped" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
             @if ( Auth::user()->admin )<th>Permissão</th>
            <th>#</th>    @endif
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $u)
        <tr>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
                @if ( !Auth::user()->admin )
                <td> @if ( Auth::user()->admin ) Admin @else Usuário @endif| <strong><a href="/{{$u->id}}/set"><i class="fa fa-sort"></i> Mudar</a></strong></td>
                <td><strong><a href="/{{$u->id}}/deluser"><i class="fa fa-times-circle"></i> Deletar</a></strong></td>
                @endif
        </tr>
        @endforeach
    </tbody>
</table>
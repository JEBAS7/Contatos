@extends('layout.app')

@section('content')

<table id="example" class="display" style="width:100%">
        <thead>
            <a href="{{ route('contato.frontend.contato') }}"><h1><b>Cadastrar Contato</b></h1></a>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>fone</th>
                <th>home</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contatos as $contato)
                <tr>
                    <td>
                        {{ $contato->id }}
                    </td>
                    <td>
                        {{ $contato->name }}
                    </td>
                    <td>
                        {{ $contato->email }}
                    </td>
                    <td>
                        {{ $contato->fone }}
                    </td>
                    <td>
                        {{ $contato->home }}
                    </td>
                    <td><a href="{{ route('contato.backend.edit', $contato->id) }}"class='btn btn-primary'>Editar</a></td>
                    <td><a href="{{ route('contato.backend.delete', $contato->id) }}"class='btn btn-danger'>Deletar</a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>fone</th>
                <th>home</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </tfoot>
    </table>

@endsection

@section('js')

<script>
$(document).ready(function() {
    var table =   $('#example').DataTable();

    $('#example tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();

    } );
} );
</script>
@endsection

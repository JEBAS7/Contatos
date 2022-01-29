@extends('layout.app')

@section('content')

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td><a href="{{ route('user.backend.edit', $user->id) }}"class='btn btn-primary'>Editar</a></td>
                    <td><a href="{{ route('user.backend.delete', $user->id) }}"class='btn btn-danger'>Deletar</a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
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

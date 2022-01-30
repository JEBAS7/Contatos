@extends('layout.app')

@section('content')

<div class="container">

        <div class="row">

            <form action="" method="POST"><br>
                @csrf
                <label for=""><h1><b>Cadastrar Contato:</b></h1></label><br><br>
                <label for="">Nome:</label>
                <input type="text" name="nome"><br><br>

                <label for="">Email:</label>
                <input type="email" name="email"><br><br>

                <label for="">Fone:</label>
                <input type="number" name="fone"><br><br>

                <label for="">Home:</label>
                <input type="text" name="home"><br><br>

                <input type="submit" class="btn btn-success" value="Enviar"><br><br>

                <a href="{{ route('contato.backend.listcontatos') }}"><h1><b>Contatos</b></h1></a>


            </form>


        </div>


</div>


@endsection

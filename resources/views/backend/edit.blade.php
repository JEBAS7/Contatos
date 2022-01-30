@extends('layout.app')

@section('content')

<div class="container">

        <div class="row">

            <form action="{{route('contato.backend.put.edit', $contato->id)}}" method="POST"><br>
                @csrf
                @method('put')
                <label for="">Nome:</label>
                <input type="text" name="nome" value="{{ $contato->name}}"><br><br>

                <label for="">Email:</label>
                <input type="email" name="email" value="{{ $contato->email}}"><br><br>

                <label for="">Fone:</label>
                <input type="fone" name="fone" value="{{ $contato->fone}}"><br><br>

                <label for="">Home:</label>
                <input type="home" name="home" value="{{ $contato->home}}"><br><br>

                <input type="submit" class="btn btn-success" value="Editar">

            </form>


        </div>


</div>

@endsection

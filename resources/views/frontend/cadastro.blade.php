@extends('layout.app')

@section('content')

<div class="container">

        <div class="row">

            <form action="{{route('user.post.cadastro')}}" method="POST">
                @csrf
                <label for="">Nome:</label>
                <input type="text" name="nome">

                <label for="">Email</label>
                <input type="email" name="email">

                <input type="submit" class="btn btn-success" value="Enviar">

            </form>


        </div>


</div>


@endsection

@extends('layout.app')

@section('content')

<div class="container">

        <div class="row">

            <form action="{{route('user.backend.put.edit', $user->id)}}" method="POST">
                @csrf
                @method('put')
                <label for="">Nome:</label>
                <input type="text" name="nome" value="{{ $user->name}}">

                <label for="">Email</label>
                <input type="email" name="email" value="{{ $user->email}}">

                <input type="submit" class="btn btn-success" value="Editar">

            </form>


        </div>


</div>

@endsection

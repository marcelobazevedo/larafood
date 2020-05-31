@extends('adminlte::page')

@section('title', 'Detalhes do Usuário')

@section('content_header')
    <h1>Detalhes do Usuário <b>{{$user->name}}</b></h1>
@stop

@section('content')
    <div class="card">

            <div class="card-body">
                <ul>
                    <li>
                        <strong>Nome: </strong>{{$user->name}}
                    </li>
                    <li>
                        <strong>Email: </strong>{{$user->email}}
                    </li>
                    <li>
                        <strong>Empresa: </strong>{{$user->tenant->name}}
                    </li>
                </ul>

                <form action="{{route('users.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar o Usuário</button>
                </form>
            </div>
    </div>
@endsection

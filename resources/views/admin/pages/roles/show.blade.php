@extends('adminlte::page')

@section('title', 'Detalhes do Cargo')

@section('content_header')
    <h1>Detalhes do Cargo <b>{{$role->name}}</b></h1>
@stop
@section('content')
    <div class="card">

            <div class="card-body">
                <ul>
                    <li>
                        <strong>Nome: </strong>{{$role->name}}
                    </li>

                    <li>
                        <strong>Descrição: </strong>{{$role->description}}
                    </li>
                </ul>

                <form action="{{route('roles.destroy', $role->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar o cargo</button>
                </form>
            </div>
    </div>
@endsection

@extends('adminlte::page')

@section('title', 'Detalhes do Plano')

@section('content_header')
    <h1>Detalhes do Plano <b>{{$plans->name}}</b></h1>
@stop

@section('content')
    <div class="card">

            <div class="card-body">
                <ul>
                    <li>
                        <strong>Nome: </strong>{{$plans->name}}
                    </li>
                    <li>
                        <strong>Url: </strong>{{$plans->url}}
                    </li>
                    <li>
                        <strong>Preço: </strong>R$ {{number_format($plans->price, 2, '.', '.')}}
                    </li>
                    <li>
                        <strong>Descrição: </strong>{{$plans->description}}
                    </li>
                </ul>

                <form action="{{route('plans.destroy', $plans->url)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar o Plano</button>
                </form>
            </div>
    </div>
@endsection

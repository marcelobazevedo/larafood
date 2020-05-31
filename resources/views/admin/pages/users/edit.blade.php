@extends('adminlte::page')

@section('title', 'Editar o Usuário')

@section('content_header')
    <h1>Editar o Usuário</h1>
@stop

@section('content')
    <div class="card">

            <div class="card-body">
                <form action="{{route('users.update', $user->id)}}" class="form" method="post">
                    @csrf
                    @method('PUT')
                    @include('admin.pages.users._partials.form')
                </form>
            </div>

    </div>
@endsection

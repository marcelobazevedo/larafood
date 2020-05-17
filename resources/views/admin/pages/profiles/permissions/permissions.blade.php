@extends('adminlte::page')

@section('title', 'Permissões do Perfil {$profile->name}')

@section('content_header')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{route('profiles.index')}}">Perfis</a></li>
</ol>
    <h1>Permissões do Perfil {{$profile->name}}
        <a href="{{route('profiles.permissions.available', $profile->id)}}" class="btn btn-dark">ADD Nova Permissão</a></h1>


@stop

@section('content')
    <div class="card">
        <div class="card-body">
           <table class="table table-condensed">
               <thead>
                   <tr>
                       <th>Nome</th>
                       <th width="50">Ações</th>
                   </tr>
               </thead>
               <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{$permission->name}}</td>
                        <td style="width=10px;">
                            <a href="{{route('profiles.permission.dettach', [$profile->id, $permission->id])}}" class="btn btn-danger">Desvincular</a>

                        </td>
                    </tr>
                @endforeach
               </tbody>
           </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
            {!! $permissions->appends($filters)->links()  !!}
            @else
            {!! $permissions->links()  !!}
            @endif

        </div>
    </div>
@stop

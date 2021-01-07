{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Users list')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- users list start -->
<section class="users-list-wrapper section">

  <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <div class="row pt-2">
          <div class="col s6">
            <h4 class="card-title indigo-text pb-5"><strong>Usuários</strong></h4>
          </div>
          @role('create|admin')
            <div class="col s6 right-align">
              <a href="/usuario/novo" class="waves-effect waves-light btn-small"><i class="material-icons left">person_add</i>Adicionar usuário</a>
            </div>
          @endrole
        </div>
        <div class="responsive-table pt-3">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Situação</th>
                @role('read|edit|delete|admin')
                  <th>Ações</th>
                @endrole
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                  <td></td>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td class="green-text">{{ $user->status }}</td>
                  @role('read|edit|delete|admin')
                    <td>
                      @role('read|admin')
                        <a href="usuario/visualizar/{{ $user->id }}"><i class="material-icons">remove_red_eye</i></a>
                      @endrole
                      @role('edit|admin')
                        <a href="usuario/editar/{{ $user->id }}"><i class="material-icons">edit</i></a>
                      @endrole
                      @role('delete|admin')
                        <a href="usuario/apagar/{{ $user->id }}"><i class="material-icons">delete_forever</i></a>
                      @endrole
                    </td>
                  @endrole
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/users.js')}}"></script>
@endsection
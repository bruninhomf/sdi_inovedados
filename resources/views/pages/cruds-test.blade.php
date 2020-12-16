{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Proposta - Servidor Virtual')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<section class="users-list-wrapper section">
  
  <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <div class="row">
            <div class="col s6">
                <h4 h4 class="card-title indigo-text pb-5"><strong>Testes - Cruds</strong></h4>
            </div>
            <div class="col s6 right-align">
                <a href="teste-crudes/novo" class="waves-effect waves-light btn-small"><i class="material-icons left">receipt</i>Nova Proposta</a>
            </div>
        </div>
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome do Projeto</th>
                <th>Data</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($crudstestsystems as $key => $crudstestsystem)
                <tr>
                  <td>{{ $crudstestsystem->id }}</td>
                  <td>{{ $crudstestsystem->project_name }}</td>
                  <td>{{ $crudstestsystem->created_at }}</td>
                  <td>
                      <a href="teste-crudes/visualizar/{{ $crudstestsystem->id }}"><i class="material-icons">remove_red_eye</i></a>
                      <a href="teste-crudes/editar/{{ $crudstestsystem->id }}"><i class="material-icons">edit</i></a>
                      <a href="teste-crudes/apagar/{{ $crudstestsystem->id }}"><i class="material-icons">delete_forever</i></a>
                  </td>
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
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection
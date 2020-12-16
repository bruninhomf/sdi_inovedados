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
<!-- users list start -->
<section class="users-list-wrapper section">
  
  <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <div class="row">
            <div class="col s6">
                <h4 h4 class="card-title indigo-text pb-5"><strong>Teste de Requisitos</strong></h4>
            </div>
            <div class="col s6 right-align">
                <a href="teste-requisitos/novo" class="waves-effect waves-light btn-small"><i class="material-icons left">receipt</i>Nova Proposta</a>
            </div>
        </div>
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($requirementtestsystems as $key => $requirementtestsystem)
                <tr>
                  <td>{{ $requirementtestsystem->id }}</td>
                  <td>{{ $requirementtestsystem->project_name }}</td>
                  <td>{{ $requirementtestsystem->created_at }}</td>
                  <td>
                      <a href="teste-requisitos/visualizar/{{ $requirementtestsystem->id }}"><i class="material-icons">remove_red_eye</i></a>
                      <a href="teste-requisitos/editar/{{ $requirementtestsystem->id }}"><i class="material-icons">edit</i></a>
                      <a href="teste-requisitos/apagar/{{ $requirementtestsystem->id }}"><i class="material-icons">delete_forever</i></a>
                  </td>
                </tr>
              @endforeach              
            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
      </div>
    </div>
  </div>
</section>
<!-- users list ends -->
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
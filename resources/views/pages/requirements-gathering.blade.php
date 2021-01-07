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
        <div class="row pt-2">
          <div class="col s6">
            <h4 class="card-title indigo-text pb-5"><strong>Levantamento de Requisitos</strong></h4>
          </div>
          @role('create|admin')
            <div class="col s6 right-align">
              <a href="/requisitos/novo" class="waves-effect waves-light btn-small"><i class="material-icons left">receipt</i>Nova Proposta</a>
            </div>
          @endrole
        </div>
        <div class="responsive-table pt-3">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th></th>
                <th>ID</th>
                <th>Nome do Projeto</th>
                <th>Versão</th>
                <th>Data</th>
                @role('read|edit|delete|admin')
                  <th>Ações</th>
                @endrole
              </tr>
            </thead>
            <tbody>
              @foreach($requirementsgatherings as $key => $requirementsgathering)
                <tr>
                  <td></td>
                  <td>{{ $requirementsgathering->id }}</td>
                  <td>{{ $requirementsgathering->project_name }}</td>
                  <td>{{ $requirementsgathering->version }}</td>
                  <td>{{ date('d/m/Y', strtotime($requirementsgathering->date)) }}</td>
                  @role('read|edit|delete|admin')
                    <td>
                      @role('read|admin')
                        <a href="requisitos/visualizar/{{ $requirementsgathering->id }}"><i class="material-icons">remove_red_eye</i></a>
                      @endrole
                      @role('edit|admin')
                        <a href="requisitos/editar/{{ $requirementsgathering->id }}"><i class="material-icons">edit</i></a>
                      @endrole
                      @role('delete|admin')
                        <a href="requisitos/apagar/{{ $requirementsgathering->id }}"><i class="material-icons">delete_forever</i></a>
                      @endrole
                    </td>
                  @endrole
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
<script src="{{asset('js/scripts/requirement-gathering.js')}}"></script>
@endsection
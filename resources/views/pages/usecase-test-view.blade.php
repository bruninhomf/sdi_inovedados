{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Teste de Caso de Uso')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content  --}}
@section('content')
<!-- users view start -->
<div class="section users-view">
  <!-- users view media object start -->
  <div class="card-panel">
    <div class="row">
      <div class="col s12 m7">
        <div class="display-flex media">
          <div class="media-body pl-2">
            <h5 class="media-heading pt-1">
              <span class="users-view-">Teste de Caso de Uso</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2" width="500">
        <a href="/teste-caso-de-uso" class="btn-small btn-light-indigo">
          <i class="material-icons mb-5">arrow_back</i>
        </a>
        @role('print|admin')
        <a href="/teste-caso-de-uso/excel/{{ $usecasetestsystems->id }}" class="btn-small btn-waves-light">
          <i class="material-icons mb-3">file_download</i>
          Excel
        </a>
        @endrole
        @role('edit|admin')
        <a href="/teste-caso-de-uso/editar/{{ $usecasetestsystems->id }}" class="btn-small indigo">
          <i class="material-icons mb-5">edit</i>
          Editar
        </a>
        @endrole
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12">
          <table class="striped text-nowrap">
            <tbody>
              <tr>
                <td>Nome do projeto:</td>
                <td>{{ $usecasetestsystems->project_name }}</td>
              </tr>
              <tr>
                <td>Data:</td>
                <td>{{ date('d/m/Y', strtotime($usecasetestsystems->created_at)) }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection
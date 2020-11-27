{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Users View')

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
              <span class="users-view-">Servidor Virtual</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2" width="500">
        <a href="/virtual" class="btn-small btn-light-indigo">
          <i class="material-icons mb-5">arrow_back</i>
          Voltar
        </a>
        <a href="/virtual/pdf/{{ $virtualproposal->id }}" class="btn-small btn-waves-light">
          <i class="material-icons mb-3">print</i>
          PDF
        </a>
        <a href="/virtual/editar/{{ $virtualproposal->id }}" class="btn-small indigo">
          <i class="material-icons mb-5">edit</i>
          Editar
        </a>
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
                <td>CPU:</td>
                <td>{{ $virtualproposal->cpu }}</td>
              </tr>
              <tr>
                <td>Memoria:</td>
                <td>{{ $virtualproposal->memory }}</td>
              </tr>
              <tr>
                <td>Rede:</td>
                <td>{{ $virtualproposal->network }}</td>
              </tr>
              <tr>
                <td>Sistema Operacional:</td>
                <td>{{ $virtualproposal->system }}</td>
              </tr>
              <tr>
                <td>IP:</td>
                <td>{{ $virtualproposal->ip }}</td>
              </tr>
              <tr>
                <td>Valor:</td>
                <td>{{ $virtualproposal->value }}</td>
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
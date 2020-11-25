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
<div class="section users-view">
  <!-- users view media object start -->
  <div class="card-panel">
    <div class="row">
      <div class="col s12 m7">
        <div class="display-flex media">
          <div class="media-body pl-2">
            <h5 class="media-heading pt-1">
              <span class="users-view-">Servidor de Armazenamento</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2" width="500">
        <a href="/armazenamento" class="btn-small btn-light-indigo">
          <i class="material-icons mb-5">arrow_back</i>
          Voltar
        </a>
        <a href="/armazenamento/imprimir/{{ $storageproposal->id }}" class="btn-small btn-waves-light">
          <i class="material-icons mb-3">print</i>
          Imprimir
        </a>
        <a href="/armazenamento/editar/{{ $storageproposal->id }}" class="btn-small indigo">
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
                <td>Espaço em disco:</td>
                <td>{{ $storageproposal->diskspace }}</td>
              </tr>
              <tr>
                <td>Tráfego de dados:</td>
                <td>{{ $storageproposal->traffic }}</td>
              </tr>
              <tr>
                <td>Conexões simultâneas:</td>
                <td>{{ $storageproposal->connections }}</td>
              </tr>
              <tr>
                <td>Contas de FTP:</td>
                <td>{{ $storageproposal->accounts }}</td>
              </tr>
              <tr>
                <td>Valor:</td>
                <td>{{ $storageproposal->value }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<!-- users view ends -->
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection
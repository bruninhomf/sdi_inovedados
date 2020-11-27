{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Proposta - Servidor de Armazenamento')

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
              <h4 h4 class="card-title indigo-text pb-5"><strong>Proposta - Servidor de Armazenamento</strong></h4>
          </div>
          <div class="col s12" id="account">
            <form action="/armazenamento" method="POST">
              @csrf
              <div class="row">
                <div class="col s12 m6">
                  <div class="row">
                    <div class="col s12 input-field">
                      <input id="diskspace" name="diskspace" type="text" class="validate" data-error=".errorTxt2">
                      <label for="diskspace">Espaço em disco</label>
                      <small class="errorTxt2"></small>
                    </div>
                    <div class="col s12 input-field">
                      <input id="traffic" name="traffic" type="text" class="validate" data-error=".errorTxt1">
                      <label for="traffic">Tráfego de dados</label>
                      <small class="errorTxt1"></small>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6">
                  <div class="row">
                    <div class="col s12 input-field">
                      <input id="connections" name="connections" type="text" class="validate">
                      <label for="connections">Conexões simultâneas</label>
                    </div>
                    <div class="col s12 input-field">
                        <input id="accounts" name="accounts" type="text" class="validate" data-error=".errorTxt3">
                        <label for="accounts">Contas de FTP</label>
                        <small class="errorTxt3"></small>
                    </div>
                    <div class="col s12 input-field">
                        <input id="value" name="value" type="text" class="validate" data-error=".errorTxt3">
                        <label for="value">Valor</label>
                        <small class="errorTxt3"></small>
                    </div>
                  </div>
                </div>
                <div class="col s12 display-flex justify-content-end mt-3">
                  <button type="submit" class="btn indigo">
                      Salvar
                  </button>
                  <button type="cancel" class="btn btn-light">
                      Cancelar
                  </button>
                </div>
              </div>
            </form>
          </div>
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
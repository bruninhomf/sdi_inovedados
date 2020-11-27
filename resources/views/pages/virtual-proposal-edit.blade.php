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
                <h4 h4 class="card-title indigo-text pb-5"><strong>Proposta - Servidor Virtual</strong></h4>
            </div>
              <div class="col s12" id="account">
                
                <!-- users edit media object ends -->
                <!-- users edit account form start -->
                <form action="/virtual/{{$virtualProposal->id}}" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col s12 m6">
                      <div class="row">
                        <div class="col s12 input-field">
                          <input id="cpu" name="cpu" type="text" value="{{ $virtualProposal->cpu }}" class="validate" data-error=".errorTxt2">
                          <label for="cpu">CPU</label>
                          <small class="errorTxt2"></small>
                        </div>
                        <div class="col s12 input-field">
                          <input id="memory" name="memory" type="text" value="{{ $virtualProposal->memory }}" class="validate" data-error=".errorTxt1">
                          <label for="memory">Memoria</label>
                          <small class="errorTxt1"></small>
                        </div>
                        <div class="col s12 input-field">
                          <input id="network" name="network" type="text" value="{{ $virtualProposal->network }}" class="validate" data-error=".errorTxt3">
                          <label for="network">Rede</label>
                          <small class="errorTxt3"></small>
                        </div>
                      </div>
                    </div>
                    <div class="col s12 m6">
                      <div class="row">
                        <div class="col s12 input-field">
                          <input id="system" name="system" type="text" value="{{ $virtualProposal->system }}" class="validate">
                          <label for="system">Sistema Operacional</label>
                        </div>
                        <div class="col s12 input-field">
                            <input id="ip" name="ip" type="text" value="{{ $virtualProposal->ip }}" class="validate" data-error=".errorTxt3">
                            <label for="ip">IP</label>
                            <small class="errorTxt3"></small>
                          </div>
                          <div class="col s12 input-field">
                            <input id="value" name="value" type="text" value="{{ $virtualProposal->value }}" class="validate" data-error=".errorTxt3">
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
                <!-- users edit account form ends -->
              </div>
            </div>
        </div>
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
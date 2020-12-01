{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Proposta - Hospedagem')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/script.js')}}"></script>
{{--  <script src="{{asset('js/jquery-3.0.0.js')}}"></script>  --}}
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
                <h4 h4 class="card-title indigo-text pb-5"><strong>Teste - Requisitos</strong></h4>
            </div>
            <div class="col s12" id="account">
                <form action="/teste-requisitos" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col s12">
                      <div class="row">
                        <div class="col s12 input-field">
                          <input id="name_system" name="name_system" type="text" class="validate" data-error=".errorTxt2">
                          <label for="name_system">Nome do projeto</label>
                          <small class="errorTxt2"></small>
                        </div>
                      </div>
                    </div>
                    <div class="col s12 pl-3">
                        <div class="row element" id='div_0'>
                          <div class="col s12 right-align pr-1">
                            <span class='mb-6 btn waves-effect waves-light green darken-1 add'>Modulo<i class="material-icons">add</i></span>
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
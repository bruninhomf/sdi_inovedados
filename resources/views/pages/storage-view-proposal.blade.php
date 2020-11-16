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
          <a href="#" class="avatar">
            <img src="{{asset('images/avatar/avatar-15.png')}}" alt="users view avatar" class="z-depth-4 circle"
              height="64" width="64">
          </a>
          <div class="media-body pl-2">
            <h5 class="media-heading pt-1">
              <span class="users-view-">Dean Stanley</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2" width="500">
        <a href="{{asset('usuarios')}}" class="btn-small btn-light-indigo">
          <i class="material-icons mb-5">arrow_back</i>
          Voltar
        </a>
        <a href="{{asset('minhaconta')}}" class="btn-small btn-waves-light">
          <i class="material-icons mb-3">account_circle</i>
          Minha conta
        </a>
        <a href="{{asset('usuarioeditar')}}" class="btn-small indigo">
          <i class="material-icons mb-5">edit</i>
          Editar
        </a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="row indigo lighten-5 border-radius-4 mb-2">
        <div class="col s12 m4 users-view-timeline">
          <h6 class="indigo-text m-0">Requisitos: <span>125</span></h6>
        </div>
        <div class="col s12 m4 users-view-timeline">
          <h6 class="indigo-text m-0">Propostas: <span>534</span></h6>
        </div>
        <div class="col s12 m4 users-view-timeline">
          <h6 class="indigo-text m-0">Testes: <span>256</span></h6>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <table class="striped">
            <tbody>
              <tr>
                <td>Name:</td>
                <td>Dean Stanley</td>
              </tr>
              <tr>
                <td>CPF:</td>
                <td>554.835.280-69</td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td>deanstanley@gmail.com</td>
              </tr>
              <tr>
                <td>Telefone:</td>
                <td>(31) 9 9648-2673</td>
              </tr>
              <tr>
                <td>Cargo:</td>
                <td>Tester</td>
              </tr>
              <tr>
                <td>Situação:</td>
                <td><span class="green-text">Ativo</td>
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
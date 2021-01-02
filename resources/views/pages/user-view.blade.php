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
              <span class="users-view-">{{ $user->name }}</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2" width="500">
        <a href="{{asset('usuarios')}}" class="btn-small btn-light-indigo">
          <i class="material-icons mb-5">arrow_back</i>
        </a>
        <a href="{{asset('minhaconta')}}" class="btn-small btn-waves-light">
          <i class="material-icons mb-3">account_circle</i>
          Minha conta
        </a>
        <a href="{{asset('usuarioeditar')}}" class="btn-small indigo">
          <i class="material-icons mb-5">edit</i>
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
                <td>{{ $user->name }}</td>
              </tr>
              <tr>
                <td>CPF:</td>
                <td>{{ $user->cpf }}</td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td>{{ $user->email }}</td>
              </tr>
              <tr>
                <td>Telefone:</td>
                <td>{{ $user->phone }}</td>
              </tr>
              <tr>
                <td>Cargo:</td>
                <td>{{ $user->office }}</td>
              </tr>
              <tr>
                <td>Situação:</td>
                <td><span>{{ $user->status }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
  <!-- users view card details ends -->

    <!-- users view card data start -->
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12">
          <table class="mt-1">
              <thead>
                  <tr>
                      <th>Área</th>
                      <th>Listar</th>
                      <th>Cadastrar</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                      <th>Adicional</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Dashboard</td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td>Requisitos</td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span>Gerar planilha</span>
                          </label>
                      </td>
                  </tr>
                  <tr>
                      <td>Propostas</td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span>Imprimir</span>
                          </label>
                      </td>
                  </tr>
                  <tr>
                      <td>Testes</td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span>Gerar planilha</span>
                          </label>
                      </td>
                  </tr>
                  <tr>
                      <td>Usuários</td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span>Permissões</span>
                          </label>
                      </td>
                  </tr>
                  <tr>
                      <td>Histórico</td>
                      <td>
                          <label>
                          <input type="checkbox" checked disabled/>
                          <span></span>
                          </label>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
              </tbody>
          </table>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- users view card data ends -->

</div>
<!-- users view ends -->
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection
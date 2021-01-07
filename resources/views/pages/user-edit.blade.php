{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Usuário editar')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- users edit start -->
<div class="section users-edit">
  <div class="card">
    <div class="card-content">
      <div class="row">
          <div class="col s6">
              <h4 h4 class="card-title indigo-text pb-5"><strong>Editar usuário</strong></h4>
          </div>
      </div>
      <!-- <div class="card-body"> -->
      <ul class="tabs mb-2 row">
        <li class="tab">
          <a class="display-flex align-items-center active" id="account-tab" href="#account">
            <i class="material-icons mr-1">person_outline</i><span>Dados cadastrais</span>
          </a>
        </li>
        <li class="tab">
          <a class="display-flex align-items-center" id="information-tab" href="#information">
            <i class="material-icons mr-2">lock_open</i><span>Permissões</span>
          </a>
        </li>
      </ul>
      <div class="divider mb-3"></div>
      <div class="row">
        <form id="infotabForm" action="/usuarios" method="POST">
          @csrf
          <div class="col s12" id="account">
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" value="{{ $user->name }}" class="validate" data-error=".errorTxt2">
                    <label for="name">Name</label>
                    <small class="errorTxt2"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="cpf" name="cpf" type="text" value="{{ $user->cpf }}" class="cpf-code validate" data-error=".errorTxt1">
                    <label for="cpf">CPF</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" value="{{ $user->email }}" class="validate" data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="tel" name="tel" type="text" value="{{ $user->phone }}" class="phone-demo validate">
                    <label for="tel">Telefone</label>
                  </div>
                  <div class="col s12 input-field">
                    <select value="{{ $user->office }}">
                      <option value="ads">Analista de Sistemas</option>
                      <option value="sup">Suporte Tecnico</option>
                      <option value="aux">Auxiliar Administrativo</option>
                      <option value="tes" selected>Tester</option>
                      <option value="adm">Administrador</option>
                    </select>
                    <label>Cargo</label>
                  </div>
                  <div class="col s12 input-field">
                    <select value="{{ $user->status }}">
                      <option value=""></option>
                      <option value="Ativo" selected>Ativo</option>
                      <option value="Inativo">Inativo</option>
                    </select>
                    <label>Situação</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12" id="information">
            <!-- users edit Info form start -->
              <div class="row">
                <div class="col s12">
                  <div class="row">
                      <div class="col s12 right-align">
                          <a name="selectAll" id="selectAll" class="waves-effect waves-light btn-small hide"><i class="material-icons left">check</i>Marcar Todos</a>
                      </div>
                      <div class="col s12 right-align">
                        <a name="deselectAll" id="deselectAll" class="waves-effect red btn-small "><i class="material-icons left">check</i>Desmarcar Todos</a>
                      </div>
                  </div>
                  <div class="col s12">
                      <table class="mt-1">
                          <thead>
                              <tr>
                                  <th>Área</th>
                                  <th>Visualizar</th>
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
                                      <input type="checkbox" class="checkbox" name="dashboard-view" value="" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                              </tr>
                              <tr>
                                  <td>Lev. de Requisitos</td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="requirement-view" value="" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="requirement-create" value="" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="requirement-edit" value="" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="requirement-delete" value="" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="requirement-print" value="" checked/>
                                      <span>Imprimir / Gerar planilha</span>
                                      </label>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Propostas</td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="proposal-view" value="" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="proposal-create" value="" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="proposal-edit" value="" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="proposal-delete" value="" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="proposal-print" value="" checked/>
                                      <span>Imprimir</span>
                                      </label>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Testes</td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="test-view" value="" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="test-create" value="" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="test-edit" value="" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="test-delete" value="" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="test-print" value="" checked/>
                                      <span>Gerar planilha</span>
                                      </label>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Usuários</td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="user-view" value="" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="user-create" value="" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="requirement-edit" value="" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" class="checkbox" name="requirement-delete" value="" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
          </div>
          <div class="col s12 display-flex justify-content-end mt-1">
              <button type="submit" class="btn indigo mr-1">Salvar</button>
              <a href="{{asset('usuarios')}}" type="button" class="btn btn-light">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/formatter/jquery.formatter.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/users.js')}}"></script>
<script src="{{asset('js/scripts/form-masks.js')}}"></script>
@endsection
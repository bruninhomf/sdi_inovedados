{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Users edit')

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
              <h4 h4 class="card-title indigo-text pb-5"><strong>Novo usuário</strong></h4>
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
            <!-- users edit media object start -->
            <div class="media display-flex align-items-center mb-2">
              <a class="mr-2" href="#">
                <img src="{{asset('images/avatar/avatar-11.png')}}" alt="users avatar" class="z-depth-4 circle"
                  height="64" width="64">
              </a>
              <div class="media-body">
                <h5 class="media-heading mt-0">Imagem de perfil</h5>
                <div class="user-edit-btns display-flex">
                  <a href="#" class="btn-small indigo">Upload</a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" class="validate">
                    <label for="name">Name</label>
                    <small class="errorTxt2"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="cpf-code" name="cpf" type="text" class="validate">
                    <label for="cpf-code">CPF</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" value="{{ Arr::get(old(), 'email') }}" class="validate">
                    <label for="email">E-mail</label>
                    @error('email')
                      <small class="errorTxt3 text-danger">Insira um e-mail valido.</small>
                    @enderror
                  </div>
                  <div class="col s12 input-field">
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Senha</label>
                    <small class="errorTxt2"></small>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="phone" name="phone" type="text" class="validate">
                    <label for="phone-demo">Telefone</label>
                  </div>
                  <div class="col s12 input-field">
                    <select name="office" id="office">
                      <option value=""></option>
                      <option value="ads">Analista de Sistemas</option>
                      <option value="sup">Suporte Tecnico</option>
                      <option value="aux">Auxiliar Administrativo</option>
                      <option value="tes">Tester</option>
                      <option value="adm">Administrador</option>
                    </select>
                    <label>Cargo</label>
                  </div>
                  <div class="col s12 input-field">
                    <select name="status" id="status">
                      <option value=""></option>
                      <option value="Ativo">Ativo</option>
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
                          <a href="#" class="waves-effect waves-light btn-small"><i class="material-icons left">check</i>Marcar Todos</a>
                      </div>
                  </div>
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
                                      <input type="checkbox" checked />
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
                                      <input type="checkbox" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span>Gerar planilha</span>
                                      </label>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Propostas</td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span>Imprimir</span>
                                      </label>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Testes</td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span>Gerar planilha</span>
                                      </label>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Usuários</td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked />
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span></span>
                                      </label>
                                  </td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
                                      <span>Permissões</span>
                                      </label>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Histórico</td>
                                  <td>
                                      <label>
                                      <input type="checkbox" checked/>
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
            <!-- users edit Info form ends -->
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
<!-- users edit ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/formatter/jquery.formatter.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
<script src="{{asset('js/scripts/form-masks.js')}}"></script>
@endsection
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
                    <h4 h4 class="card-title indigo-text pb-5"><strong>Minha Conta</strong></h4>
                </div>
            </div>
            <div class="row">
                <form id="infotabForm">
                    <div class="col s12" id="account">
                        <!-- users edit media object start -->
                        <div class="media display-flex align-items-center mb-2">
                            <a class="mr-2" href="#">
                                <img src="{{asset('images/avatar/avatar-11.png')}}" alt="users avatar" class="z-depth-4 circle" height="64" width="64">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading mt-0">Imagem de perfil</h5>
                                <div class="user-edit-btns display-flex">
                                    <a href="#" class="btn-small indigo">Upload</a>
                                </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form id="accountForm">
                            <div class="row mt-5">
                                <div class="col s12 m6">
                                    <div class="media-body">
                                        <h5 class="media-heading mt-0">Dados pessoais</h5>
                                    </div>
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
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col s12 m6">
                                    <div class="media-body mb-1 pb-1">
                                        <h5 class="media-heading mt-0">Atualização</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 input-field">
                                            <input id="name" name="name" type="text" class="validate" value="Dean Stanley">
                                            <label for="name">Nome</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input class="validate" required id="password0" type="password" name="password0">
                                            <label for="password0">Nova senha *</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input class="validate" required id="cpassword0" type="password" name="cpassword0">
                                            <label for="cpassword0">Confirme a nova senha *</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                    </div>

                    <div class="col s12 display-flex justify-content-end mt-1">
                        <button type="submit" class="btn indigo mr-1">Salvar</button>
                        <a href="{{asset('usuarios')}}" type="button" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- </div> -->
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

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
            </div>
            <div class="row">
                <div class="col s12">
                    <h4 h4 class="card-title indigo-text pb-5"><strong>Minha Conta</strong></h4>
                </div>
                <form action="/minhaconta" method="POST">
                    <div class="col s12" id="account">
                        <form id="accountForm">
                            <div class="col s12 m6">
                                <div class="media-body">
                                    <h5 class="media-heading mt-0">Dados pessoais</h5>
                                </div>
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
                                    </tbody>
                                </table>
                            </div>
                            <div class="col s12 m6">
                                <div class="media-body mb-1 pb-1">
                                    <h5 class="media-heading mt-0">Atualização</h5>
                                </div>
                                <div class="row">
                                    <div class="col s12 input-field">
                                        <input id="name" name="name" type="text" class="validate" value="{{ $user->name }}">
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
                        </form>
                    </div>

                    <div class="col s12 display-flex justify-content-end mt-1">
                        <button type="submit" class="btn indigo mr-1">Salvar</button>
                        <a href="/usuarios" type="button" class="btn btn-light">Cancel</a>
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
<script src="{{asset('js/scripts/page-users.js')}}"></script>
<script src="{{asset('js/scripts/form-masks.js')}}"></script>
@endsection

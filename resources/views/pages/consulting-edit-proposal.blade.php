{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Proposta - Desenvolvimento')

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
              <h4 class="card-title indigo-text pb-5"><strong>Editar usuário</strong></h4>
          </div>
        </div>
        <ul class="tabs mb-2 row">
          <li class="tab">
            <a class="display-flex align-items-center active" id="account-tab" href="#project">
              <i class="material-icons mr-1">person_outline</i><span>Dados do Projeto</span>
            </a>
          </li>
          <li class="tab">
            <a class="display-flex align-items-center" id="account-tab" href="#business-solution">
              <i class="material-icons mr-1">person_outline</i><span>Solução de Negócio</span>
            </a>
          </li>
          <li class="tab">
            <a class="display-flex align-items-center" id="information-tab" href="#information">
              <i class="material-icons mr-2">lock_open</i><span>Dados do Cliente</span>
            </a>
          </li>
        </ul>
        <div class="divider mb-3"></div>
        <div class="row">
          <form action="/consultoria/{{$consultingproposal->id}}" method="POST">
            @csrf
            <div class="col s12" id="project">
              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <div class="col s8 input-field">
                      <input id="project" name="project" type="text" value="{{ $consultingproposal->project }}" class="validate" data-error=".errorTxt2">
                      <label for="project">Name do projeto</label>
                      <small class="errorTxt2"></small>
                    </div>
                    <div class="col s2 input-field">
                      <input id="version" name="version" type="text" value="{{ $consultingproposal->version }}" class="validate" data-error=".errorTxt1">
                      <label for="version">Versão</label>
                      <small class="errorTxt1"></small>
                    </div>
                    <div class="col s2 input-field">
                      <input id="date" name="date" type="date" value="{{ $consultingproposal->date }}" class="validate" data-error=".errorTxt3">
                      <label for="date">Data da Proposta</label>
                      <small class="errorTxt3"></small>
                    </div>
                  </div>
                </div>
                <div class="col s12">
                  <div class="row">
                    <div class="col s8 input-field">
                      <input id="first_payment" name="first_payment" type="text" value="{{ $consultingproposal->first_payment }}" class="validate">
                      <label for="first_payment">Valor da primeira parcela</label>
                    </div>
                    <div class="col s4 input-field">
                      <input id="first_payment_date" name="first_payment_date" type="date" value="{{ $consultingproposal->first_payment_date }}" class="validate">
                      <label for="first_payment_date">Venvimento 1ª parcela</label>
                    </div>
                    <div class="col s8 input-field">
                      <input id="second_payment" name="second_payment" type="text" value="{{ $consultingproposal->second_payment }}" class="validate">
                      <label for="second_payment">Valor da segunda parcela</label>
                    </div>
                    <div class="col s4 input-field">
                      <input id="second_payment_date" name="second_payment_date" type="date" value="{{ $consultingproposal->second_payment_date }}" class="validate">
                      <label for="second_payment_date">Venvimento 2ª parcela</label>
                    </div>
                    <div class="col s3 input-field">
                      <input id="amount" name="amount" type="text" value="{{ $consultingproposal->amount }}" class="validate">
                      <label for="amount">Valor total</label>
                    </div>
                    <div class="col s3 input-field">
                      <input id="proposal_validity" name="proposal_validity" type="date" value="{{ $consultingproposal->proposal_validity }}" class="validate">
                      <label for="proposal_validity">Validade da Proposta</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col s12" id="business-solution">
              <!-- users edit Info form start -->
                <div class="row">
                  <div class="col s12">
                    <div class="col s12 input-field">
                      <textarea id="business_solution_one" name="business_solution_one" rows="10" class="form-control">
                          {{ $consultingproposal->business_solution_one }}
                      </textarea>
                      <label id="sl1" for="phone-demo">Solução de negócio</label>
                    </div>             
                  </div>
                </div>
            </div>

            <div class="col s12" id="information">
              <!-- users edit Info form start -->
                <div class="row">
                  <div class="col s6">
                    <div class="col s12 input-field">
                      <input id="client" name="client" type="text" value="{{ $consultingproposal->client }}" class="validate" data-error=".errorTxt1">
                      <label for="client">Empresa</label>
                      <small class="errorTxt1"></small>
                    </div>
                    <div class="col s12 input-field">
                      <input id="contact_name" name="contact_name" type="text" value="{{ $consultingproposal->contact_name }}" class="validate" data-error=".errorTxt2">
                      <label for="contact_name">Name do Contato</label>
                      <small class="errorTxt2"></small>
                    </div>
                  </div>
                  <div class="col s6">
                    <div class="col s12 input-field">
                      <input id="cnpj" name="cnpj" type="text" value="{{ $consultingproposal->cnpj }}" class="validate" data-error=".errorTxt1">
                      <label for="cnpj">CNPJ</label>
                      <small class="errorTxt1"></small>
                    </div>    
                    <div class="col s12 input-field">
                      <input id="phone" name="phone" type="text" value="{{ $consultingproposal->phone }}" class="validate" data-error=".errorTxt2">
                      <label for="phone">telefone</label>
                      <small class="errorTxt2"></small>
                    </div>         
                  </div>
                  <div class="col s12">
                    <div class="col s12 input-field">
                      <input id="address" name="address" type="text" value="{{ $consultingproposal->address }}" class="validate" data-error=".errorTxt3">
                      <label for="address">Endereço</label>
                      <small class="errorTxt3"></small>
                    </div>
                  </div>
                </div>
              <!-- users edit Info form ends -->
            </div>
            <div class="col s12 display-flex justify-content-end mt-1">
                <button type="submit" class="btn indigo mr-1">Salvar</button>
                <a href="{{asset('desenvolvimento')}}" type="button" class="btn btn-light">Cancel</a>
            </div>
          </form>
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
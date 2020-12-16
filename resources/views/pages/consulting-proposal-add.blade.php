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
              <h4 class="card-title indigo-text pb-5"><strong>Nova consultoria</strong></h4>
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
          <form action="/consultoria" method="POST">
            @csrf
            <div class="col s12" id="project">
              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <div class="col s8 input-field">
                      <input id="project" name="project" type="text" class="validate" required>
                      <label for="project">Name do projeto</label>
                      @error('project')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="col s2 input-field">
                      <input id="version" name="version" type="text" class="validate" required>
                      <label for="version">Versão</label>
                      @error('version')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="col s2 input-field">
                      <input id="date" name="date" type="date" class="validate" required>
                      <label for="date">Data da Proposta</label>
                      @error('date')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col s12">
                  <div class="row">
                    <div class="col s8 input-field">
                      <input id="first_payment" name="first_payment" type="text" required>
                      <label for="first_payment">Valor da primeira parcela</label>
                      @error('first_payment')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="col s4 input-field">
                      <input id="first_payment_date" name="first_payment_date" type="date" required>
                      <label for="first_payment_date">Venvimento 1ª parcela</label>
                      @error('first_payment_date')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="col s8 input-field">
                      <input id="second_payment" name="second_payment" type="text" class="validate">
                      <label for="second_payment">Valor da segunda parcela</label>
                    </div>
                    <div class="col s4 input-field">
                      <input id="second_payment_date" name="second_payment_date" type="date" class="validate">
                      <label for="second_payment_date">Venvimento 2ª parcela</label>
                    </div>
                    <div class="col s3 input-field">
                      <input id="amount" name="amount" type="text" required>
                      <label for="amount">Valor total</label>
                      @error('amount')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="col s3 input-field">
                      <input id="proposal_validity" name="proposal_validity" type="date" required>
                      <label for="proposal_validity">Validade da Proposta</label>
                      @error('proposal_validity')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
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
                      <textarea id="business_solution_one" name="business_solution_one" class="mt-1 form-control" style="height: 200px" required></textarea>
                      <label id="business_solution_one" for="business_solution_one" class="pl-2">Solução de negócio</label>
                      @error('business_solution_one')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>             
                  </div>
                </div>
            </div>

            <div class="col s12" id="information">
              <!-- users edit Info form start -->
                <div class="row">
                  <div class="col s6">
                    <div class="col s12 input-field">
                      <input id="client" name="client" type="text" class="validate" required>
                      <label for="client">Empresa</label>
                      @error('client')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="col s12 input-field">
                      <input id="contact_name" name="contact_name" type="text" class="validate" required>
                      <label for="contact_name">Name do Contato</label>
                      @error('contact_name')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col s6">
                    <div class="col s12 input-field">
                      <input id="cnpj" name="cnpj" type="text" class="validate" required>
                      <label for="cnpj">CNPJ</label>
                      @error('cnpj')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>    
                    <div class="col s12 input-field">
                      <input id="phone" name="phone" type="text" class="validate" required>
                      <label for="phone">telefone</label>
                      @error('phone')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>         
                  </div>
                  <div class="col s12">
                    <div class="col s12 input-field">
                      <input id="address" name="address" type="text" class="validate" required>
                      <label for="address">Endereço</label>
                      @error('address')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
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
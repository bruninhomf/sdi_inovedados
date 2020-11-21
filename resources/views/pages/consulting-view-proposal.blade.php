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
              <span class="users-view-">Proposta de Consultoria</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2" width="500">
        <a href="/consultoria" class="btn-small btn-light-indigo">
          <i class="material-icons mb-5">arrow_back</i>
          Voltar
        </a>
        <a href="/consultoria/imprimir" class="btn-small btn-waves-light">
          <i class="material-icons mb-3">print</i>
          Imprimir
        </a>
        <a href="/consultoria/editar/{{ $consultingproposal->id }}" class="btn-small indigo">
          <i class="material-icons mb-5">edit</i>
          Editar
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s6 pt-3">
          <h4 class="card-title indigo-text"><strong>Dados do Projeto</strong></h4>
            <table class="striped">
              <tbody>
                <tr>
                  <td>Name do projeto:</td>
                  <td>{{ $consultingproposal->project }}</td>
                </tr>
                <tr>
                  <td>Versão:</td>
                  <td>{{ $consultingproposal->version }}</td>
                </tr>
                <tr>
                  <td>Data da proposta:</td>
                  <td>{{ $consultingproposal->date }}</td>
                </tr>
              </tbody>
            </table>
            <h4 class="card-title indigo-text pt-4"><strong>Dados do Cliente</strong></h4>
            <table class="striped">
              <tbody>
                <tr>
                  <td>Empresa:</td>
                  <td>{{ $consultingproposal->client }}</td>
                </tr>
                <tr>
                  <td>CNPJ:</td>
                  <td>{{ $consultingproposal->cnpj }}</td>
                </tr>
                <tr>
                  <td>Nome do contato:</td>
                  <td>{{ $consultingproposal->contact_name }}</td>
                </tr>
                <tr>
                  <td>Telefone:</td>
                  <td>{{ $consultingproposal->phone }}</td>
                </tr>
                <tr>
                  <td>Endereço:</td>
                  <td>{{ $consultingproposal->address }}</td>
                </tr>
              </tbody>
            </table>
          </div><div class="col s6 pt-3">
            <h4 class="card-title indigo-text"><strong>Dados de pagamento</strong></h4>
            <table class="striped text-nowrap">
              <tbody>
                <tr>
                  <td>Valor 1ª parcela:</td>
                  <td>{{ $consultingproposal->first_payment }}</td>
                </tr>
                <tr>
                  <td>Vencimento 1ª parcela:</td>
                  <td>{{ $consultingproposal->first_payment_date }}</td>
                </tr>
                <tr>
                  <td>Valor 2ª parcela:</td>
                  <td>{{ $consultingproposal->second_payment }}</td>
                </tr>
                <tr>
                  <td>Vencimento 2ª parcela:</td>
                  <td>{{ $consultingproposal->second_payment_date }}</td>
                </tr>
                <tr>
                  <td>Valor total:</td>
                  <td>{{ $consultingproposal->amount }}</td>
                </tr>
                <tr>
                  <td>Validade da Proposta:</td>
                  <td>{{ $consultingproposal->proposal_validity }}</td>
                </tr>
              </tbody>
            </table>
          </div>          
      </div>
    </div>
  </div>
</div>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection
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
                <h4 h4 class="card-title indigo-text pb-5"><strong>Proposta - Desenvolvimento</strong></h4>
            </div>
            <div class="col s6 right-align">
                <a href="/desenvolvimento/novo" class="waves-effect waves-light btn-small"><i class="material-icons left">receipt</i>Nova Proposta</a>
            </div>
        </div>
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name do projeto</th>
                <th>Empresa</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($developmentproposals as $key => $developmentproposal)
                <tr>
                  <td>{{ $developmentproposal->id }}</td>
                  <td>{{ $developmentproposal->project }}</td>
                  <td>{{ $developmentproposal->client }}</td>
                  <td>{{ $developmentproposal->cnpj }}</td>
                  <td>{{ $developmentproposal->phone }}</td>
                  <td>
                      <a href="/desenvolvimento/visualizar/{{ $developmentproposal->id }}"><i class="material-icons">remove_red_eye</i></a>
                      <a href="/desenvolvimento/editar/{{ $developmentproposal->id }}"><i class="material-icons">edit</i></a>
                      <a href="/desenvolvimento/apagar/{{ $developmentproposal->id }}"><i class="material-icons">delete_forever</i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
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
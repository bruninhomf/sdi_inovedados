{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Proposta - Hospedagem')

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
                <h4 h4 class="card-title indigo-text pb-5"><strong>Proposta - Hospedagem</strong></h4>
            </div>
            <div class="col s6 right-align">
                <a href="hospedagem/novo" class="waves-effect waves-light btn-small"><i class="material-icons left">receipt</i>Nova Proposta</a>
            </div>
        </div>
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Espaço em disco</th>
                <th>Trafego</th>
                <th>Domínio</th>
                <th>Subdominio</th>
                <th>Valor</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($hostingproposals as $hostingproposal)
                <tr>
                  <td>{{ $hostingproposal->id }}</td>
                  <td>{{ $hostingproposal->diskspace }}</td>
                  <td>{{ $hostingproposal->traffic }}</td>
                  <td>{{ $hostingproposal->domanins }}</td>
                  <td>{{ $hostingproposal->subdomains }}</td>
                  <td>{{ $hostingproposal->value }}</td>
                  <td>
                      <a href="hospedagem/visualizar/{{ $hostingproposal->id }}"><i class="material-icons">remove_red_eye</i></a>
                      <a href="hospedagem/editar/{{ $hostingproposal->id }}"><i class="material-icons">edit</i></a>
                      <a href="hospedagem/apagar/{{ $hostingproposal->id }}"><i class="material-icons">delete_forever</i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
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
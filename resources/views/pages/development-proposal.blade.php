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
                <a href="{{asset('desenvolvimento/novo')}}" class="waves-effect waves-light btn-small"><i class="material-icons left">receipt</i>Nova Proposta</a>
            </div>
        </div>
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>CPF</th>
                <th>Cargo</th>
                <th>Situação</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>Dean Stanley</td>
                <td>554.835.280-69</td>
                <td>Tester</td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                </td>
                <td>
                    <a href="{{asset('usuariovisualizar')}}"><i class="material-icons">remove_red_eye</i></a>
                    <a href="{{asset('usuarioeditar')}}"><i class="material-icons">edit</i></a>
                    <a href="#"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>Zena Buckley</td>
                <td>452.030.490-33</td>
                <td>Analista</td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                </td>
                <td>
                    <a href="{{asset('usuariovisualizar')}}"><i class="material-icons">remove_red_eye</i></a>
                    <a href="{{asset('usuarioeditar')}}"><i class="material-icons">edit</i></a>
                    <a href="#"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
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
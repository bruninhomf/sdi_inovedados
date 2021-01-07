{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Levantamento de Requisitos')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<section class="users-list-wrapper section">
  
  <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        
        <div class="col s12">
          <h4 h4 class="card-title indigo-text pb-5"><strong>Levantamento de Requisitos</strong></h4>
        </div>

        <div class="col s12" id="account">
          <form action="/requisitos" method="POST">
            @csrf
            <div class="row">
              <div class="col s12 input-field">
                <input id="project_name" name="project_name" type="text" class="validate" required>
                <label for="project_name">Nome do projeto</label>
                @error('project_name')
                <small class="red-text">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="col s4 input-field">
                <input id="lr_id" name="lr_id" type="text" class="validate" required>
                <label for="lr_id">Nº LR</label>
                @error('lr_id')
                <small class="red-text">{{ $message }}</small>
                @enderror
              </div>
              <div class="col s4 input-field">
                <input id="version" name="version" type="text" class="validate" required>
                <label for="version">Versão</label>
                @error('version')
                <small class="red-text">{{ $message }}</small>
                @enderror
              </div>
              <div class="col s4 input-field">
                <input id="date" name="date" type="date" class="validate" required>
                <label for="date">Data</label>
                @error('date')
                <small class="red-text">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <div class="col s12 display-flex justify-content-end mt-3">
              <button type="submit" class="btn indigo">
                  Salvar
              </button>
              <button type="cancel" class="ml-1 btn btn-light">
                  Cancelar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection

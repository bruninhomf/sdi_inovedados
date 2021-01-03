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

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/requirementsGathering.js')}}"></script>
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

<style>
  button:after { 
    margin-left:86% !important;
  }
</style>

{{-- page content --}}
@section('content')
<!-- users list start -->
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

            <div class="col s12 pl-3">
              <div class="col s12 right-align pr-1 pb-3">
                <span class='mt-2 btn waves-effect waves-light green darken-1 add'>Título<i class="material-icons">add</i></span>
              </div>
            </div>

            <div class="accordion accordion-flush" id="accordionElement">
              
              {{-- <div class="element" id="requirements-1">
                <h2 class='accordion-header' id='flush-heading1'> 
                  <button id='button_1' class='accordion-button bg-white collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapse1' aria-expanded='false' aria-controls='flush-collapse1' style='box-shadow: none;'> 
                    Título 1 
                    <span id='remove_1' class='remove' style='margin-left: 93%; color: red; position: absolute;'>
                      <i class='material-icons'>clear</i> 
                    </span>
                  </button> 
                </h2>
                <div id='flush-collapse1' class='accordion-collapse collapse' aria-labelledby='flush-heading1'> 
                  <div class='accordion-body'>
                    <div class='col s12 input-field'> 
                      <input id='name1' name='modulos[1][titles]' type='text' class='validate' required> 
                      <label for='name1'>Nome do título</label>
                    </div> 
                    <div class='right-align pr-1 pt-1'> 
                      <span data-groupmenu='1' class='btn btn-floating waves-effect waves-light green darken-1 addMenu' style='border-radius: 5px; width:50px;'> 
                        <i class='material-icons'>add</i> 
                      </span> 
                    </div>

                    <h2 class='accordion-header' id='menu1'> 
                      <button id='buttonMenu1' class='accordion-button bg-white collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-menu1' aria-expanded='true' aria-controls='flush-menu1' style='box-shadow: none;'> 
                        Menu 1 
                        <span id='remove_1' class='remove' style='margin-left: 93%; color: red; position: absolute;'>
                          <i class='material-icons'>clear</i> 
                        </span>
                      </button> 
                    </h2>
                    <div id='flush-menu1' class='accordion-collapse collapse pb-4' aria-labelledby='menu1'> 
                      <div class='accordion-menu' id='accordionMenu1'>    
                        <div class='input-field col s12'> 
                          <input id='menu1' name='modulos[1][menu]' type='text' class='validate' required> 
                          <label for='menu1'>Menu</label>
                        </div>
                        <div class='right-align'> 
                          <span data-description='1' class='btn btn-floating waves-effect waves-light green darken-1 addDescription' id='addDesc" +nextTitle+ "' style='border-radius: 5px; width:50px;'>
                            <i class='material-icons'>add</i> 
                          </span> 
                        </div>
                        <div class='groupdescription' id='groupdescription'>
                          <div class='input-field col s12'> 
                            <label for='descript'>Descrição</label> 
                            <textarea id='description1' name='modulos[1][description]' class='pt-2 materialize-textarea col s11'></textarea>   
                            <div class='pt-2 col s1 right-align'> 
                              <span id='remov1' class='remove' style='width:50px; color:red; cursor: pointer'>
                                <i class='material-icons'>close</i> 
                              </span> 
                            </div>    
                          </div>
                        </div>
                      </div>     
                    </div> --}}
                  

              {{--                       
                  </div>     
                </div>
              </div> --}}

            </div>

            <div class="col s12 display-flex justify-content-end mt-3">
              <button type="submit" class="btn indigo">
                  Salvar
              </button>
              <button type="cancel" class="btn btn-light">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection
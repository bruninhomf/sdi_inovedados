{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Dashboard')

{{-- page styles --}}
@section('page-style')

<link rel="stylesheet" type="text/css" href="{{asset('css/pages/charts-sparkline.css')}}">
@endsection

{{-- page content --}}
@section('content')

<div class="section" id="materialize-sparkline">
<!--Simple Line Chart-->
  <div class="row">
    {{--  <div class="col s12 m6 l4">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <div class="row">
            <div class="col s6">
              <h4 class="card-title truncate">Requisitos</h4>
            </div>
            <div class="col s6 right-align">
              <p class="mt-4 blue-text"><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                {{ $graficRequirementsTotal }}</p>
            </div>
            <div class="col s12 display-flex">
               <div class="sample-chart-wrapper">
                 <canvas id="requirement-chart" height="200"></canvas>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>  --}}
    <div class="col s12 m6 l6">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <div class="row">
            <div class="col s6">
              <h4 class="card-title truncate">Propostas</h4>
            </div>
            <div class="col s6 right-align">
              <p class="mt-4 green-text">
                <i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                {{ $graficMonthlyProposalsTotal }}</p>
              </p>
            </div>
            <div class="col s12 display-flex">
               <div class="sample-chart-wrapper">
                 <canvas id="proposal-chart" height="200"></canvas>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l6">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <div class="row">
            <div class="col s6">
              <h4 class="card-title truncate">Testes</h4>
            </div>
            <div class="col s6 right-align">
              <p class="mt-4 pink-text">
                <i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                {{ $graficMonthlyTestesTotal }}
              </p>
            </div>
            <div class="col s12 display-flex">
               <div class="sample-chart-wrapper">
                 <canvas id="test-chart" height="200"></canvas>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="seaction">
   <!--Line Chart-->
   <div id="chartjs-line-chart" class="card">
      <div class="card-content">
         <h4 class="card-title">Gráfico anual</h4>
         <div class="row">
            <div class="col s12">
                <div class="sample-chart-wrapper">
                  <canvas id="annual-chart" height="400"></canvas>
                </div>
            </div>
         </div>
      </div>
   </div>

   
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
<script src="{{asset('vendors/sparkline/jquery.sparkline.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script>
  let exportData = @php echo json_encode($exportData); @endphp
</script>
<script src="{{asset('js/scripts/charts-chartjs.js')}}"></script>
<script src="{{asset('js/scripts/charts-sparklines.js')}}"></script>
@endsection
{{-- layout --}}
@extends('layouts.fullLayoutMaster')

{{-- page title --}}
@section('title','User Forgot Password')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/forgot.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div id="forgot-password" class="row">
  <div class="col s12 m6 l4 z-depth-4 offset-m4 card-panel border-radius-6 forgot-card bg-opacity-8">
    {{-- success status --}}
    @if (session('status'))
    <div class="card-alert card green lighten-5">
      <div class="card-content green-text">
        <p>{{ session('status') }}</p>
      </div>
      <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    @endif
    <form class="login-form" method="POST" action="{{ route('password.email') }}">
      @csrf

      <div class="row">
        <div class="input-field col s12 center">
          <img class="center" src="{{asset('images/logo/logo_inove.png')}}" alt="Inove Dados"/>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label for="email" class="center-align">E-mail</label>
          @error('email')
          <span class="red-text ml-10" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit"
            class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 mb-1">Recuperar senha</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="{{ route('login')}}">Login</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection


{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/ui-alerts.js')}}"></script>
@endsection
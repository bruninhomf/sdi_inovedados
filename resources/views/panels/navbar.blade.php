<div class="navbar @if(($configData['isNavbarFixed'])=== true){{'navbar-fixed'}} @endif">
  <nav
    class="{{$configData['navbarMainClass']}} @if($configData['isNavbarDark']=== true) {{'navbar-dark'}} @elseif($configData['isNavbarDark']=== false) {{'navbar-light'}} @elseif(!empty($configData['navbarBgColor'])) {{$configData['navbarBgColor']}} @else {{$configData['navbarMainColor']}} @endif">
    <div class="nav-wrapper">
      <ul class="navbar-list left" style="margin-left: 256px">
        <li class="hide-on-med-and-down">
          <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
            <i class="material-icons">settings_overscan</i>
          </a>
        </li>
      </ul>
      <ul class="navbar-list right" style="margin-right: 15px;">
        
        <li class="right-align" style="white-space: nowrap;">
          <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
            data-target="profile-dropdown">
            @if(Auth::user())
              <span class="mr-5" style="font-size: 20px !important"><strong>{{ Auth::user()->name }}</strong></span>
              {{--  <span>
                <i class="material-icons dp48">account_circle</i>
              </span>  --}}
            @endif
          </a>
        </li>
      </ul>
      
      <!-- profile-dropdown-->
      <ul class="dropdown-content" id="profile-dropdown">
        <li>
          <a class="grey-text text-darken-1" href="/minhaconta/{{ Auth::user()->id }}">
            <i class="material-icons">account_circle</i>
            Minha conta
          </a>
        </li>
        <li>
          <a class="grey-text text-darken-1" href="{{asset('logout')}}">
            <i class="material-icons">power_settings_new</i>
            Sair
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>

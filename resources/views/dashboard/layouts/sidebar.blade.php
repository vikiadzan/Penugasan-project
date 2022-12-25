<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>

         @if(auth()->user()->role == 'admin')
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('gurudashboard') ?
            'active' : ''}}" href="{{url('gurudashboard')}}">
              <span data-feather="" class="align-text-bottom"></span>
              Guru
            </a>
          </li>
          @endif
        
    
          <li class="nav-item">
            <a class="nav-link {{Request::is('siswadashboard') ?
            'active' : ''}}" href="{{url('siswadashboard')}}">
              <span data-feather="" class="align-text-bottom"></span>
              Siswa
            </a>
          </li>

     
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrations
            </a>
          </li>
        </ul>

    
      </div>
    </nav>
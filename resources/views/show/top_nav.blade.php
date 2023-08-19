<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="#" class="user-profile "id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <img src="/images/{{Auth::user()->profile_photo_path}}" alt="">
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="/profile"> Profile</a>
                <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </div>
          </li>

          
        </ul>
      </nav>
    </div>
  </div>
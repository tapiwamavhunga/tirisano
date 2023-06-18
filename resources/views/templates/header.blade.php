 <div class="header bg-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xxl-12">
        <div class="header-content">
          <div class="header-left">
            <!-- <div class="brand-logo">
                            <a href="index.html">
                                <img src="./images/logo.png" alt="">
                            </a>
                        </div> -->
            <div class="search d-none">
              <form action="#" >
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search Here"
                  />
                  <span class="input-group-text"
                    ><i class="icofont-search"></i
                  ></span>
                </div>
              </form>
            </div>
          </div>

          <div class="header-right">
            <div class="dark-light-toggle" onclick="themeToggle()">
              <span class="dark"><i class="bi bi-moon"></i></span>
              <span class="light"><i class="bi bi-brightness-high"></i></span>
            </div>
            

            <div class="profile_log dropdown">
              <div class="user" data-toggle="dropdown">
                <span class="thumb"
                  ><img src="https://www.thelocal.dk/images/person-placeholder.svg" alt=""
                /></span>

                
                <span class="arrow"><i class="icofont-angle-down"></i></span>
              </div>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="user-email">
                  <div class="user">
                    
                    <div class="user-info">
                      <h5>{{ Auth::user()->name }}</h5>
                      <span>{{ Auth::user()->email }}</span><br>
                        <span>{{ Auth::user()->identifier_id }}</span>
                    </div>
                  </div>
                </div>

               
                <a href="/user/profile" class="dropdown-item">
                  <i class="bi bi-person"></i>Profile
                </a>
               
               <a class="dropdown-item logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-power"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
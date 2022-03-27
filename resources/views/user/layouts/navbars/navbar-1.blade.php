  <!-- Nav Bar Start -->
  <div class="nav-bar">
      <div class="container">
          <nav class="navbar navbar-expand-md bg-dark navbar-dark">
              <a href="#" class="navbar-brand">MENU</a>
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav mr-auto">
                      <a href="/"
                          class="nav-item nav-link {{ Route::CurrentRouteName() == 'home' ? 'active' : '' }}">{{ __('home.home') }}</a>
                      <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ __('home.news') }}</a>
                          <div class="dropdown-menu">
                              <a href="{{route('articles.all' , 'Entertainment')}}" class="dropdown-item">{{__('home.Entertainment')}}</a>
                              <a href="{{route('articles.all' , 'Sport')}}" class="dropdown-item">{{__('home.Sport')}}</a>
                              <a href="{{route('articles.all' , 'Technology')}}" class="dropdown-item">{{__('home.Technology')}}</a>
                              <a href="{{route('articles.all' , 'Business')}}" class="dropdown-item">{{__('home.Business')}}</a>
                              <a href="{{route('articles.all' , 'Science')}}" class="dropdown-item">{{__('home.Science')}}</a>
                              <a href="{{route('articles.all' , 'Health')}}" class="dropdown-item">{{__('home.Health')}}</a>
                          </div>
                      </div>
                      <a href="{{ route('contact') }}" class="nav-item nav-link">{{ __('home.contact') }}</a>
                  </div>
                  <div class="social ml-auto">
                      <a href=""><i class="fab fa-twitter"></i></a>
                      <a href=""><i class="fab fa-facebook-f"></i></a>
                      <a href=""><i class="fab fa-linkedin-in"></i></a>
                      <a href=""><i class="fab fa-instagram"></i></a>
                      <a href=""><i class="fab fa-youtube"></i></a>
                  </div>
              </div>
          </nav>
      </div>
  </div>
  <!-- Nav Bar End -->

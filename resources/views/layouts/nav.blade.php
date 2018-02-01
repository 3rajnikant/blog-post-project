<div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">Entertainment</a>
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" id="sport" data-toggle="dropdown" href="#">Sports
            </a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="#"  class="test" tabindex="-1">Football
                    <span class="caret"></span>
                  </a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="{{url('/fifa')}}">FIFA World Cup 2018</a></li>
                      <li class="dropdown-submenu">
                        <a href="#"  class="test" tabindex="-1">UEFA
                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a tabindex="-1" href="{{url('/ucl')}}">Champions League</a></li>
                          <li><a tabindex="-1" href="#">Europa League</a></li>
                        </ul>
                      </li>
                      <li><a tabindex="-1" href="#">Premier League </a></li>
                      <li><a tabindex="-1" href="#">La Liga</a></li>
                      <li><a tabindex="-1" href="#">Bundesliga</a></li>
                      <li><a tabindex="-1" href="#">Ligue 1</a></li>
                      <li><a tabindex="-1" href="#">Serie A</a></li>
                      <li><a tabindex="-1" href="#">ISL(Indian Super League)</a></li>
                    </ul>
                </li>
                <li><a tabindex="-1" href="#">Cricket</a></li>
                <li><a tabindex="-1" href="#">Tenis</a></li>
                <li><a tabindex="-1" href="#">NBA</a></li>
              </ul>
          </div>
          <a class="nav-link" href="#">Science</a>
          <a class="nav-link" href="#">Technology</a>
         
           <a class="nav-link ml-auto" href="#">Feedback</a>
            @if(Auth::check())
          <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
          @endif
        </nav>
      </div>
    </div>

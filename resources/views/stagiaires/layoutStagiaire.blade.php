<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title')</title>
    <script src="{{asset('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="/css/layoutStagiaire.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <br>
            <div class="img1">
            <img src="/images/5352140.png" alt="" width="40">
            </div>
            
            <span style="height:30px;border-left:1px solid black;padding-right: 8px;"></span>
          <a class="navbar-brand" href="#">PFE</a>
          {{-- {{ url('/') }} --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              {{-- @if (Auth::check()) --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Les chefs de filière</a>
                      </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Les enseignants</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Les Sujets</a>
                        </li>  

                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              Users
                          </a>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">
                              {{ __('Active users') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                  {{ __('Inactive users') }}
                            </a>
                        </li> --}}
            </ul>
            <div class="img2"></div>
              
          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} {{ Auth::user()->prenom}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
            </ul>
        </div>
            </form>
          </div>
        </div>
      </nav>
      <br>
      <div class="container">
        <div class="row justify-content-center">
         @yield('Content')
        </div>
      </div>
</body>
</html>
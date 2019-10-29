<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

</head>
<body class="bg-light">
    <div class="app">
            <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="#">{{ config('app.name', 'JCS' ) }}</a>
                    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                      <span class="navbar-toggler-icon"></span>
                    </button>
              
                    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Materials</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                          <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
                  <div class="nav-scroller bg-white box-shadow">
                        <nav class="nav nav-underline">
                          <a class="nav-link active" href="#">Dashboard</a>
                          <a class="nav-link" href="#">
                            Friends
                            <span class="badge badge-pill bg-light align-text-bottom">27</span>
                          </a>
                          <a class="nav-link" href="#">Explore</a>
                          <a class="nav-link" href="#">Suggestions</a>
                          <a class="nav-link" href="#">Link</a>
                          <a class="nav-link" href="#">Link</a>
                          <a class="nav-link" href="#">Link</a>
                          <a class="nav-link" href="#">Link</a>
                          <a class="nav-link" href="#">Link</a>
                        </nav>
                      </div>
        <main class="py-4">
            
            <div class="container">
                {{-- <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
                    <img class="mr-3" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
                    <div class="lh-100">
                        <h6 class="mb-0 text-white lh-100">Bootstrap</h6>
                        <small>Since 2011</small>
                    </div>
                </div>   --}}
              @yield('content')
                    @show
            </div>
        </main>
    </div>

</body>
</html>




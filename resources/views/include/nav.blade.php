<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #66cc00;">
    <a class="navbar-brand" href="#">
    <img src="{{asset('assets/img/kate.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
        STUDBUD
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/index">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="/timetable">Timetable</a>
        <a class="nav-item nav-link" href="/shelf">Shelf</a>
        <a class="nav-item nav-link" href="/contact">Contact</a>
        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
    </div>

    <li class="navbar-nav nav-item nav-link dropdown">
        <a class="nav-item nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('assets/img/app img/XP PPL01.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/profile">Profile</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    <form class="form-inline ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
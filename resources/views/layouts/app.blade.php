<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AlloZoé</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/tasksStyle.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

<!-- barre de menu -->
<nav class="navbar navbar-inverse">
  <!-- <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div> -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="ddForm" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Options de réservation<span class="caret"></span></a>
          <ul class="ddForm dropdown-menu">
            <li id="liForm" class="ddForm">
              <form method="post" action="#">
                <div class="form-group">
                  <label for="depart"> Adresse de départ : </label>
                  <input type="text" class="form-control" name="depart" placeholder="Adresse de départ">
                  <label for="destination"> Destination : </label>
                  <input type="text" class="form-control" name="destination" placeholder="Adresse de destination">
                </div>
                <div>
                  <input type="submit" id="bSubmitReservationOptions" class="btn btn-lg" name="submit" value="Vroum <3 !">
                </div>
              </form>
            </li>
          </ul>
        </li>
      </ul>
      <ul id="appTitle" class="nav navbar-nav navbar-brand">
        <li><a href="#">AlloZoé</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

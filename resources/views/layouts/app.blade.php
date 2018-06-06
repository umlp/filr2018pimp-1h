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

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</head>
<body id="app-layout">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ URL::to('/') }}">AlloZoé</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($utilisateur)) { ?>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-user"></span>
              <?php echo $utilisateur; ?>
            </a>
          </li>
          <li>
            <a href="{{ URL::to('logout') }}">
              <span class="glyphicon glyphicon-log-out"></span>
              Se déconnecter
            </a>
          </li>
        <?php } else { ?>
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-user"></span>
            Créer un compte
          </a>
        </li>
        <li>
          <a href="{{ URL::to('login') }}">
            <span class="glyphicon glyphicon-log-in"></span>
            Se connecter
          </a>
        </li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav>
    @yield('content')
</body>
</html>

@extends('layouts.app')

@section('content')
<div class="modal fade" id="reserve" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Trajet réservé
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Veuillez vous connecter pour réserver un trajet.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ferme</button>
        <a class="btn btn-primary" href="{{ URL::to('login') }}" role="button">Se connecter</a>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" id="main">
  <div class="row">
    <div id="criteres" class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
      <div class="container-fluid">
        <div class="row">
          <form method="post" action="#">
            <div class="form-group">
              <label for="depart">Adresse de départ :</label>
              <input type="text" id="depart" class="form-control" name="depart" placeholder="Adresse de départ" required="required" />
            </div>
            <div class="form-group">
              <label for="destination">Destination :</label>
              <input type="text" id="destination" class="form-control" name="destination" placeholder="Adresse de destination" required="required" />
            </div>
            <input type="button" id="reservation" class="btn btn-primary" name="submit" value="Réserver" />
          </form>
        </div>
      <div class="row">
        <img src="zoe.jpg" alt="Image de zoé" class="img-thumbnail" />
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div>Zoé n° : …</div>
          <div>Vous rejoindra à : …</div>
          <div>Arrivée prévue à : …</div>
        </div>
      </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9201.672545068184!2d1.0712783174099465!3d49.38828445157712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sfr!4v1527110348924" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<script>
  $(function() {
    $( "#reservation" ).on("click", function() {
      <?php if(isset($utilisateur)) echo "$('#reserve').modal('show');";
            else                    echo "$('#connexion').modal('show');";
       ?>
    });
  })
</script>
@endsection

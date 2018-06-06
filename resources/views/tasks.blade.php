@extends('layouts.app')

@section('content')
<div class="container-fluid" id="main">
  <div class="row">
    <div id="criteres" class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
      <div class="container-fluid">
        <div class="row">
          <form method="post" action="#">
            <div class="form-group">
              <label for="depart">Adresse de départ :</label>
              <input type="text" id="depart" class="form-control" name="depart" placeholder="Adresse de départ">
            </div>
            <div class="form-group">
              <label for="destination">Destination :</label>
              <input type="text" id="destination" class="form-control" name="destination" placeholder="Adresse de destination">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Réserver">
          </form>
        </div>
      <div class="row">
        <img src="zoe.jpg" alt="Image de zoé" class="img-thumbnail" />
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div>Zoé n° : X</div>
          <div>Vous rejoindra à : X</div>
          <div>Arrivée prévue à : X</div>
        </div>
      </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9201.672545068184!2d1.0712783174099465!3d49.38828445157712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sfr!4v1527110348924" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>
@endsection

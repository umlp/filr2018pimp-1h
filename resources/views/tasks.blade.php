<!-- col-xs col-sm col-md col-lg -->

@extends('layouts.app')

@section('content')
  <style>
      #lateral {
          background-color: red;
      }
  </style>

    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div id="lateral" class="col-sm-12">
            <p> Menu </p>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p> Barre gauche </p>
            </div>
            <div class="col-sm-9">
                <p> Col B2 </p>
            </div>
        </div>
    </div>


@endsection

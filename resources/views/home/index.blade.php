
    @extends('layouts.app')
    @section('title', $viewData["title"])
    @section('content')
    <div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src=https://bucket-aws-proyectofinal.s3.us-east-2.amazonaws.com/public/img/game.png class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src=https://bucket-aws-proyectofinal.s3.us-east-2.amazonaws.com/public/img/safe.png class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
    <img src=https://bucket-aws-proyectofinal.s3.us-east-2.amazonaws.com/public/img/submarine.png class="img-fluid rounded">
    </div>
    </div>
@endsection


 
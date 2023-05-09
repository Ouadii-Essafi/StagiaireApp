<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form stage</title>
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
            <img src="/images/Form-Icon-SVG-098ytghjk.png" alt="" width="40">
            </div>
            
            <span style="height:30px;border-left:1px solid black;padding-right: 8px;"></span>
          <a class="navbar-brand" href="#">Form stage</a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto"> 



            </ul>
            <div class="img2"></div>


    




            </form>
          </div>
        </div>
      </nav>
      <br>
      <div class="container">
        <div class="row justify-content-center">

        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item active " aria-current="page"> Formulaire de stage:</li>
                </ol>
              </nav>
            </div>
          </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form role="form" method="post" action="{{route('add-demande')}}" enctype="multipart/form-data" >
    @csrf
  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom : </label>
      <input type="text" class="form-control" id="inputEmail4" name="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prénom :</label>
      <input type="text" class="form-control" id="inputPassword4" name="Prenom">
    </div>
  </div>
  <br>
  <div class="form-group">
    <label for="inputAddress">Email :</label>
    <input type="email" class="form-control" id="inputAddress" name="Email">
  </div>
  <br>
  <div class="form-group">
    <label for="inputAddress2">Téléphone :</label>
    <input type="number" class="form-control" id="inputAddress2" name="Telephone">
  </div>
  <br>
  <div class="row">
  <div class="form-group col-md-6">
      <label for="inputState">Niveau d'étude :</label>
      <select id="inputState" class="form-control" name="Niveau_etude">
        <option selected></option>
        <option>Bac+1</option>
        <option>Bac+2</option>
        <option>Bac+3</option>
        <option>Bac+4</option>
        <option>Bac+5</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Domaine d'étude :</label>
      <select id="inputState" class="form-control" name="Domaine_etude">
        <option selected></option>
        <option>Informatique</option>
        <option>Audit comptabilité gestion</option>
        <option>Ressources humaines</option>
        <option>Logistique</option>
        <option>Administration</option>
        <option>Autre..</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
     <div class="form-group col-md-6">
      <label for="inputState">Service</label>
      <select id="inputState" class="form-control" name="Service">
        <option selected></option>
        <option>Informatique</option>
        <option>Ressources humaines</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Durée de stage :</label>
      <select id="inputState" class="form-control" name="Duree_stage">
        <option selected></option>
        <option>1 mois</option>
        <option>2 mois</option>
        <option>3 mois</option>
        <option>4 mois</option>
        <option>6 mois</option>
      </select>
    </div>
    </div>
    <br>
<div class="form-group custom-file">
<label class="custom-file-label" for="customFile">Votre CV :</label> <br>
<input type="file" name="CV">
  
</div>
<br>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>       
        </div>
      </div>
</body>
</html>
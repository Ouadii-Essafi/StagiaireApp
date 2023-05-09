@extends('services.layoutService')
@section('Title' , 'Les demandes')
@section('Content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Internship Offer Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    
    form {
      max-width: 300px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }
    
    h1 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    input[type="text"], textarea, select{
      width: 100%;
      padding: 8px;
      border-radius: 3px;
      border: none;
      margin-bottom: 10px;
      font-size: 14px;
      background-color: #f2f2f2;
    }
    
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
        <br>
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item active " aria-current="page"> Ajouter offre de stage:</li>
                </ol>
              </nav>
            </div>
          </div>
  <form method="post" action="{{route('add-offre')}}">
    @csrf
    <label for="title">Titre:</label>
    <input type="text" id="title" name="titre" required>
    
    <label for="start-date">Service:</label>
    <select id="inputState" class="form-control" name="Service" required>
        <option selected></option>
        <option>Informatique</option>
        <option>Ressources humaines</option>
    </select>
    
    <label for="duration">Duree de stage:</label>
    <select id="inputState" class="form-control" name="Duree_stage">
        <option selected></option>
        <option>1 mois</option>
        <option>2 mois</option>
        <option>3 mois</option>
        <option>4 mois</option>
        <option>6 mois</option>
    </select> 

    <label for="location">Localisation :</label>
    <input type="text" id="location" name="localisation" required>
    
    <label for="requirements">Niveau d'étude:</label>
    <select id="inputState" class="form-control" name="Niveau_etude">
        <option selected></option>
        <option>Bac+1</option>
        <option>Bac+2</option>
        <option>Bac+3</option>
        <option>Bac+4</option>
        <option>Bac+5</option>
    </select>

    <label for="requirements">Domaine d'étude:</label>
    <select id="inputState" class="form-control" name="Domaine_etude">
        <option selected></option>
        <option>Informatique</option>
        <option>Audit comptabilité gestion</option>
        <option>Ressources humaines</option>
        <option>Logistique</option>
        <option>Administration</option>
        <option>Autre..</option>
    </select>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" required></textarea>
    
    <input type="submit" value="Ajouter">
  </form>
</body>
</html>

@endsection
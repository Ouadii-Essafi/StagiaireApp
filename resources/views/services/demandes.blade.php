@extends('services.layoutService')
@section('Title' , 'Les demandes')
@section('Content')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-eJ/5oKAs6B11v9FvGul/7TJKqNoCixBNPjP8z/3DfKg6BqyGmdv9Dyj7sG6l1k9Ued12bHqyp6hh8pWsD9UKKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			font-family: Arial, sans-serif;
			color: #333;
			background-color: #f2f2f2;
		}
		table th, table td {
			padding: 12px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		table th {
			background-color: #00a7d0;
			color: white;
			font-weight: bold;
		}
		table tr:nth-child(even) {
			background-color: #fafafa;
		}
		.pdf-btn {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			padding: 8px 12px;
			background-color: #ff9900;
			border: none;
			border-radius: 4px;
			color: white;
			font-size: 14px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.pdf-btn:hover {
			background-color: #e68a00;
		}
		.pdf-icon {
			margin-right: 6px;
		}
		.accept-btn, .refuse-btn {
			padding: 8px 16px;
			border-radius: 4px;
			border: none;
			color: white;
			font-size: 14px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.accept-btn {
			background-color: #00cc00;
		}
		.accept-btn:hover {
			background-color: #008000;
		}
		.refuse-btn {
			background-color: #ff3333;
		}
		.refuse-btn:hover {
			background-color: #cc0000;
		}
	</style>
</head>
<body>
    <div class="container py-5">
        @if(isset($password)){
            <div class="alert alert-success" role="alert">
                this is the password : {{$password}}
            </div>
        }
        @endif
        <br>
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item active " aria-current="page"> Listes des demandes:</li>
                </ol>
              </nav>
            </div>
          </div>
	<table>
		<thead>
			<tr>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Email</th>
				<th>Telephone</th>
				<th>Niveau d'étude</th>
                <th>Domaine d'étude</th>
                <th>Service</th>
                <th>Duree de stage</th>
                <th>CV</th>
                <th>Réponse</th>
                <th></th>
			</tr>
		</thead>
        @foreach ($demandes as $demande)
		<tbody>
			<tr>
				<td>{{$demande->nom}}</td>
                <td>{{$demande->prenom}}</td>
				<td>{{$demande->email}}</td>
				<td>{{$demande->telephone}}</td>
                <td>{{$demande->niveau_etude}}</td>
                <td>{{$demande->domaine_etude}}</td>
                <td>{{$demande->service}}</td>
                <td>{{$demande->duree}}</td>
				<td><a href="{{route('pdfd' , $demande->id )}}" class="pdf-btn">PDF</a></td>
				<td>
                    <a href="{{route('acceptdemande' , $demande->id)}}" class="accept-btn">&#10004;</a>
                </td>
                <td>
                    <a href="{{route('deletedemande' , $demande->id)}}" class="refuse-btn">&#10006;</a>
				</td>
			</tr>
		</tbody>
         @endforeach
	</table>
</body>
</html>

@endsection
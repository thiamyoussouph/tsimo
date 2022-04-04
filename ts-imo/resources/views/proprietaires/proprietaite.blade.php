<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dff</title>
</head>
<body>
    <h1>liste des proprietaires </h1>
    <a class="btn btn-success m-4" href="{{route('create')}}">ajoter proprietaire</a>
    <section class="m-5">
    <div class="card">
    <div class="card-header text-center">
    <h2>liste des proprietaire</h2>
   <div class="card-body">
   </div>
    @if($proprietaites->count()>0)
    <table class="table table-strped table-bordered ">
  <thead >
    <tr>
      <th scope="col">prenom</th>
      <th scope="col ">nom</th>
      <th scope="col">adresse</th>
      <th scope="col">telephone</th>
      <th scope="col">email</th>
      <th scope="col">naissance</th>
      <th scope="col"></th>
     
    </tr>
  </thead>
    @foreach($proprietaites as $proprietaite)
    <!-- <p style="margin-left: 23px;"><a href="{{route('proprietaire.detail',['id'=> $proprietaite->id])}}">{{$proprietaite->prenom}}</a></p> -->
  
 
 
    <tr>
      <td><a style="text-decoration: none;"  href="{{route('proprietaire.detail',['id'=> $proprietaite->id])}}">{{$proprietaite->prenom}}</a></td>
      <td>{{$proprietaite->nom}}</td>
      <td>{{$proprietaite->adresse}}</td>
      <td>{{$proprietaite->telephone}}</td>
      <td>{{$proprietaite->email}}</td>
      <td>{{$proprietaite->datenaissance}}</td>
      <td><a class="btn btn-primary" href="{{route('proprietaire.detail',['id'=> $proprietaite->id])}}" style="text-decoration: none;">modifier</a>
      <a class="btn btn-danger" href="{{route('delete',['id'=> $proprietaite->id])}}" style="text-decoration: none;">suprimer</a></td>
    </tr>

    

    @endforeach
    <tfoot>
    </table>
    </div>
    </div>
    </section>
    @else
    <span style="color:red;">PAS DE DONNE DANS LA PASE DE DONE </span>
    @endif
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>detail</title>
</head>
<!-- <body>
    <table></table>
    <h1></h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">prenom</th>
      <th scope="col">nom</th>
      <th scope="col">adresse</th>
      <th scope="col">telephone</th>
      <th scope="col">email</th>
      <th scope="col">naissance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>{{$proprietaites->prenom}}</td>
      <td>{{$proprietaites->nom}}</td>
      <td>{{$proprietaites->adresse}}</td>
      <td>{{$proprietaites->telephone}}</td>
      <td>{{$proprietaites->email}}</td>
      <td>{{$proprietaites->datenaissance}}</td>
    </tr>

  </tbody>
</table> -->
<div class="col-6 m-5">
<h1 style="text-align: center; color:green;">modifier</h1>
    <form method="POST" action="{{Url('modifier/'.$proprietaites->id)}}">
      @csrf
    @method('PUT')
  <fieldset >

    <div class="mb-3">
      <label for="nom" class="form-label">nom</label>
     
      <input type="text" id="nom" value="{{$proprietaites->nom}}" class="form-control border-success botder-3" name="nom"placeholder="Disabl input">
    </div>
    <div class="mb-3">
      <label for="prenom" class="form-label">prenom</label>
      <input type="text" id="prenom" class="form-control"name="prenom" value="{{$proprietaites->prenom}}" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="nom" class="form-label">adresse</label>
      <input type="text" id="adresse" class="form-control"name="adresse" value="{{$proprietaites->adresse }}"placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="nom" class="form-label">datenaissance</label>
      <input type="date" id="datenaissance" class="form-control"name="datenaissance"value="{{$proprietaites->datenaissance}}" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="nom" class="form-label">telephone</label>
      <input type="text" id="telephone" class="form-control"name="telephone"value="{{$proprietaites->telephone}}" placeholder="telephone">
    </div>
    <div class="mb-3">
      <label for="nom" class="form-label">email</label>
      <input type="text" id="email" class="form-control"name="email"value="{{$proprietaites->email}}" placeholder="email">
    </div>
    
    <button type="submit" class="btn btn-success">modifier</button>
  </fieldset>
</form>
</div>
</body>
</html>
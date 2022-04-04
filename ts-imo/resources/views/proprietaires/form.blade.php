<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
<div class="col-6 m-5 ">
<div class="card list-group list-group-flush">
<h1 style="text-align: center; color:green;">ajouter proprietaire</h1>
    <form method="POST" action="{{route('proprietaire.store')}}">
    @csrf
  <fieldset >

    <div class="mb-3 m-5">
      <label for="nom" class="form-label">nom</label>
     
      <input type="text" id="nom" class="form-control border-success botder-3" name="nom"placeholder="Disabl input">
    </div>
    <div class="mb-3 m-5">
      <label for="prenom" class="form-label">prenom</label>
      <input type="text" id="prenom" class="form-control"name="prenom" placeholder="Disabled input">
    </div>
    <div class="mb-3 m-5">
      <label for="nom" class="form-label">adresse</label>
      <input type="text" id="adresse" class="form-control"name="adresse" placeholder="Disabled input">
    </div>
    <div class="mb-3 m-5">
      <label for="nom" class="form-label">datenaissance</label>
      <input type="date" id="datenaissance" class="form-control"name="datenaissance" placeholder="Disabled input">
    </div>
    <div class="mb-3 m-5">
      <label for="nom" class="form-label">telephone</label>
      <input type="text" id="telephone" class="form-control"name="telephone" placeholder="telephone">
    </div>
    <div class="mb-3 m-5">
      <label for="nom" class="form-label">email</label>
      <input type="text" id="email" class="form-control"name="email" placeholder="email">
    </div>
    
    <button type="submit" class="btn btn-success m-5">ajouter</button>
  </fieldset>
</form>
</div>
</div>

</body>
</html>
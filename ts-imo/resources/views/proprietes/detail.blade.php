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
<h1 style="text-align: center; color:green;">ajouter propriete</h1>
<form method="POST" action="{{url('modifie/'.$proprietes->id)}}">
      @csrf
    @method('PUT')
  <fieldset >

    <div class="mb-3 m-5">
      <label for="nom" class="form-label">libelet</label>
     
      <input type="text" id="nom"value="{{$proprietes->libelet}}" class="form-control border-success botder-3" name="libelet"placeholder="Disabl input">
    </div>
    <div class="mb-3 m-5">
      <label for="description" class="form-label">description</label>
      <input type="text" id="prenom" value="{{$proprietes->description}}" class="form-control"name="description" placeholder="Disabled input">
    </div>
    <div class="mb-3 m-5">
      <label for="nombreEtage" class="form-label">nombreEtage</label>
      <input type="text" id="adresse"  value="{{$proprietes->nombreEtage}}" class="form-control"name="nombreEtage" placeholder="Disabled input">
    </div>
    <div class="mb-3 m-5">
      <label for="nom" class="form-label">nombredepiece</label>
      <input type="text" id="nombredepiece" value="{{$proprietes->nombredepiece}}"class="form-control"name="nombredepiece" placeholder="Disabled input">
    </div>
    <div class="mb-3 m-5">
      <label for="nom" class="form-label">adressse</label>
      <input type="text" id="adressse" value="{{$proprietes->adressse}}" class="form-control"name="adressse" placeholder="adressse">
    </div>

    <div class="mb-3 m-5">
    <select class="form-select" aria-label="Default select example" name="proprietaite_id"value="{{$proprietes->proprietaite_id}}">
  <option selected>proprietaire</option>
  @foreach($proprietaite as $proprietaite)
  <option value="{{$proprietaite->id}}">{{$proprietaite->prenom}}</option>
  @endforeach
</select>
   </div>
    <div class="mb-3 m-5">
    <select class="form-select" aria-label="Default select example" name="typese_propriete_id" value="{{$proprietes->typese_propriete_id}}">
  <option selected>type propriete</option>
  @foreach($typese_propriete as $typese_propriete)
  <option value="{{$typese_propriete->id}}">{{$typese_propriete->appartement}}</option>
  @endforeach
</select>
    </div>
    <div class="mb-3 m-5">
    <select class="form-select" aria-label="Default select example" name="quartier_id" value="{{$proprietes->description}}">
  <option selected>quartier</option>
  @foreach($quartier as $quartier)
  <option value="{{$quartier->id}}">{{$quartier->libelet}}</option>
  @endforeach
</select>
    </div>
    
    <button type="submit" class="btn btn-success m-5">modifier</button>
  </fieldset>
</form>
</div>
</div>

</body>
</html>
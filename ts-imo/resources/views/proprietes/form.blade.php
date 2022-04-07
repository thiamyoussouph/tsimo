@include('template.entete')
<!-- @include('template.navigation') -->
@include('template.menu')
<body>
  
<div class="col-6 m-5 ">
<div class="card list-group list-group-flush">
<h1 style="text-align: center; color:green;">ajouter propriete</h1>
    <form method="POST" action="{{route('propriete.store')}}">
    @csrf
  <fieldset >

    <div class="mb-3 m-5">
      <label for="nom" class="form-label">libelet</label>
     
      <input type="text" id="nom" class="form-control border-success botder-3" name="libelet"placeholder="Disabl input">
    </div>
    <div class="mb-3 m-5">
      <label for="description" class="form-label">description</label>
      <input type="text" id="prenom" class="form-control"name="description" placeholder="Disabled input">
    </div>
    <div class="mb-3 m-5">
      <label for="nombreEtage" class="form-label">nombreEtage</label>
      <input type="text" id="adresse" class="form-control"name="nombreEtage" placeholder="Disabled input">
    </div>
    <div class="mb-3 m-5">
      <label for="nom" class="form-label">nombredepiece</label>
      <input type="text" id="nombredepiece" class="form-control"name="nombredepiece" placeholder="Disabled input">
    </div>
    <div class="mb-3 m-5">
      <label for="nom" class="form-label">adressse</label>
      <input type="text" id="adressse" class="form-control"name="adressse" placeholder="adressse">
    </div>

    <div class="mb-3 m-5">
    <select class="form-select" aria-label="Default select example" name="proprietaite_id">
  <option selected>proprietaire</option>
  @foreach($proprietaite as $proprietaite)
  <option value="{{$proprietaite->id}}">{{$proprietaite->prenom}}</option>
  @endforeach
</select>
   </div>
    <div class="mb-3 m-5">
    <select class="form-select" aria-label="Default select example" name="typese_propriete_id">
  <option selected>type propriete</option>
  @foreach($typese_propriete as $typese_propriete)
  <option value="{{$typese_propriete->id}}">{{$typese_propriete->appartement}}</option>
  @endforeach
</select>
    </div>
    <div class="mb-3 m-5">
    <select class="form-select" aria-label="Default select example" name="quartier_id">
  <option selected>quartier</option>
  @foreach($quartier as $quartier)
  <option value="{{$quartier->id}}">{{$quartier->libelet}}</option>
  @endforeach
</select>
    </div>
    
    <button type="submit" class="btn btn-success m-5">ajouter</button>
  </fieldset>
</form>
</div>
</div>

</body>
@include('template.script')
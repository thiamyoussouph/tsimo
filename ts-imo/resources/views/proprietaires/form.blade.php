@include('template.entete')
<!-- @include('template.navigation') -->
@include('template.menu')
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
@include('template.script')
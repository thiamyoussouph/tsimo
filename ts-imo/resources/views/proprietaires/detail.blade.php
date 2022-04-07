@include('template.entete')
<!-- @include('template.navigation') -->
@include('template.menu')
<body>
<div class="col-6 m-5">
<h1 style="text-align: center; color:green;">modifier</h1>
    <form method="POST" action="{{Url('modifier/'.$proprietaites->id)}}">
      @csrf
    @method('PUT')
  <fieldset >

    <div class="mb-3" style="color: #5d8da9;">
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

@include('template.script')
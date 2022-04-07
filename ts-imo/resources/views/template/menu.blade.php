@include('template.entete')

<nav class="navbar navbar-dark bg-success">
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('afficher')}}">proprietaire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('affiche')}}">propriete</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('ajouter')}}">ajoute peroprietaire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('proprietaire.store')}}">ajoute peroprietes</a>
          </li>


        </ul>
        <form action="{{route('logout')}}" method="post">
          @csrf
          <input type="submit" value="se deconnecter">
        </form>
      {{Auth::user()->name}}
      </div>
    </div>
  </nav>
</nav>
</div>
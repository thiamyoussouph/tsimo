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

            <li>
            @auth
                      
                        
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-success"style="text-decoration:none;color:white;">connection</a>

                        @if (Route::has('register'))
                           <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline  btn btn-success"style="text-decoration:none;color:white;">s enregistrer</a>
                        @endif
                    @endauth
            </li>
    </div>
  </nav>
</nav>
</div>
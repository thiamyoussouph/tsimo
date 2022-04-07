@include('template.entete')
<!-- @include('template.navigation') -->
@include('template.menu')


<body>
  <div class="container-fluid">
    <h1>liste des proprietes </h1>
    <a class="btn btn-success m-4" href="{{route('ajouter')}}">ajouter</a>
    <section class="col-12 col-sn-6">
      <div class="card col-sm-12 col-md-12 col-12">
        <div class="card-header text-center">
          <h2>liste des proprietaire</h2>
          <div class="row">
            <div class="col-sm-12 cl-md-9">
            <div class="card-body" style="width:70%;">
            </div>
            @if($proprietes->count()>0)
            <table class="table table-strped table-bordered col-sm-12 col-md-12 col-12">
              <thead>
                <tr>
                  <th scope="col">libelet</th>
                  <th scope="col ">description</th>
                  <th scope="col">nombreEtage</th>
                  <th scope="col">nombredepiece</th>
                  <th scope="col">adressse</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              @foreach($proprietes as $propriete)
              <tr>
                <td>{{$propriete->libelet}}</td>
                <td>{{$propriete->description}}</td>
                <td>{{$propriete->nombreEtage}}</td>
                <td>{{$propriete->nombredepiece}}</td>
                <td>{{$propriete->adressse}}</td>
                <td><a class="btn btn-primary" href="{{route('recuperer',['id'=>$propriete->id])}}" style="text-decoration: none;">modifier</a>
                  <a class="btn btn-danger" href="{{route('suprimer',['id'=>$propriete->id])}}" style="text-decoration: none;">suprimer</a>
                </td>
              </tr>
              @endforeach
              <tfoot>
            </table>
          </div>
        </div>
        </div>
    </section>
    @else
    <span style="color:red;">PAS DE DONNE DANS LA PASE DE DONE </span>
    @endif
  </div>
</body>
@include('template.script')
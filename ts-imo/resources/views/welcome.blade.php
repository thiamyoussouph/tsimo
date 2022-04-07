@include('template.entete')

@include('template.navigation')
<section >
  <div class="card">
    <div class="card-header text-center">
      <h2 style="color:green;">liste des proprietaire</h2>
      <div class="card-body">
      </div>
      @if($proprietaites->count()>0)
      <table class="table table-strped table-bordered ">
        <thead>
          <tr>
            <th scope="col">prenom</th>
            <th scope="col ">nom</th>
            <th scope="col">adresse</th>
            <th scope="col">telephone</th>
            <th scope="col">email</th>
            <th scope="col">naissance</th>
            

          </tr>
        </thead>
        @foreach($proprietaites as $proprietaite)
        <!-- <p style="margin-left: 23px;"><a href="{{route('proprietaire.detail',['id'=> $proprietaite->id])}}">{{$proprietaite->prenom}}</a></p> -->



        <tr>
          <td>{{$proprietaite->prenom}}</td>
          <td>{{$proprietaite->nom}}</td>
          <td>{{$proprietaite->adresse}}</td>
          <td>{{$proprietaite->telephone}}</td>
          <td>{{$proprietaite->email}}</td>
          <td>{{$proprietaite->datenaissance}}</td>
        
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
</div>
<!-- @include('template.script') -->
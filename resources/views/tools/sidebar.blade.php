@section('sidebar')
  <div class='sidebar-1'> 
    <div class='sidebar-menu'><i class="fa fa-car left"></i>Unidades<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
    <ul>
    @foreach(Auth::user()->rol->rolopcion as $key)
             <li>{{ $key->opcion->descripcion }}</li> 
              @endforeach
    </ul>
     
     
      </div>
  </div>
@endsection

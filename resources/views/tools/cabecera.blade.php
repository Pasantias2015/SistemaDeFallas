@if($errors->any())
<div class="alert alert-danger" role="alert">
    <p>Corrije los errores por favor:</p>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{  $error }}</li>
         @endforeach
    </ul>
</div>
@endif
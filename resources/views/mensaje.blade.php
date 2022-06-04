

{{-- TABLA CON MENSAJES  --}}


<div class="col-12 col-md=8 mx-auto my-5">
    <h1>Mensajes</h1>
    <p>{{$titulo}}</p>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    
    <table class="table">   
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>

        </tr>                
    @foreach($mensajes as $mensaje)    
        <tr>
            <th scope="col">{{$mensaje->id}}</th>
            <th scope="col">{{$mensaje->name}}</th>
            <th scope="col">{{$mensaje->email}}</th>
            <th scope="col">{{$mensaje->phone}}</th>      
            <th scope="col">{{$mensaje->message}}</th>      
        </tr>
    @endforeach            
</div>
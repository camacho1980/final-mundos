

    <h1>MENSAJES</h1>
    
    <div class="col-12 col-md=8 mx-auto my-5"> 
        <style>
            table {
                border-collapse: collapse;
                display: flex;
                margin: 10%;
            }   
            table,
            th,
            td {
                border: 1px solid black;
            } 
            th,
            td {
                padding: 10px;
            }
            </style>
    
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
   

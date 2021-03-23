@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('products/new') }}">Add Nieuw Producten </a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Boodschappenlijst</h1>

                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        

                      
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th> 
                        <th scope="col">Image</th> 
                        
                        </tr>
                    </thead>
                    <tbody>
                    
                    @foreach( $products as $u )
            
                    
                    <tr>
                    
                    </td>
                        
                        
                        <td>{{$u->name}}</td>
                        <td>
                            
                        <a href="products/{{ $u-> id}}/edit"><button class="btn btn-info">Edit</button>
                        </a>
                        </td>
                        <td>
                            <form action="products/delete/{{ $u->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete </button> 

                        
                            </form>
                        </td>
                        <td><img src="storage/app/{{ $u->image }}" width="70px;" heidth="70px"  class="img-rounded" />
                        </td>

                    </tr>
                        
                    @endforeach


                   </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

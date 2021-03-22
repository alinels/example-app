@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a href="{{  url('products') }}">Terug</a>
                                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if( Request::is('*/edit'))
                    <form action="{{ url('products/update')}}/{{$product->id}}" method="post">                    
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputProduct">Product Naam  </label>
                        <input type="text" name ='name' class="form-control" value="{{$product->name}}" >
                    </div>
                    
                    
                    <div class="form-check">
                    <input name="check" type="checkbox" class="form-check-input" value="1" >
                      <label class="form-check-label" >Check</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Bekijk</button>
                    </form>

                    @else

                    <form action="{{ url('products/add')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputProduct">Product Naam  </label>
                        <input type="text" name ='name' class="form-control" >
                        
                    </div>

                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="check">
                      <label class="form-check-label" >Check</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Bekijk</button>

                    </form>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

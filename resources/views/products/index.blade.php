
@extends('app')
@section('content')

<div class='container'>

    <h1>Products</h1>
    <a href="{{  route('products.create')  }}" class="btn btn-primary">
        New Products
    </a>
    
    </br>
    </br>
    <table class='table'>

        <tr>
            <th>ID          </th>
            <th>Name        </th>
            <th>Description </th>
            <th>Prince </th>
            <th>Featured </th>
            <th>Recommend </th>
            <th>Action    </th>
        </tr>    

        @foreach($products as $products)
        <tr>
            <td>{{$products->id}}</td>
            <td>{{$products->name}}</td>    
            <td>{{$products->description}}</td>    
            <td>{{$products->prince}}</td>    
            <td>{{$products->featured}}</td>  
            <td>{{$products->recommend}}</td>  
            <td>
                <a href="{{ route('products.destroy',['id'=>$products->id]) }}">
                    
                    <span class="glyphicon glyphicon-remove-circle" style="color:red; font-size:20px"></span>
                </a>
                
                {{"   |    "}} 
                
                <a href="{{ route('products.edit',['id'=>$products->id]) }}">
                    
                    <span class="glyphicon glyphicon-edit" style="color:#66afe9; font-size:20px"></span>
                </a>
            </td>
        </tr>
        @endforeach

    </table>    
</div>

@endsection
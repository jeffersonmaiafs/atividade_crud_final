
@extends('app')
@section('content')

<div class='container'>

    <h1>Categories</h1>
    <a href="{{  route('categories.create')  }}" class="btn btn-primary">
        New Category
    </a>
    
    </br>
    </br>
    <table class='table'>

        <tr>
            <th>ID          </th>
            <th>Name        </th>
            <th>Description </th>
            <th>Action    </th>
        </tr>    

        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>    
            <td>{{$category->description}}</td>    
            <td>
                <a href="{{ route('categories.destroy',['id'=>$category->id]) }}">
                    
                    <span class="glyphicon glyphicon-remove-circle" style="color:red; font-size:20px"></span>
                </a>
                
                {{"   |    "}} 
                
                <a href="{{ route('categories.edit',['id'=>$category->id]) }}">
                    
                    <span class="glyphicon glyphicon-edit" style="color:#66afe9; font-size:20px"></span>
                </a>
            </td>
        </tr>
        @endforeach

    </table>    
</div>

@endsection
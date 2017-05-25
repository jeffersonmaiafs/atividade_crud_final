@extends('app')
@section('content')

<div class="container">
    <h1> Editar Products: {{  $products->name  }}</h1>
    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
     
    {!! Form::open(['route'=>['products.update', $products->id], 'method'=>'put']) !!}
<!--Name Form Input-->
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $products->name, ['class'=>'form-control']) !!}
    </div>
    <!-- Description Form Input -->
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', $products->description, ['class'=>'form-control']) !!}
    
    </div> 
    
   
    
     <div class="form-group">
        {!! Form::label('featured', 'Featured') !!}
        </br>
        @if($products->featured=='1')
         {!! Form::radio('featured', '1',true) !!}
        A vista
        </br>
       {!! Form::radio('featured', '0', false) !!}
        A prazo
        </br>
        @else
         {!! Form::radio('featured', '1',false) !!}
        A vista
        </br>
       {!! Form::radio('featured', '0', true) !!}
        A prazo
        </br>
        @endif
    </div>
    
    
    <div class="form-group">
        {!! Form::label('recommend', 'Recommend') !!}
        </br>
        @if($products->recommend=='1')
        
       {!! Form::radio('recommend', '1',true) !!}
        Ativo
        </br>
        {!! Form::radio('recommend', '0',false) !!}
        Inativo
        </br>
        @else
       {!! Form::radio('recommend', '1',false) !!}
        Ativo
        </br>
        {!! Form::radio('recommend', '0',true) !!}
        Inativo
        </br>
        @endif
        
    </div>
    
    
    <!--Prince Form Input-->
    <div class="form-group">
        {!! Form::label('prince', 'Prince') !!}
        {!! Form::text('prince', $products->prince, ['class'=>'form-control']) !!}
    </div>
    
    

    <div class="form-group">
        {!! Form::submit('Alterar Products', ['class'=>'btn btn-primary']) !!}
       </div>    

    
    {!! Form::close() !!}
</div>

@endsection
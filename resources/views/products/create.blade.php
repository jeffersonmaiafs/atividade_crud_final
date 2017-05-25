@extends('app')
@section('content')

<div class="container">
    <h1> Create Products</h1>
    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
     
    {!! Form::open(['route'=>'products.store']) !!}
<!--Name Form Input-->
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <!-- Description Form Input -->
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    </div>    
    
    <!--Name Form Input-->
    <div class="form-group">
        {!! Form::label('prince', 'Prince') !!}
        {!! Form::text('prince', null, ['class'=>'form-control']) !!}
    </div>
    
     <div class="form-group">
        {!! Form::label('featured', 'Featured') !!}
        </br>
        {!! Form::radio('featured', '0') !!}
        A vista
        </br>
        {!! Form::radio('featured', '1') !!}
        A prazo
        </br>
        
    </div>
    
      <div class="form-group">
        {!! Form::label('recommend', 'Recommend') !!}
        </br>
        {!! Form::radio('recommend', '0') !!}
        Ativo
        </br>
        {!! Form::radio('recommend', '1') !!}
        Inativo
        </br>
        
    </div>

    <div class="form-group">
        {!! Form::submit('Add Products', ['class'=>'btn btn-primary']) !!}
       </div>    

    
    {!! Form::close() !!}
</div>

@endsection
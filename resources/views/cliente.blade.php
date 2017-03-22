@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Validação com laravel</div>

                <div class="panel-body">
                     <!-- utilizando função do php e blade para contar os erros -->
                    @if(count($errors)>0) 
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- clientes = o que foi configurado na rota -->
                    <form class="form-horizontal" action="{{ route('clientes.store') }}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nome:</label>
                        <div class="col-md-6">
                             <input class="form-control" type="text" name="nome" value="{{ old('nome') }}" >
                        </div>
                    </div>      

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-mail:</label>
                        <div class="col-md-6">
                             <input class="form-control" type="text" name="email" value="{{ old('email') }}" >
                        </div>
                    </div>  

                   
                    <div class="form-group">
                        <div class="col-md6 col-md-offset-4">
                            <button class="btn btn-primary">Enviar</button>
                        </div>                        
                    </div>
                    
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

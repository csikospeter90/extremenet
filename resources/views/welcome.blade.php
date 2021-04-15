@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Eddig magyarországra érkezett vakcinák</h2>
        </div>
        <div class="card-body">
            @foreach($vaccines as $v)
                <h5><b>{{$v->name}}:</b> {{$v->shipments->sum('quantity')}} db</h5>
            @endforeach
            <h5><b>Összes érkezett vakcina:</b> {{$quantity}} db</h5>
        </div>
    </div>

    <hr>

    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Regisztráció oltásra</h2>
        </div>
        <div class="card-body">
            @if (\Session::has('message'))
                <div class="alert alert-success">
                    <p>{!! \Session::get('message') !!}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{Form::open(['url'=>route('patient.store')])}}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Név</span>
                </div>
                {{Form::text('name',null,['class'=>'form-control'])}}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">E-mail</span>
                </div>
                {{Form::email('email',null,['class'=>'form-control'])}}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Preferált vakcian</span>
                </div>
                {{Form::select('vaccine',$vaccineSelect,'',['class'=>'form-control'])}}
            </div>
            {{Form::submit('Elküld',['class'=>'btn btn-success'])}}
            {{Form::close()}}

        </div>
    </div>
@endsection

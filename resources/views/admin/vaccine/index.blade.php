@extends('layouts.app')

@section('content')
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
    <div class="card mb-3">
        <div class="card-header">
            <h2 class="text-center">Új Vakcina felvétele</h2>
        </div>
        <div class="card-body">

            {{Form::open(['url'=>route('vaccine.store')])}}
            <div class="input-group mb-3">
                {{Form::text('name',null,['class'=>'form-control','required'])}}
                <div class="input-group-append">
                    {{Form::submit('mentés',['class'=>'btn btn-outline-success'])}}
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Vakcinák</h2>
        </div>
        <div class="card-body">
            @foreach($vaccines as $v)
                {{Form::open(['url'=>route('vaccine.update',$v),'method'=>'put'])}}
                <div class="input-group mb-3">
                    {{Form::text('name',$v->name,['class'=>'form-control','required'])}}
                    <div class="input-group-append">
                        {{Form::submit('mentés',['class'=>'btn btn-outline-success'])}}
                        <button class="btn btn-outline-danger js-delete-vaccine" data-target="{{$v->id}}" type="button">
                            Törlés
                        </button>
                    </div>
                </div>
                {{Form::close()}}
                {{Form::open(['url'=>route('vaccine.destroy',$v),'id'=>'delete_vaccine_'.$v->id,'method'=>'delete'])}}
                {{Form::close()}}
            @endforeach
        </div>
    </div>
@endsection

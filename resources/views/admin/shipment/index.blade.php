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
            <h2 class="text-center">Új Szálltmány felvétele</h2>
        </div>
        <div class="card-body">

            {{Form::open(['url'=>route('shipment.store')])}}
            <div class="input-group mb-3">
                {{Form::select('vaccine',$vaccineSelect,'',['class'=>'form-control','required'])}}
                {{Form::number('quantity',null,['class'=>'form-control','required','min'=>1,'placeholder'=>'Mennyiség'])}}
                {{Form::date('arrival_date',null,['class'=>'form-control','required'])}}
                <div class="input-group-append">
                    {{Form::submit('mentés',['class'=>'btn btn-outline-success'])}}
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Eddig beérkezett szálltmányok</h2>
        </div>
        <div class="card-body">
            @foreach($shipments as $s)
                {{Form::open(['url'=>route('shipment.update',$s),'method'=>'put'])}}
                <div class="input-group mb-3">
                    {{Form::select('vaccine',$vaccineSelect,$s->vaccine->id,['class'=>'form-control','required'])}}
                    {{Form::number('quantity',$s->quantity,['class'=>'form-control','required','min'=>1])}}
                    {{Form::date('arrival_date',$s->arrival_date,['class'=>'form-control','required'])}}
                    <div class="input-group-append">
                        {{Form::submit('mentés',['class'=>'btn btn-outline-success'])}}
                        <button class="btn btn-outline-danger js-delete-shipment" data-target="{{$s->id}}" type="button">
                            Törlés
                        </button>
                    </div>
                </div>
                {{Form::close()}}
                {{Form::open(['url'=>route('shipment.destroy',$s),'id'=>'delete_shipment_'.$s->id,'method'=>'delete'])}}
                {{Form::close()}}
            @endforeach
        </div>
    </div>
@endsection

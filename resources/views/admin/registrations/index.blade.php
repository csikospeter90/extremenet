@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Oltásra regisztráltak</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Név</th>
                    <th scope="col">Preferált Vakcina</th>
                    <th scope="col">Regisztráció dátuma</th>
                </tr>
                </thead>
                <tbody>
                @foreach($patients as $p)
                    <tr>
                        <th scope="row">{{$p->id}}</th>
                        <td>{{$p->name}}</td>
                        <td>{{$p->vaccine->name}}</td>
                        <td>{{$p->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

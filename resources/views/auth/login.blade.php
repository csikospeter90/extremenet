@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Bejelentkezés</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{Form::open(['url'=>route('admin.login')])}}
                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">Felhasználónév</label>

                            <div class="col-md-6">
                                {{Form::text('username',null,['class'=>'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">Jelszó</label>

                            <div class="col-md-6">
                                {{Form::password('password',['class'=>'form-control'])}}
                            </div>
                        </div>
                        {{Form::submit('Belépés',['class'=>'btn btn-info btn-block'])}}
                        {{Form::close()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

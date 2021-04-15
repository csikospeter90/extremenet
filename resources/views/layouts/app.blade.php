<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')
<body>
@auth
    @include('components.navbar')
@endauth
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                @yield('content')
            </div>
        </div>
    </div>

</main>
{{Form::open(['url'=>route('admin.logout'),'id'=>'logout-form'])}}
{{Form::close()}}
</body>
</html>

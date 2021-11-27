<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('client.layouts.style')

</head>

<body>
<div class="app">
    @include('client.layouts.header')
    <div class="app__container">
        <div class="grid wide">
            @yield('content')
        </div>
    </div>
    @include('client.layouts.footer')
</div>
@include('client.layouts.modal')
@include('client.layouts.script')
</body>

</html>

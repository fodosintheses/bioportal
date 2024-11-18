<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{ $title ?? 'AGC - BIOPORTAL' }}</title>
</head>
<?php
$time = microtime(true) - LARAVEL_START;
?>
<p class="text-grey">This page took {{ number_format($time, 2, '.', '') }} seconds to render</p>

<body>
    <x-header />
    <div class="container" style="margin-top:50px;">

        @if (session('success'))
            <x-alert type="success" message="{{ session('success') }}" />
        @endif
        @if (session('error'))
            <x-alert type="error" message="{{ session('error') }}" />
        @endif
        {{ $slot }}
    </div>


</body>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/datatables.js') }}"></script>

<script type="text/javascript">
    new DataTable('#myTable', {
        pageLength: 25
    });

    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
    });
</script>

</html>

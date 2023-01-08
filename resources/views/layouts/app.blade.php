<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>

</head>

<body>
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <p id="error" style="color: red">{!! $error !!}</p>
        @endforeach
    @endif
    @if (session('success'))
        <div class="alert alert-success" style="margin: 0;word-wrap: break-word;">
            <p>{!! session('success') !!}</p>
        </div>
    @endif
    @yield('content')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"> --}}
    {{-- </script> --}}
    {{-- <script type="text/javascript">
        $(function() {
            $('.date').datepicker({
                format: "DD-MM-YYYY"
            });
        });
    </script> --}}
    @yield('script')
</body>

</html>

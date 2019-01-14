<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>Authentication Vuejs and Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <div id="app" style="height: 100%">
        <example-component></example-component>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
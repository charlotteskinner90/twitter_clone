<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' }
    </script>
</head>
<body>
    <div id="app"></div>
    <script src="js/main.js"></script>
</body>
</html>

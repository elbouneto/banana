
<!DOCTYPE html>
<html>
<head>
    <title>Page vue films</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 80px;
            color: orange;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">{{ $movies->title }}</div>
        <div class="title">sortie le {{ $movies->date_release }}</div>
        <div class="title">un film au budget de {{ $movies->budget }} euros</div>
    </div>
</div>
</body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$this->e($title)?></title>
    <link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
<body>

<div class="container">
    <?=$this->section('content')?>
</div>

    <script src="dist/js/jquery-3.2.1.min.js"></script>
    <script src="dist/js/popper.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        a { text-decoration: none; color: #000; }
    </style>
    <link rel="stylesheet" href="./css/modal.css">
</head>
<body>
    <div class="modalBtn one">Modal1</div>
    <div class="modalBtn two">Modal2</div>
    <div class="modalBtn three">Modal3</div>

    <div class="modal one">
        <div class="innerModal">
            <p>Modal1</p> 
        </div>
        <div class="close"></div>
    </div>
    <div class="modal two">
        <div class="innerModal">
            <p>Modal2</p>
        </div>
        <div class="close"></div>
    </div>
    <div class="modal three">
        <div class="innerModal">
            <p>Modal3</p>
        </div>
        <div class="close"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>
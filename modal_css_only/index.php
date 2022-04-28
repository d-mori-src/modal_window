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
    <a href="#modalOne">Modal1</a>
    <a href="#modalTwo">Modal2</a>
    <a href="#modalThree">Modal3</a>

    <section id="modalOne" class="modal">
        <div class="modalInner">
            <h2>Modal1</h2>
            <p>This is Modal1.</p>
            <a href="" class="closeBtn">×</a>
        </div>
        <a href="" class="closeBack"></a>
    </section>

    <section id="modalTwo" class="modal">
        <div class="modalInner">
            <h2>Modal2</h2>
            <p>This is Modal2.</p>
            <a href="" class="closeBtn">×</a>
        </div>
        <a href="" class="closeBack"></a>
    </section>

    <section id="modalThree" class="modal">
        <div class="modalInner">
            <h2>Modal3</h2>
            <p>This is Modal3.</p>
            <a href="" class="closeBtn">×</a>
        </div>
        <a href="" class="closeBack"></a>
    </section>
</body>
</html>
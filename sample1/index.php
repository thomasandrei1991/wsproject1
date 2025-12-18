<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .boxes {
            display: flex;
            text-align: center;
            justify-content: center;
            justify-items: center;
            align-items: center;
            border-style: none;
            margin: 15px;
            padding: 15px;
            gap: 20px;
            flex-direction: column;
        }
        .box1, .box2, .box3, .box4 {
            width: 100px;
            height: 100px;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box1 { background-color: red; }
        .box2 { background-color: green; }
        .box3 { background-color: blue; }
        .box4 { background-color: yellow; }

        .box5, .box6, .box7, .box8 {
            width: 80px;
            height: 80px;
            border-radius: 15pxpx;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box5 { background-color: pink; }
        .box6 { background-color: cyan; }
        .box7 { background-color: lightseagreen; }
        .box8 { background-color: orange; }
    </style>
</head>
<body>
    <div class="boxes">
        <div class="box1">
            <div class="box5">

            </div>
        </div>
        <div class="box2">
            <div class="box6">

            </div>
        </div>
        <div class="box3">
             <div class="box7">

            </div>
        </div>
        <div class="box4">
            <div class="box8">

            </div>
        </div>
    </div>
</body>
</html>



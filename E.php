<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .bg{
            background: url('neve.png');
            background-size: cover;
            height: 100%;
        }
        div{
            text-align: center;
            padding-top: 50px;
        }
    </style>
</head>
<body class="bg">
    <div>
        <img src="E.png" alt="" id="letraE">
    </div>

    <script>
        setTimeout(function(){ 
            document.getElementById("letraE").src = 'E2.png'; 
        }, 1000);
        setTimeout(function(){ 
            document.getElementById("letraE").src = 'fraseE.png'; 
        }, 2000);
    </script>
</body>
</html>
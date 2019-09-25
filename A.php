<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprender Português letra A</title>

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
        <img src="A.png" alt="" id="letraA" >
    </div>

    <script>
        setTimeout(function(){ 
            document.getElementById("letraA").src = 'A2.png'; 
        }, 1000);
        setTimeout(function(){ 
            document.getElementById("letraA").src = 'fraseA.png'; 
        }, 2000);
    </script>
</body>
</html>
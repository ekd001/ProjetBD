<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <style type="text/css">
        header{
            display:flex;
            flex-direction: row;
            justify-content:flex-start;
            text-align:center;
        }

        .logo{
            margin-top:17px;
            font-size:30px;
            font-weight:700;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-decoration: none;
        }

        .options{
            position: relative;
            list-style-type: none;
            display:flex;
            flex-direction:row;
            justify-content:space-between;
            margin-top : 25px;
            margin-left:25vw;
        }

        .active{
            
            text-decoration: none;
            margin-left : 40px;
            font-weight:500;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color:#00A2E8;
        }

        .active:hover{
            border-bottom:2px solid;
        }
        
    </style>
</head>

<body>
    <header>
        <a href="acceuil.php" class="logo">AssuranceM</a>
        <div>
            <ul class="options">
                <li><a href="#" class="active">Assurer</a></li>
                <li><a href="#" class="active">Notifications</a></li>
                <li><a href="#" class="active">Profil</a></li>
            </ul>
        </div>
    </header>
</body>
</html>
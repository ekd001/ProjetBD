<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <style type="text/css">
       
        section{
                margin-top : 50px; 
                font-size:medium;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-align:center;
                position:relative;
                display:flex;
                flex-direction:column;
                align-items: center;
        }
        #message{
            width:500px;
            height:80px;
            box-shadow: 1px 1px 10px #00A2E8;;
           
        }
    </style>
</head>
<body>
    <?php 
        include("header.php");
       
           
            require_once("connect.inc.php");
            $req = $bd->prepare("SELECT message,dt_message FROM Notification WHERE id_client=:num_assure");
            $req->execute(array(
                'num_assure'=>$_SESSION['numero']
            ));
            $i = 0;
            while($data = $req->fetch()){
                $message = $data['message'];
                $date = $data['dt_message'];
                $i++;
                ?>
                
                <section>
                    <div id="message">
                        <p><?php echo "$message";?></br></p>
                        <p><?php echo "$date"; ?></p>
                    </div>
                </section>
            <?php
             
            }
           
            $req->closeCursor();
        
       
            
        ?>
    
</body>
</html>
<?php
 $resultado = rand(1,3);
//jogada do pc
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">

    <style>
        #jogada_do_Robo{
    border: 1.5px;
    border-color: rgba(158, 44, 59, 0.363);
    border-style: solid;
    width: 480px;
    margin-top: 0px;
    background-color: rgb(231, 42, 42);
}

    </style>
</head>
<body>
     <center>  
        <div  id="jogada">
            
                
                <h4>
                    Sua jogada
                </h4>

           
            <?php      
                $jogadaPlayer = $_REQUEST['opção'];
                if($jogadaPlayer == 1){
                    echo"<img src=papel.png>";


                }else if($jogadaPlayer == 2){

                    echo"<img src=tesoura.png>";


                }else if($jogadaPlayer == 3){

                    echo"<img src=pedra.png>";


                }else{

                    echo"<script>window.alerte(erro ao escolher a mão)</script>";
                    header('location:jogo.html');

                }
                 

                    
            
            ?>


                




        </div>
        <h1>Versus</h1>

<!--      Jogada do robo     -->

<div id="jogada_do_Robo">
            
                
            <h4>
                Maquina
            </h4>

       
        <?php      
            $jogadaRobo = $resultado;
            if($jogadaRobo == 1){
                echo"<img src=papel.png>";


            }else if($jogadaRobo == 2){

                echo"<img src=tesoura.png>";


            }else if($jogadaRobo == 3){

                echo"<img src=pedra.png>";


            }

            
             

                
        
        ?>
                
    </div>

            <form action="jogo.html">
                <input type="submit" value="voltar" id="bnt">

             </form>


            
    
    </center> 

</body>
</html>


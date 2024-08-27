<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class LotteriaController{

    #[Route('/lotteria')]
    public function lotteria() : Response
    {

        $num1 = random_int(0, 110);
        $num2 = random_int(0, 110);
        $num3 = random_int(0, 110);
        $num4 = random_int(0, 110);
        $num5 = random_int(0, 110);
        $num6 = random_int(0, 110);
        
     return new Response("
    
     <!Doctype html>
     <html lang='it'>
        <head>
            <title>Lotteria</title>
            <style>
                body
                {
                    background-color: #ffcba9;
                }

                .header{
                    margin: 10vh;
                    display: block;   
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <div class='header'>
                <h1>Questi sono i numeri vincenti</h1>
                <h4>".$num1." ".$num2." ".$num3." ".$num4." ".$num5." ".$num6."</h4>
            </div>

        </body>
     </html>
    
     
     
     
     ")       ;
    }
}

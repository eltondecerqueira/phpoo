<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        if (phpversion() >= 5.4):
            echo phpversion() . ' Ola mundo, podemos programar';
        else:
            echo phpversion() . ' Olá mundo, termos que atualizar o php';
                   
        endif;
        
//        echo "<pre>";
//        print_r(ini_get_all());
//        echo "</pre>";
        
        echo ini_get('date.timezone') . "<br>";
        echo date('d/m/y H:i:s');
        //date_default_timezone_set("UTC");
        echo date_default_timezone_get().'<br>';
        echo date('d/m/y H:i:s');
        
        ?>
    </body>
</html>

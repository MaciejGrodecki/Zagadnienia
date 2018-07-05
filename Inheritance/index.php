<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'FamilyCar.php';
            
            $familyCar = new FamilyCar;
            $familyCar->start();
            echo '</br>';
            $familyCar->boost(10);
            echo '</br>';
            $familyCar->stop();
        ?>
        
        <p>
            <?php
                require_once 'Database.php';
                
                $database = new Database;
                $database->Connect();
                echo '</br>';
                $database->Disconnect();
            ?>
        </p>
    </body>
</html>

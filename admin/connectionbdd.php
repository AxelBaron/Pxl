    <?php
        $hote ="localhost";
        $usager ="root";
        $mdp = "root";
        $base = "tim_pefceq314";
        $dns = "mysql:dbname=".$base.';host='.$hote;
        $pdo= new PDO($dns, $usager, $mdp); 
    ?>
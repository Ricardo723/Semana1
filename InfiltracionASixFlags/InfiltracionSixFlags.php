<?php
    $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "") ?$_POST["nombre"] : "no especificado";

    $apellidos = (isset($_POST["apellidos"]) && $_POST["apellidos"] != "") ?$_POST["apellidos"] : "no especificado";

    $edad = (isset($_POST["edad"]) && $_POST["edad"] != "") ?$_POST["edad"] : "no especificado";

    $direccion = (isset($_POST["direccion"]) && $_POST["direccion"] != "") ?$_POST["direccion"] : "no especificado";

    $numboletos = (isset($_POST["numboletos"]) && $_POST["numboletos"] != "") ?$_POST["numboletos"] : "no especificado";
    
    $tipodeboleto = (isset($_POST["tipodeboleto"]) && $_POST["tipodeboleto"] != "") ?$_POST["tipodeboleto"] : "no especificado";

    if ($numboletos < 1){
        echo "<strong><h2>Has ingresado una cantidad invalida de boletos. Intenta de nuevo.<h2/><strong/>";
    }
    
    if ($numboletos > 15){
        echo "<strong><h2>El número máximo de boletos es 15. Intenta de nuevo.<h2/><strong/>";
    
    }


    if($numboletos > 0 && $numboletos<16)
    {
        switch ($tipodeboleto)
        {
            case "Normal":
                for($i=0; $i<$numboletos; $i++)
                {
                    echo "<table border=\"2\>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th colspan=\"4\"><b></b></th>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"4\"><b><h1><center>SIX FLAGS</center><h1></b></td>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td rowspan=\"4\"><img src=\"https://imgs.search.brave.com/Hp2C_GGRNmbmc9SEwHXxulqAH-U7vaGjGahVRVgzDlc/rs:fit:480:360:1/g:ce/aHR0cHM6Ly9pLnl0/aW1nLmNvbS92aS9l/aXctc012MEhJSS9o/cWRlZmF1bHQuanBn\" alt=\"nub\" width=\"178\" height=\"170\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$numboletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Ni te va a dar tiempo de subirte a los juegos</td>";
                            echo "</tr>";
                        echo "</body>";
                    echo "</table>";
                    echo "<br>";
                }
            break;

            case "Niño":
                for($i=0; $i<$numboletos; $i++)
                {
                    echo "<table border=\"2\>";
                        echo "<thead>";
                        echo "<tr>";
                            echo "<th colspan=\"4\"><b></b></th>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td colspan=\"4\"><b><h1><center>SIX FLAGS</center><h1></b></td>";
                        echo "</tr>";
                    echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td rowspan=\"4\"><img src=\"https://imgs.search.brave.com/tIj9Y6qJ2x3TuP7-no_2N1L8R8JgsLMxp05nfoVLIMo/rs:fit:900:600:1/g:ce/aHR0cHM6Ly93d3cu/bGF0ZXJjZXJhLmNv/bS9yZXNpemVyL1pR/bk5pS1pxUDNOOWhF/NEYxSkpnT0Fib1ZG/WT0vOTAweDYwMC9z/bWFydC9hcmMtYW5n/bGVyZmlzaC1hcmMy/LXByb2QtY29wZXNh/LnMzLmFtYXpvbmF3/cy5jb20vcHVibGlj/LzdNSFRQQTJWUlZF/N1JQUzU2Q0E3QjZB/VlU0LmpwZw\" alt=\"nub\" width=\"178\" height=\"170\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$numboletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Mucha suerte...</td>";
                            echo "</tr>";
                        echo "</body>";
                    echo "</table>";
                    echo "<br>";
                }
            break;
            
            case "Estudiante":
                for($i=0; $i<$numboletos; $i++)
                {
                    echo "<table border=\"2\>";
                        echo "<thead>";
                        echo "<tr>";
                            echo "<th colspan=\"4\"><b></b></th>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td colspan=\"4\"><b><h1><center>SIX FLAGS</center><h1></b></td>";
                        echo "</tr>";
                    echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td rowspan=\"4\"><img src=\"https://imgs.search.brave.com/7H8zzdIYC_H-kRXZcS3dgYc-V8Nd6DQOFq-RsX76sYM/rs:fit:400:450:1/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vNzM2/eC80OC8yNC85MS80/ODI0OTFhNTE4MjE0/NWZiMGY4NmIyNzhi/ZGE1YjE1YS5qcGc\" alt=\"nub\" width=\"178\" height=\"170\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$numboletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Mejor vete a estudiar</td>";
                            echo "</tr>";
                        echo "</body>";
                    echo "</table>";
                    echo "<br>";
                }
            break;

            case "Flash Pass":
                for($i=0; $i<$numboletos; $i++)
                {
                    echo "<table border=\"2\>";
                        echo "<thead>";
                        echo "<tr>";
                            echo "<th colspan=\"4\"><b></b></th>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td colspan=\"4\"><b><h1><center>SIX FLAGS</center><h1></b></td>";
                        echo "</tr>";
                    echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td rowspan=\"4\"><img src=\"https://imgs.search.brave.com/iS2LkK4nZgR1sbxu_lahL2KVGryRXQhWhjUXdrROad0/rs:fit:480:360:1/g:ce/aHR0cHM6Ly9pLnl0/aW1nLmNvbS92aS93/Y0JiT2YyYUg3Zy9o/cWRlZmF1bHQuanBn\" alt=\"nub\" width=\"178\" height=\"170\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$numboletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">A ti si te va a dar tiempo de subierte</td>";
                            echo "</tr>";
                        echo "</body>";
                    echo "</table>";
                    echo "<br>";
                }
            break;

            case "Adulto mayor":
                for($i=0; $i<$numboletos; $i++)
                {
                    echo "<table border=\"2\>";
                        echo "<thead>";
                        echo "<tr>";
                            echo "<th colspan=\"4\"><b></b></th>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td colspan=\"4\"><b><h1><center>SIX FLAGS</center><h1></b></td>";
                        echo "</tr>";
                    echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td rowspan=\"4\"><img src=\"https://imgs.search.brave.com/sJK4gAWobBCMIihm46X8ah3TldS39A5mxXk9NfAw0zI/rs:fit:1152:864:1/g:ce/aHR0cHM6Ly9mLnJw/cC1ub3RpY2lhcy5p/by8yMDE5LzA1LzAx/Lzc4NDQxNDAzMGJh/MDJiLTkzMWYtNGYx/YS05MzkyLTAzMGRj/MDVkYzNhM2pwZy5q/cGc\" alt=\"nub\" width=\"178\" height=\"150\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$numboletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Ya sientese señora</td>";
                            echo "</tr>";
                        echo "</body>";
                    echo "</table>";
                    echo "<br>";
                }
            break;

            case "VIP":
                for($i=0; $i<$numboletos; $i++)
                {
                    echo "<table border=\"2\>";
                        echo "<thead>";
                        echo "<tr>";
                            echo "<th colspan=\"4\"><b></b></th>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td colspan=\"4\"><b><h1><center>SIX FLAGS</center><h1></b></td>";
                        echo "</tr>";
                    echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td rowspan=\"4\"><img src=\"https://imgs.search.brave.com/TmlarliZyBr_1jfrCmMEyocmT_IBnnwr4bnOlegVbRg/rs:fit:1200:720:1/g:ce/aHR0cHM6Ly9pLnl0/aW1nLmNvbS92aS9V/bnQxblFNU0MxUS9t/YXhyZXNkZWZhdWx0/LmpwZw\" alt=\"nub\" width=\"178\" height=\"170\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$numboletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">No presumas</td>";
                            echo "</tr>";
                        echo "</body>";
                    echo "</table>";
                    echo "<br>";
                }
            break;
        }
    }
?>
<?php
    $pessoas = ["jorge", "max", "joão", "kaitana"];

    function listar_pessoas($pessoas) {
        if (count($pessoas) > 0) {
            $i = 0;
            foreach ($pessoas as $pessoa) {
                echo $i + 1 . " - " . $pessoa . "<br>";
                $i++;
            }
        }
    }

listar_pessoas($pessoas);

?>
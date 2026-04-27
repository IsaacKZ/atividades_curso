<?php
    $pessoas = ["jorge", "max", "joão", "kaitana"];

    function listar_pessoas($pessoas) {
        if (count($pessoas) > 0) {
            foreach ($pessoas as $pessoa) {
                echo $pessoa;
            }
        }
    }
?>
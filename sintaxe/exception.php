<?php
    function divisao($dividendo, $divisor){
        try{
            if($divisor == 0){
                throw new RangeException('O número não pode ser dividido por zero');
            }
            
            $result = $dividendo / $divisor;
            echo "O resultado é: $result";
        } catch(Exception $e){
            echo $e->getMessage();
        } finally{
            echo "\nTratando exceções";
        }
        
    }

    divisao(10, 0);
?>
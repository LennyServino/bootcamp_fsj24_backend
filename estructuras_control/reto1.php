<?php
    function createMagicPotion($potions, $target) {
        $length = count($potions);
        
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                if ($potions[$i] + $potions[$j] === $target) {
                    return [$i, $j];
                }
            }
        }
        
        return "null"; // Devuelve null si no se encuentra ninguna combinación
    }
    // Pintando
    $potions = [1, 2, 3, 4];
    $target = 5;
    print_r(createMagicPotion($potions, $target)); // Devuelve 0
?>
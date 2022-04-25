function solution($A) {
    $com = array_flip($A); 
    $missing = 1;
    
    for ($i = 0; $i < sizeof($A); $i++) {
        // Check number exists
        if (!isset($com[$missing])) break;
        $missing++;
    }
    
    return $missing;
}

function solution($A) {
    // write your code in PHP7.0
$flip = array_flip($A);
$counted_flip = count($A);
$missing = 1;
    for($i=0; $i<$counted_flip; $i++){
//check for the missing element
        if(!isset($flip[$missing])) 
        break;
$missing++;
              
     
    }
       return $missing;
}

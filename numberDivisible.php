
// number divisbe by 3

<?php
    function find($list){
        $total = 0;
        foreach($list as $num){
            if($num >= 300){
                return 0;
            }
            elseif($num%3 == 0){
                $total++;
            }
        }
        return $total;
    }
    
    $list = array(0, 3, 6, 9, 12);
    $total = find($list);
    
    echo "total numbers divisible by 3 are " . $total;
    
?>
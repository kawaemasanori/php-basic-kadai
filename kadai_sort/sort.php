<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        
        function narabikae($order){
          $nums = [15, 4, 18, 23, 10 ];
         
          if($order === TRUE){
            sort($nums);
            echo '昇順にソートします。<br>';
            }else{
              rsort($nums);
              echo '降順にソートします。<br>';
            }
            foreach($nums as $value){
            echo "$value <br>";
          }
          
            
        }
        narabikae(TRUE);
        narabikae(FALSE);
        ?>
    </p>
</body>

</html>

<?php
$list = array("id"=>1, 2, 3, 4, 5);
$list2 = ["Hello", "From","PHP", 4, 5];
$countries = ["Nigeria", "Ghana", "Kenya", "Uganda"];
echo $list["id"]; // 1 
echo $list2[2];  // PHP 
echo count($list); // 5
foreach($list as $index =>$value){
  echo "$index: =>$value\n"; // id: =>1 0: =>2 1: =>3 2: =>4 3: =>5
}
foreach($countries as $country): ?>
  <li><?php echo $country; ?></li>
<?php endforeach;  
//<li>Nigeria</li>
//<li>Ghana</li>
//<li>Kenya</li>
//<li>Uganda</li>
?>
<form method="post">
	<input id="n" name="n" type="text" />
<select name="sel">
  <option value="1">Iteracja</option>
  <option value="2">Rekurencja</option>
  <option value="3">Pamiec</option>
</select>
	<input type="submit" value="oblicz"/>

</form> 
<?php
$liczba = $_POST["n"];
$selekcja = $_POST["sel"];
function fibite($n)
{
$z=0;
$p=1;
$i=1;
$w=0;
while($i<$n)
{ 
	$w = $z+$p;
	
	$z=$p;
	$p=$w;
    $i = $i+1;
}
return $w;
}
function fibrek($n)
{
	if($n==0)
	{
		return 0;
	}
	if($n==1)
	{
		return 1;
	}
return fibrek($n-2)+fibrek($n-1);
	
}
function fibpam($n)
{
	 static $cache;
       if($n==0)
	    {
		 return 0;
	    }
       if($n < 2) 
        {
         return 1;
        }
       else 
        {
           if (!is_null($cache) && array_key_exists($n, $cache) ) {
            // return value from cache
            return $cache[$n];
        } else {
            // store in cache and return value
            $cache[$n] = fibpam($n - 2) + fibpam($n - 1);
            return $cache[$n];
        }
       }
}

if(isset($liczba) && is_numeric($liczba) && $liczba <=1000)
{
switch($selekcja)
   {
	case 1: echo $liczba." Wyraz Ciągu to : ".fibite($liczba);
	break;
	case 2: echo $liczba." Wyraz Ciągu to : ".fibrek($liczba);
	break;
	case 3: echo $liczba." Wyraz Ciągu to : ".fibpam($liczba);
	break;
}
}

?>

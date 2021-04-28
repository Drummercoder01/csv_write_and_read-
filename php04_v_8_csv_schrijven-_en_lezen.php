<?php
$_output = "<h2>Nog een lijstje.</h2>";

$_content = array(
"Micky,De Pauw,Schoten,België",
"Anita,Verresen,Schoten,België",
"Karin,Villez,Schilde,België",
"Koen,Villez,Brasschaat,België"
);

$_pointer = fopen("test6.csv", "r+b");

foreach ($_content as $_line)
{
	fputcsv($_pointer, explode(',',$_line));
}

rewind($_pointer);

while(! feof($_pointer))
{
	
	list($_vNaam, $_aNaam, $_gemeente, $_land)=fgetcsv($_pointer);
	
	if($_vNaam != "")
	{
		$_output.="$_vNaam $_aNaam uit $_gemeente in $_land<br>";
	}
}

fclose($_pointer);

echo $_output;
	
	
?>
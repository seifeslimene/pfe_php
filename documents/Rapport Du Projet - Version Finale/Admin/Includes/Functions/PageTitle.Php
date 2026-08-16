<?php
function PageTitle()
{
Global $title;
if ((isset($title)) AND (!empty($title)))
{
$tarray = str_split($title);
$c = count($tarray);
$carex = 0;
for ($i = 0 ; (($i < $c) AND ($carex == 0)) ; $i++)
{
if ($tarray[$i] != " ")
{
$carex++;
}
}
if ($carex == 1)
{
echo $title;
}
else
{
echo "No Title";
}
}
else
{
echo "No Title";
}
}
?>
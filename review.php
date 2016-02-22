<? php
//declare
$mainsquad = ["jason", "tina"];
$characters = array();
$characters[] = "Ryu";
array_push($characters, "Megaman");
array_push($characters, "Pikachu");
array_splice($characters, 2, 0, "Bob");

//multidimensional arrays
$mainsquad[]=$characters;
echo($mainsquad[2][1]);
//iterate
$countofchar = count($characters);
for ($i = 0; $i <= $countofchar; $i++) {
    array_push($mainsquad, $kids[$i];)
}
//print
//var_dump($characters);
//associative arrays

$extendedsquad = ["Nathan" => "Drake",
    "Lara" => "Croft",
    "Super" = "Man"
];
unset($extendedsquad["Super"]);
$extendedsquad["Super"] = "man";

foreach ($extendedsquad as $member=>$name)
{
    echo $member . ": " $name;
    echo <br>;
}


/?>

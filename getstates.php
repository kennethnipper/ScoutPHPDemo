<?php

$StatesJSON = file_get_contents("http://services.groupkt.com/state/get/USA/all");
//echo $StatesJSON;
$JSONObject = json_decode($StatesJSON);
foreach ($JSONObject as $key => $value) {
    echo($key);
}
// foreach($JSONObject as $object)	
// {
//     $result[]=$object{'abbr'};
// }
// foreach($state as $result[])
// {
//     echo($state);
// }
?>
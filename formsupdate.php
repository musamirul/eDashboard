<?php
include'db.php';

$request = $_REQUEST;

    $id_oncall = $request['id_oncall'];

    $anaethetist = $request['anaethetist'];
    $cardiac = $request['cardiac'];
    $cardiologist = $request['cardiologist'];
    $earnose = $request['earnose'];
    $gsurgeon = $request['gsurgeon'];
    $gphysician = $request['gphysician'];
    $nephrologist = $request['nephrologist'];
    $gastroentologist = $request['gastroentologist'];
    $neurosurgeon = $request['neurosurgeon'];
    $obstretrician = $request['obstretrician'];
    $ophtalmologist = $request['orthopaedic'];
    $paediatrician = $request['paediatrician'];
    $plasticsurgeon = $request['plasticsurgeon'];
    $urologist = $request['urologist'];
    $psychiatrist = $request['psychiatrist'];

    $sql = "UPDATE oncall SET anaethetist='".$anaethetist."', cardiac='".$cardiac."', cardiologist='".$cardiologist."', earnose='".$earnose."', gsurgeon='".$gsurgeon."', gphysician='".$gphysician."',  nephrologist='".$nephrologist."', gastroentologist='".$gastroentologist."',  neurosurgeon='".$neurosurgeon."', obstretrician='".$obstretrician."', orthopaedic='".$orthopaedic."', paediatrician='".$paediatrician."', plasticsurgeon='".$plasticsurgeon."', urologist='".$urologist."', psychiatrist='".$psychiatrist."' WHERE id_oncall='".$id_oncall."' ";

    if($mysqli->query($sql)){
      echo "Consultant has been sucessfully update.";
    } else {
      return "Error:" .$sql. "<br" .$mysqli->error;
    }
?>
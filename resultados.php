<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $respVis1 = isset($_POST['visual1'])? $_POST['visual1']: null;
    $respVis2 = isset($_POST['visual2'])? $_POST['visual2']: null;
    $respVis3 = isset($_POST['visual3'])? $_POST['visual3']: null;
    $respVis4 = isset($_POST['visual4'])? $_POST['visual4']: null;
    $respVis5 = isset($_POST['visual4'])? $_POST['visual5']: null;
    $respVis6 = isset($_POST['visual5'])? $_POST['visual6']: null;

    $respkin1 = isset($_POST['kine1'])? $_POST['kine1']: null;
    $respkin2 = isset($_POST['kine2'])? $_POST['kine2']: null;
    $respkin3 = isset($_POST['kine3'])? $_POST['kine3']: null;
    $respkin4 = isset($_POST['kine4'])? $_POST['kine4']: null;
    $respkin5 = isset($_POST['kine5'])? $_POST['kine5']: null;
    $respkin6 = isset($_POST['kine6'])? $_POST['kine6']: null;

    $respaud1 = isset($_POST['audi1'])? $_POST['audi1']: null;
    $respaud2 = isset($_POST['audi2'])? $_POST['audi2']: null;
    $respaud3 = isset($_POST['audi3'])? $_POST['audi3']: null;
    $respaud4 = isset($_POST['audi4'])? $_POST['audi4']: null;
    $respaud5 = isset($_POST['audi5'])? $_POST['audi5']: null;
    $respaud6 = isset($_POST['audi6'])? $_POST['audi6']: null;

    $puntajev = $respVis1 + $respVis2 + $respVis3 + $respVis4 + $respVis5 + $respVis6;
    $puntajek = $respkin1 + $respkin2 + $respkin3 + $respkin4 + $respkin5 + $respkin6;
    $puntajea = $respaud1 + $respaud2 + $respaud3 + $respaud4 + $respaud5 + $respaud6;

    $puntm = 6*4;

    $porcv = ($puntajev/$puntm)*100;
    $porck = ($puntajek/$puntm)*100;
    $porca = ($puntajea/$puntm)*100;

    $mpunt = max($puntajev, $puntajek, $puntajea);

    if ($mpunt == $puntajev) {
        $tipoap = "Visual";
    }elseif ($mpunt == $puntajek) {
        $tipoap = "Kinestésico";
    }else{
        $tipoap = "Auditivo";
    }

    echo "<h2> Resultados del test: </h2>";
    echo "<p> <strong> Tipo de aprendizaje princpal: </strong> $tipoap </p>";
    echo "<p> <strong> Visual: </strong> $porcv% de afinidad. </p>";
    echo "<p> <strong> Kinestésico: </strong> $porck% de afinidad. </p>";
    echo "<p> <strong> Auditivo: </strong> $porca% de afinidad. </p>";
}

?>

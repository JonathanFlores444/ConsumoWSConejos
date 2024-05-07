<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $params = array(
        'p' => $_GET['p'],
        'nPar' => $_GET['nPar'],
        'nCri' => $_GET['nCri'],
        'tMor' => $_GET['tMor']
    );

    $url = 'http://localhost:3000/conejos?' . http_build_query($params);
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    for ($i = 0; $i < count($data); $i++) {
    $resultados = $data[$i];
    for ($j = 0; $j < count($resultados); $j++) {
        $resultado = $resultados[$j];
        echo $resultado['nombre'] . ': ' . $resultado['valor'] . '<br>';
    }
    echo '<br>';
}

}
?>

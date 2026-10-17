<?php
declare(strict_types=1);

define('SEMILLA_LAB8', 'WEB2026-L8');
const LAB_NUMERO = 8;

require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();


$huella = hash('sha256', $est['cedula'] . '|' . SEMILLA_LAB8);
$codigo = substr($huella, 0, 8);
$n1 = hexdec(substr($huella, 8, 2)) % 90 + 10;
$n2 = hexdec(substr($huella, 10, 2)) % 90 + 10;
$precio = round(hexdec(substr($huella, 12, 4)) / 100, 2);
$activo = ($n1 % 2 == 0);

$suma = $n1 + $n2;
$division = round($n1 / $n2, 2);
$resto = $n1 % $n2;
$cociente = intdiv($n1, $n2);

$nulo = null;
$lista = [1, 2, 3];

var_dump($codigo, $n1, $precio, $activo, $nulo, $lista);

// El + fuerza a PHP a convertir los strings en números para sumarlos
$suma_str = "5" + "10";

// El punto es para concatenación así que une los textos en lugar de sumar 
$concat = "5" . "10";

// Al convertir a entero con (int) PHP solo lee la parte numérica del inicio e ignora las letras que siguen
$cast_int = (int) "12abc";

// Da false porque los decimales en la PC no son exactos binario
$float_eq = (0.1 + 0.2 == 0.3);

// Da true porque con == es comparación y  PHP convierte ambos a números '1e1' es notación científica de 10 así que son iguales
$loose = ("10" == "1e1");

// Da false porque con ===  no convierte, Compara los tal cual y '10' no es igual al string '1e1'.
$strict = ("10" === "1e1");


$resultado = [
    'codigo'    => $codigo,
    'n1'        => $n1,
    'n2'        => $n2,
    'suma'      => $suma,
    'division'  => $division,
    'resto'     => $resto,
    'cociente'  => $cociente,
    'precio'    => $precio,
    'activo'    => $activo,
    'tipos'     => [
        'codigo' => gettype($codigo),
        'n1'     => gettype($n1),
        'precio' => gettype($precio),
        'activo' => gettype($activo),
        'nulo'   => gettype($nulo),
        'lista'  => gettype($lista)
    ],
    'juggling'  => [
        'suma_str' => $suma_str,
        'concat'   => $concat,
        'cast_int' => $cast_int,
        'float_eq' => $float_eq,
        'loose'    => $loose,
        'strict'   => $strict
    ],
    'constantes' => [
        'SEMILLA_LAB8' => constant('SEMILLA_LAB8'),
        'LAB_NUMERO'   => LAB_NUMERO,
        'redefinir'    => @define('SEMILLA_LAB8', 'otra')
    ]
];

echo "\n##JSON## " . json_encode($resultado) . "\n";
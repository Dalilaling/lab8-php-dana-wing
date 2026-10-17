# Reflexión (Etapa 4)

Responde con tus palabras (mínimo 40 palabras por respuesta). Ver README, Etapa 4.

## Pregunta 1
Mi código personal es "9cc3d5f2". Si uso `gettype` para ver qué tipo de dato es, me dice que es un "string", o sea, un texto. Esto pasa porque la función `substr`, que usé para sacar los primeros 8 caracteres del hash, siempre devuelve texto, ya que solo recorta una parte de una cadena. Si intentara sumar ese código con un número, PHP lo tomaría como cero porque empieza con letras, y la suma me daría mal, además de que probablemente saldría una advertencia en pantalla


## Pregunta 2
Cuando uso `gettype` en mi variable `$precio`, me aparece como "double" y no como "float". Esto es solo por cómo PHP maneja los decimales desde hace tiempo, pero en la práctica es lo mismo. Lo de `0.1 + 0.2 == 0.3` me dio falso porque la computadora no puede guardar esos decimales de forma exacta en binario, y queda una diferencia chiquita que no se ve pero hace que no sean iguales. Mi `$n1` es "integer" (entero). La diferencia que vi es que `intdiv` solo te da el número entero de la división, sin decimales, en cambio el símbolo `/` siempre te regresa un decimal

## Pregunta 3
Lo que entendí es que `define()` es como una función normal que corre cuando el script está andando, y `const` solo  se define al principio. Cuando quise cambiar el valor de la constante con `@define`, me devolvió `false`. Esto es porque una vez que creas una constante en PHP ya no se puede cambiar. Yo estoy usando PHP 8.3.30 con el servidor Apache de MAMP, y en mi caso simplemente me dio falso en lugar de mandarme un error 
# Reflexión - Laboratorio 8



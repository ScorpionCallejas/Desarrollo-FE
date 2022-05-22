<?php require("../layout/head.php") ?>
<!-- Etiquetas meta y titulo de la página -->
<title> Qué es CSS </title>
<?php require("../layout/nav.php") ?>
<?php require("../layout/aside-time.php") ?>
<!-- Contenido del main -->
<h1 class="title">¿Qué es CSS?</h1>
<p class="text">
    CSS (Cascading Style Sheets) es lo que se denomina lenguaje de hojas de estilo en cascada y se usa para estilizar elementos escritos en un lenguaje de marcado como HTML. CSS separa el contenido de la representación visual del sitio.
    <br>
    CSS fue desarrollado por W3C (<a href="https://www.w3.org/" class="link" target="_blank"> World Wide Web Consortium </a>) en 1996 por una razón muy sencilla. HTML no fue diseñado para tener etiquetas que ayuden a formatear la página. Está hecho solo para escribir el marcado para el sitio.
    <br>
    Se incluyeron etiquetas como &lt;font&gt; en HTML versión 3.2, y esto les causó muchos problemas a los desarrolladores. Dado que los sitios web tenían diferentes fuentes, fondos de colores y estilos, el proceso de reescribir el código fue largo, doloroso y costoso. Por lo tanto, CSS fue creado por W3C para resolver este problema.
    <br>
    La relación entre HTML y CSS es muy fuerte. Dado que HTML es un lenguaje de marcado (es decir, constituye la base de un sitio) y CSS enfatiza el estilo (toda la parte estética de un sitio web), van de la mano.
    <br>
    CSS no es técnicamente una necesidad, pero no querrás tener un sitio que solo tenga HTML, ya que se vería completamente desnudo.
</p>
<h2 class="subtitle">Ventajas</h2>
<ol class="text">
    <li>
        La diferencia entre un sitio web que implementa CSS y uno que no, es enorme y definitivamente se nota.
    </li>
    <li>
        Quizás hayas visto algún sitio web que no se puede cargar por completo y tiene un fondo blanco con la mayor parte del texto en azul y negro. Eso significa que la parte CSS del sitio no se cargó correctamente o no existe.
    </li>
    <li>
        Así es como se ve un sitio con solo HTML, y creo que estarás de acuerdo conmigo en que no luce muy bien.
    </li>
    <li>
        Antes de CSS, todo el estilo debía incluirse en el marcado HTML. Esto significa que había que describir por separado todos los fondos, los colores de fuente, las alineaciones, etc.
    </li>
    <li>
        CSS permite estilizar todo en un archivo diferente, creando el estilo allí y después integrando el archivo CSS sobre el marcado HTML. Esto hace que el marcado HTML sea mucho más limpio y fácil de mantener.
    </li>
</ol>
<h2 class="subtitle">Funcionamiento</h2>
<p class="text">
    CSS utiliza una sintaxis simple basada en el inglés con un conjunto de reglas que la gobiernan. Como mencionamos anteriormente, HTML no fue hecho con la intención de utilizar elementos de estilo, sino solo para el marcado de la página. Fue creado simplemente para describir el contenido. Por ejemplo: &lt;p&gt;.&gt;Esto es un párrafo.&lt;/p&gt;.
    <br>
    Pero, ¿cómo le aplicas un estilo al párrafo? La estructura de sintaxis CSS es bastante simple. Cuenta con un selector y un bloque de declaración. Primero seleccionas un elemento y luego declaras lo que quieres hacer con él. Bastante sencillo, ¿verdad?
    <br>
    Sin embargo, hay reglas que debes recordar. Las reglas de la estructura son bastante simples, así que no te preocupes.
    <br>
    El selector apunta al elemento HTML que deseas estilizar. El bloque de declaración contiene una o más declaraciones separadas por punto y coma.
    <br>
    Cada declaración incluye un nombre de propiedad CSS y un valor, separados por dos puntos. Una declaración CSS siempre termina con un punto y coma, y ​​los bloques de declaración están rodeados por llaves.
</p>
<p class="text">
    Articulo de <a href="https://www.hostinger.mx/tutoriales/que-es-css" class="link" target=_blank>Hostinger Turoriales</a>
</p>
<?php require("../layout/aside-secundary.php") ?>
<?php require("../layout/footer.php") ?>
<?php require("../layout/head.php") ?>
<!-- Etiquetas meta y titulo de la página -->
<title> Qué es HTML </title>
<?php require("../layout/nav.php") ?>
<?php require("../layout/aside-time.php") ?>
<!-- Contenido del main -->
<h1 class="title">¿Qué es HTML?</h1>
<img src="/assets/images/img-post/img-html.webp" alt="" class="float-right">
<p class="text">
    HTML (HyperText Markup Lenguage), como su nombre lo dice, html es un lenguaje de marcado de hipertexto, lo cual quiere decir que sirve de mucha utilidad al momento de trabajar de lado del navegador, ya que todos, sin excepción alguna, logran soportar este grandioso lenguaje. Pero te preguntaras, ¿Qué es lo que verdaderamente hace y porque es tan util su funcionamiento?, pues este se encarga de realizar la parte estructural de una página web, agregando así: <span class="bold"> Texto, Imagenes, Tablas, Formularios, etc</span>, justo lo que vemos al ingresar a sitios como Google, Wikipedia, YouTube, entre otras mas páginas que utilizamos atraves de nuestra navegación por la internet.
</p>
<h2 class="subtitle subtitle-post">Historia de HTML</h2>
<p class="text">
    Los inicios de HTML se deben a <a href="http://www.w3.org/People/Berners-Lee/" class="link">Tim Berners-Lee</a> cuando trabajaba en el CERN (Centro Europeo de Investigación Nuclear). Y es que estando como trabajador del CERN se encontró con la problemática de poder facilitar el acceso a la información con la que trabajaban desde cualquier ordenador del centro o de otras instituciones que trabajaban con ellos.<br>
    Buscaban una forma sencilla y estándar de acceder a toda la información. Es en ese momento cuando nace el protocolo HTTP (hypertext transfer protocol) y las páginas HTML.<br>
    Además ideó que las páginas estarían unidas entre sí, estarían enlazadas. Era el concepto de hipertexto.<br>
    Para la definición del estándar HTML, <a href="http://www.w3.org/People/Berners-Lee/" class="link">Tim Berners-Lee</a> se basó en el lenguaje de marcado SGML (Standard General Markup Language). Este lenguaje define reglas de etiquetado y estructura generales. A partir de SGML se han definido lenguajes como HTML, Postscript, RTF.<br>
    Tras tener el desarrollo del sistema de Hipertexto interno, Tim Berners-Lee lo presentó a una convocatoria para desarrollar el sistema Hipertexto en Internet junto con el ingeniero de sistemas <a href="http://public.web.cern.ch/public/en/people/Cailliau-en.html" class="link">Robert Cailliau</a>. La propuesta que presentaron la llamaron World Wide Web (W3).
</p>
<h2 class="subtitle subtitle-post">Funcionamiento</h2>
<p class="text">
    Este lenguaje tiene una sintaxis sencilla de aprender pero a la vez bastante completa ya que funciona con etiquetas de apertura(<code>&lt;&gt;</code>) y de cierre(<code>&lt;/&gt;</code>), las cuales a su vez pueden contener atributos y parametros, ya sea para cambiar su diseño, colocarle alguna funcionalidad en especifico, entre otras mas cosas que se pueden hacer con ello.<br>
    Esto nos a permitido:
    <ul class="text">
        <li>Poder realizar trabajos inimaginables en la web.</li>
        <li>Compartir conocimiento.</li>
        <li>Darle solución a muchos problemas.</li>
        <li>Tener entretenimiento digital al alcance de nuestras manos.</li>
    </ul>
</p>
<p class="text">
    Como vez es lo suficientemente útil para nuestra vida digital y para el progreso de la humanidad en la era digital.
</p>
<h2 class="subtitle subtitle-post">Estructura básica</h2>
<pre>
    <code>
&lt;!DOCTYPE html&gt;
&lt;html lang="es"&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
&lt;title&gt; Titulo de la página &lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
Estructura básica de HTML
&lt;/body&gt;
&lt;/html&gt;
    </code>
</pre>
<p class="text">
    Puede parecer algo un poco complicado pero no es asi, cada etiqueta cumple con una útil función para su mejor funcionamiento. Para entender mejor esta estructura vamos por partes:
    <dl class="text">
        <dt><code>&lt;!DOCTYPE html&gt;</code></dt>
        <dd>Define que el texto esta escrito en el lenguaje html.</dd>
        <dt><code>&lt;html lang="es"&gt;</code></dt>
        <dd>
            Con esta etiqueta comienzas a escribir en formato html, tambien con el atributo lang="es" das a entender que la página se encuentra en español.
        </dd>
        <dt><code>&lt;head&gt;</code></dt>
        <dd>
            Dentro de esta etiqueta colocamos todos los metadatos para su mayor funcionamiento, el titulo de la página, enlaces hacia hojas de estilos, etc.
        </dd>
        <dt><code>&lt;meta&gt;</code></dt>
        <dd>Aqui se colocan los metadatos.</dd>
        <dt><code>&lt;title&gt;</code></dt>
        <dd>Se coloca el titulo de la página.</dd>
        <dt><code>&lt;body&gt;</code></dt>
        <dd>
            Dentro de esta etiqueta se coloca todos los componentes y elementos que se mostraran en la página.
        </dd>
    </dl> 
</p>
<p class="text">
    Mas aparte de estas existen cientas y cientas de etiquetas con sus respectivos parametros y atributos. Si quieres conocer más acerca de todas ellas, ve al enlace siguiente:<br><a href="#" class="link">Etiquetas de HTML</a>.
</p>
<?php require("../layout/aside-secundary.php") ?>
<?php require("../layout/footer.php") ?>
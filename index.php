<?php require("layout/head.php") ?>
<!-- Etiquetas meta y titulo de la página -->
<title> Front end </title>
<?php require("layout/nav.php") ?>
<?php require("layout/aside-time.php") ?>
<!-- Contenido del main -->
<section class="post_recents">
  <header class="row">
    <p class="col-8 d-flex align-items-center title">
      Publicaciones recientes
    </p>
  </header>
  <article class="card text-dark bg-light mb-3">
    <div class="row g-0">
      <div class="col-4">
        <a href="/post-html/que-es-html.php" class="container-img">
          <img
            src="/assets/images/img-post/img-html.webp"
            class="img-fluid rounded-start img-post"
            alt="..."
          />
        </a>
      </div>
      <div class="col-8">
        <div class="card-header">
          <h5 class="card-title">¿Qué es HTML?</h5>
        </div>
        <div class="card-body">
          <p class="card-text text">
            HTML (HyperText Markup Lenguage), como su nombre lo dice, html es un
            lenguaje de marcado de hipertexto, lo cual quiere decir que sirve de
            mucha utilidad al momento de trabajar de lado del navegador, ya que
            todos, sin excepción alguna, logran soportar este grandioso lenguaje
          </p>
          <p class="card-text">
            <small class="text-muted">
              Ultima modificación: 3:47pm - 12/05/2022
            </small>
          </p>
        </div>
      </div>
    </div>
  </article>
  <article class="card text-dark bg-light mb-3">
    <div class="row g-0">
      <div class="col-4">
        <a href="/post-css/que-es-css.php" class="container-img">
          <img
            src="/assets/images/img-post/img-css.webp"
            class="img-fluid rounded-start img-post"
            alt="..."
          />
        </a>
      </div>
      <div class="col-8">
        <div class="card-header">
          <h5 class="card-title">¿Qué es CSS?</h5>
        </div>
        <div class="card-body">
          <p class="card-text text">
          CSS (Cascading Style Sheets) es lo que se denomina lenguaje de hojas de estilo en cascada y se usa para estilizar elementos escritos en un lenguaje de marcado como HTML. CSS separa el contenido de la representación visual del sitio.
          </p>
          <p class="card-text">
            <small class="text-muted">
              Ultima modificación: 8:02pm - 19/05/2022
            </small>
          </p>
        </div>
      </div>
    </div>
  </article>
  <article class="card text-dark bg-light mb-3">
    <div class="row g-0">
      <div class="col-4">
        <a href="/post-javascript/que-es-javascript.php" class="container-img">
          <img
            src="/assets/images/img-post/img-js.webp"
            class="img-fluid rounded-start img-post"
            alt="..."
          />
        </a>
      </div>
      <div class="col-8">
        <div class="card-header">
          <h5 class="card-title">¿Qué es JavaScript?</h5>
        </div>
        <div class="card-body">
          <p class="card-text text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
            quam non. Accusantium impedit cumque vitae perferendis voluptates,
            provident perspiciatis obcaecati voluptate, dicta error laudantium
            corporis ipsum possimus, voluptatibus unde fuga.
          </p>
          <p class="card-text">
            <small class="text-muted">
              Ultima modificación: 4:30pm - 12/05/2022
            </small>
          </p>
        </div>
      </div>
    </div>
  </article>
  <article class="card text-dark bg-light mb-3">
    <div class="row g-0">
      <div class="col-4">
        <a href="/post-html/etiquetas-de-html.php" class="container-img">
          <img
            src="/assets/images/img-post/tags-html.webp"
            class="img-fluid rounded-start img-post"
            alt="..."
          />
        </a>
      </div>
      <div class="col-8">
        <div class="card-header">
          <h5 class="card-title">Etiquetas de HTML</h5>
        </div>
        <div class="card-body">
          <p class="card-text text">
            Las etiquetas son parte fundamental del lenguaje HTML las cuales te
            permiten desarrollar distintas cosas como crear una tabla, agregar
            imagenes o videos, crear formularios, entre más.
          </p>
          <p class="card-text">
            <small class="text-muted">
              Ultima modificación: 6:25pm - 12/05/2022
            </small>
          </p>
        </div>
      </div>
    </div>
  </article>
</section>
<?php require("layout/aside-secundary.php") ?>
<?php require("layout/footer.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="with=device-with, initial-scale=1, maximum-scale=1" />
  <title>PRUEBAS</title>
  <!-- <link rel="stylesheet" href="pruebas.css"> -->
  <link rel="stylesheet" href="bulma.css">
  <style>
    .flotnav {
      display: flex;
      width: 100%;
      background-color: #f18ba9;
      justify-content: center;
    }

    .main-nav {
      display: inline-flex;
      justify-content: center;
      background-color: #333;
      width: 900px;
    }

    .vinculo-nav {
      display: inline-block;
      position: relative;
      text-decoration: none;
      color: #f18ba9;
      padding: 30px;
      margin: 10px;
      background-color: brown;
    }
  </style>
</head>

<body>
  <div id="envoltorio">

    <header>
      <section class="hero is-medium is-info">
        <div class="hero-body">
          <p class="title">
            medium hero
          </p>
          <p class="subtitle">
            medium subtitle
          </p>
        </div>
      </section>
    </header>
    <div class="flotnav">
      <nav class="main-nav">
        <a class="vinculo-nav" href="#beneficios">beneficios</a>
        <a class="vinculo-nav" href="#trabajo-reciente">trabajo reciente</a>
        <a class="vinculo-nav" href="#alcance-de-trabajo">alcance</a>
        <a class="vinculo-nav" href="#precios">precios</a>
        <a class="vinculo-nav" href="#preguntas-frecuentes">preguntas frecuentes</a>
      </nav>
    </div>

    <main>
      <section id="beneficios" class="section is-medium beneficios has-background-warning">
        <h1 class="title">Beneficios</h1>
        <h2 class="subtitle">
          A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
        </h2>
      </section>
      <section id="trabajo-reciente" class="section is-medium trabajo-reciente has-background-dark">
        <h1 class="title">Trabajo reciente</h1>
        <h2 class="subtitle">
          A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
        </h2>
      </section>
      <section id="alcance-de-trabajo" class="section is-medium alcance has-background-primary">
        <h1 class="title">Alcance de Trabajo</h1>
        <h2 class="subtitle">
          A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
        </h2>
      </section>
      <section id="precios" class="section is-medium precios has-background-link">
        <h1 class="title">Alcance de Trabajo</h1>
        <h2 class="subtitle">
          A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
        </h2>
      </section>
      <section id="preguntas-frecuentes" class="section is-medium preguntas-frecuentes has-background-success">
        <h1 class="title">Alcance de Trabajo</h1>
        <h2 class="subtitle">
          A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
        </h2>
      </section>
    </main>

    <footer>
      <!-- contenido del futer -->
    </footer>
  </div>
</body>

</html>
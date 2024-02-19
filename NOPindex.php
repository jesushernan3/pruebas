<?php
  $prueba = $_SERVER['PHP_SELF']
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="with=device-with, initial-scale=1, maximum-scale=1"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />

    <title>titulo sitio</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        list-style-type: none;
        font-family: Roboto;
        text-decoration: none;
      }
      body {
        background-color: #eee;
      }

      header,
      main,
      footer {
        background: lightblue;
        margin: 20px;
        padding: 10px;
        border-radius: 10px;
      }
      header {
        min-height: 150px;
      }
      main {
        min-height: 400px;
      }
      footer {
        min-height: 200px;
      }
      .nav-bar {
        background: #ccc;
        padding: 10px;
        display: flex;
      }
      .nav-bar span {
        width: 20%;
      }
      .main-nav {
        display: flex;
        width: 80%;
      }
      .main-nav ul {
        display: flex;
        justify-content: space-evenly;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <header>
      <span>HEADER</span>
      <div class="nav-bar">
        <span>Nav-Bar</span>
        <nav class="main-nav">
          <ul>
            <li><a href="#">menu 1</a></li>
            <li><a href="#">menu 2</a></li>
            <li><a href="#">menu 3</a></li>
            <li><a href="#">menu 4</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <span>MAIN</span>
      <article>
      <H1>
        <?php
          echo $prueba;
        ?>
</H1>
      </article>
    </main>
    <footer>
      <span>FOOTER</span>
    </footer>
  </body>
</html>
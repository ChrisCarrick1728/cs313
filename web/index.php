<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/master.css">
    <script src="https://unpkg.com/jquery" charset="utf-8"></script>
    <script src="app.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <div class="link">
        <p><a href="assignment.php">Assignments</a></p>
      </div>

    </header>
    <section>
      <div class="container">
        <div class="center">
          <div class="name">
            <h2>Chris Carrick</h2>

          </div>
          <div class="img">
            <img class="decoration" src="img/SVG/decoration.svg" alt="">
            <img id="familyPic" src="img/familyPic.jpg" alt="Picture of the Carrick Family">
          </div>
          <div class="people">
            <p class="names">
              <span id="chris">Chris</span>,
              <span id="Lindsay">Lindsay</span>,
              <span id="Tyler">Tyler</span>,
            </p>
            <p class="names">
              <span id="Caleb">Caleb</span>,
              <span id="Clara">Clara</span> &
              <span id="Andy">Andy</span>
            </p>
            <p class="hint">Hint: Hover over names to see who's who.</p>
          </div>

        </div>
      </div>

    </section>
    <footer>
      <?php echo date("F d Y, g:i A T") ?>
    </footer>
  </body>
</html>

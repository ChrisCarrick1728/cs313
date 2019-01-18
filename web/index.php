<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Chris Carricks Homepage</title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <script src="https://unpkg.com/jquery" charset="utf-8"></script>
    <script src="/js/app.js" charset="utf-8"></script>
  </head>
  <body>
    <?php include "components/header.php" ?>
    <section>
      <div class="container">
        <div class="center">
          <div class="name">
            <h2>Carrick Family</h2>
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
              <span id="Caleb">Caleb</span>,
              <span id="Clara">Clara</span> &
              <span id="Andy">Andy</span>
            </p>
            <p class="hint">Hint: Hover over names to see who's who.</p>
          </div>

        </div>
      </div>
    </section>
    <?php include "components/footer.php" ?>
  </body>
</html>

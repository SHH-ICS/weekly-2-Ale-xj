<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circle Calculator</title>
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-light_blue.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Circle Area & Circumference</span>
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>

    <main class="mdl-layout__content">
      <div class="page-content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--5-col mdl-cell--3-offset">
            <h4>Enter Circle Diameter</h4>
            <form action="" method="POST">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="number" id="circle-diameter" name="diameter" required>
                <label class="mdl-textfield__label" for="circle-diameter">Diameter</label>
              </div>
              <br>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                Calculate
              </button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $diameter = $_POST['diameter'];

              if ($diameter > 0) {
                $radius = $diameter / 2;
                $area = pi() * pow($radius, 2);
                $circumference = 2 * pi() * $radius;

                echo "<h5>Results:</h5>";
                echo "<p>Diameter: $diameter units</p>";
                echo "<p>Area: " . round($area, 2) . " square units</p>";
                echo "<p>Circumference: " . round($circumference, 2) . " units</p>";
              } else {
                echo "<p>Please enter a valid diameter.</p>";
              }
            }
            ?>
          </div>
        </div>
      </div>
    </main>
  </div>

</body>

</html>

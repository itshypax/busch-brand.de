<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Willkommen bei Busch & Brand</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/style.min.css" />
  <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="assets/fonts/ptsans/css/all.min.css" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/favicon.ico" />
  <!-- Metas -->
  <meta name="theme-color" content="#019afd" />
  <meta property="og:site_name" content="Busch & Brand GmbH" />
  <meta property="og:url" content="https://busch-brand.de/" />
  <meta property="og:title" content="Startseite" />
  <meta property="og:image" content="https://busch-brand.de/assets/img/logo_buschbrand.png" />
</head>

<body>
  <!-- NAVIGATION -->
  <nav class="navbar navbar-dark navbar-expand-lg bg-dark" id="topNav">
    <div class="container">
      <button class="navbar-toggler mb-3 pt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" id="navToggler">
        <i class="fa-solid fa-bars" id="menuIcon"></i> <span>MENÜ</span>
      </button>
      <div class="row w-100">
        <div class="col text-light"><span style="font-weight: bold; color: var(--bb-blue); letter-spacing: 3px">Autohaus</span><br>
          Busch & Brand</div>
        <div class="col">
          <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
            <div class="navbar-nav justify-content-end" id="mainNav">
              <a class="nav-link mx-2" href="/autohaus">Autohaus</a>
              <a class="nav-link mx-2" href="/immobilien">Immobilien</a>
              <a class="nav-link mx-2" href="/sicherheit">Sicherheit</a>
              <a class="nav-link mx-2" href="/unser-team">Unser Team</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- CONTENT -->
  <hr class="text-light mt-5">
  <div id="pageBegin"></div>
  <div class="container-full my-5" id="pageContent">
    <div class="container mb-5">
      <div class="col-5 float-end mb-3 ms-3 px-4 pt-4 shadow-sm">
        <div class="row">
          <div class="col">
            <img src="assets/img/image_2.png" alt="AH B&B" class="img-fluid" />
            <p>Das Autohaus ist an der Postleitzahl 10001 zu finden.</p>
          </div>
        </div>
      </div>
      <h1>Ihr Tor zu luxuriöser Mobilität</h1>
      <p>
        Entdecken Sie die wahre Definition von Luxus bei Autohaus Busch & Brand! Tauchen Sie ein in eine Welt erstklassiger Fahrzeuge,
        die Ihren Stil und Anspruch widerspiegeln. Unser renommiertes Autohaus ist Ihr zuverlässiger Partner für exklusive Luxusautos.
      </p>
      <p>
        Bei Autohaus Busch & Brand steht die Qualität an erster Stelle.
        Jedes Fahrzeug in unserer erstklassigen Auswahl wurde sorgfältig geprüft und garantiert höchste Standards in Leistung,
        Komfort und Design. Egal, ob Sie eine elegante Limousine, ein kraftvolles Sportcoupé oder ein luxuriöses SUV suchen,
        wir haben das perfekte Fahrzeug für Sie.
      </p>
      <p>
        Unser engagiertes und erfahrenes Team steht Ihnen zur Seite, um Ihnen ein unvergleichliches Kauferlebnis zu bieten.
        Wir verstehen Ihre Bedürfnisse und setzen alles daran, Ihre Erwartungen zu übertreffen.
        Von der ersten Beratung bis zur Fahrzeugübergabe stehen wir Ihnen mit unserem Fachwissen und unserer Leidenschaft für Luxusautos zur Verfügung.
      </p>
      <p>
        Besuchen Sie noch heute unsere Online-Preisauskunft und lassen Sie sich von unserem breiten Angebot an Luxusfahrzeugen inspirieren.
        Nehmen Sie Kontakt zu uns auf und vereinbaren Sie eine Probefahrt, um das Fahrgefühl und die Perfektion hautnah zu erleben.
      </p>
      <p>
        Autohaus Busch & Brand - Ihr Tor zu luxuriöser Mobilität. Gönnen Sie sich das Beste und fahren Sie in Ihrem Traumwagen vor!
      </p>
      <hr class="text-light my-4" />
      <div id="preisauskunft"></div>
      <h1>Preisauskunft</h1>
      <div class="row" id="carsearch">
        <div class="col">
          <form action="search_results.php" method="POST">
            <div class="row">
              <div class="col">
                <select class="form-select" name="brand" id="brandSelect">
                  <option value="">Hersteller wählen</option>
                </select>
              </div>
              <div class="col">
                <input class="form-control" type="text" name="model" id="modelInput" placeholder="Modell" list="modelList">
                <datalist id="modelList"></datalist>
              </div>
              <div class="col">
                <input class="form-control" type="number" name="min_price" placeholder="Mindestpreis (€)">
              </div>
              <div class="col">
                <input class="form-control" type="number" name="max_price" placeholder="Maximalpreis (€)">
              </div>
              <div class="col-1">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <hr class="text-light my-5" />
  D
  <!-- FOOTER -->
  <?php include 'assets/php/footer.php'; ?>
  <!-- search.php -->
  <script>
    // Fetch brands and models from the server
    fetch('get_data.php')
      .then(response => response.json())
      .then(data => {
        const brandSelect = document.getElementById('brandSelect');
        const modelInput = document.getElementById('modelInput');
        const modelDatalist = document.getElementById('modelList');
        const modelsByBrand = data.models;

        // Populate brands without duplicates
        const uniqueBrands = [...new Set(data.brands)];
        uniqueBrands.forEach(brand => {
          const brandCount = modelsByBrand[brand]?.length || 0;
          const option = document.createElement('option');
          option.value = brand;
          option.textContent = `${brand} (${brandCount})`;
          brandSelect.appendChild(option);
        });

        // Update models based on the selected brand
        brandSelect.addEventListener('change', function() {
          const selectedBrand = this.value;
          const models = selectedBrand ? modelsByBrand[selectedBrand] : getAllModels();

          // Clear previous options
          modelDatalist.innerHTML = '';

          models.forEach(model => {
            const option = document.createElement('option');
            option.value = model;
            option.textContent = model;
            modelDatalist.appendChild(option);
          });
        });

        // Update model input value when an option is selected from the datalist
        modelInput.addEventListener('input', function() {
          modelInput.value = modelDatalist.querySelector(`option[value="${modelInput.value}"]`)?.value || modelInput.value;
        });

        // Get all models from all brands
        function getAllModels() {
          const allModels = [];
          for (const models of Object.values(modelsByBrand)) {
            allModels.push(...models);
          }
          return allModels;
        }

        // Show all models in the datalist when no brand is selected
        brandSelect.addEventListener('input', function() {
          const selectedBrand = this.value;
          if (!selectedBrand) {
            const models = getAllModels();

            // Clear previous options
            modelDatalist.innerHTML = '';

            models.forEach(model => {
              const option = document.createElement('option');
              option.value = model;
              option.textContent = model;
              modelDatalist.appendChild(option);
            });
          }
        });

        // Initialize the model datalist with all models
        const allModels = getAllModels();
        allModels.forEach(model => {
          const option = document.createElement('option');
          option.value = model;
          option.textContent = model;
          modelDatalist.appendChild(option);
        });
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  </script>

</body>

</html>
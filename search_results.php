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
            <h1>Preisauskunft</h1>
            <div class="row" id="carsearch">
                <div class="col">
                    <?php
                    // Retrieve search criteria from the form
                    $brand = $_POST['brand'] ?? '';
                    $model = $_POST['model'] ?? '';
                    $minPrice = $_POST['min_price'] ?? '';
                    $maxPrice = $_POST['max_price'] ?? '';

                    // Assuming you have a database connection established
                    $servername = "web-snake02.native-webspace.com";
                    $username = "bbuser";
                    $password = '4ne$Gk274';
                    $dbname = "hypaxna1_bbdb";

                    // Create a new database connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check if the connection was successful
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Construct the search query based on the provided criteria
                    $query = "SELECT * FROM vehicles WHERE 1=1";

                    if (!empty($brand)) {
                        $query .= " AND brand = '$brand'";
                    }

                    if (!empty($model)) {
                        $query .= " AND model = '$model'";
                    }

                    if (!empty($minPrice)) {
                        $query .= " AND price >= $minPrice";
                    }

                    if (!empty($maxPrice)) {
                        $query .= " AND price <= $maxPrice";
                    }

                    // Execute the query
                    $result = $conn->query($query);

                    // Check if any results were found
                    if ($result->num_rows > 0) {
                        // Iterate over the result set and fetch the data
                        while ($row = $result->fetch_assoc()) {
                            // Store each row in the $results array
                            $results[] = $row;
                        }
                    }

                    // Close the database connection
                    $conn->close();

                    // Display the search criteria and results
                    echo "<h2>Search Results</h2>";

                    // Display the selected brand
                    echo "<p><strong>Brand:</strong> " . ($brand ? $brand : "Any") . "</p>";

                    // Display the selected model
                    echo "<p><strong>Model:</strong> " . ($model ? $model : "Any") . "</p>";

                    // Display the price range
                    echo "<p><strong>Price Range:</strong> " . ($minPrice ? "$" . $minPrice : "Any") . " - " . ($maxPrice ? "$" . $maxPrice : "Any") . "</p>";

                    // Display the search results
                    if (!empty($results)) {
                        echo "<h3>Results:</h3>";
                        echo "<ul>";
                        foreach ($results as $result) {
                            echo "<li>" . $result['model'] . "</li>";
                        }
                        echo "</ul>";
                    } else {
                        echo "<p>No results found.</p>";
                    }


                    ?>

                </div>
            </div>
        </div>
    </div>
    <hr class="text-light my-5" />
    D
    <!-- FOOTER -->
    <?php include 'assets/php/footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Components Testing Page</title>
    <link rel="stylesheet" href="../CSS/styles.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="../CSS/cards.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="../CSS/forms.css"> <!-- Link to your CSS file -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        .container {
            margin: 0 auto;
            width: 100%;
        }
        .section {
            margin-bottom: 16px;
            margin-left: 32px;
            border-radius: 8px;
            width: 1400px;
            margin-top: 16px;
        }
    </style>
</head>
<body>
    <div class="grid-container" style="display: none;">
<div class="container">

<div class="form-container">
    <form>
        <?php
        include '../Elements/FloatingInputs.php';
        // Create input fields using the provided function
        echo "<div style='display: flex; flex-direction: row;'>";
        createInputWithoutCSV("s","first-name", "text", "First Name", ["form-control"], "first-name");
        createInputWithoutCSV("s","last-name", "text", "Last Name", ["form-control"], "last-name");
        createInputWithoutCSV("s","email", "email", "Email", ["form-control"], "email");
        echo "</div><div style='display: flex; flex-direction: row;'>";
        createInputWithoutCSV("l","phone", "text", "Phone", ["form-control"], "phone");
        createInputWithoutCSV("s","address", "text", "Address", ["form-control"], "address");
        echo "</div><div style='display: flex; flex-direction: row;'>";
        createInputWithoutCSV("m","city", "text", "City", ["form-control"], "city");
        createInputWithoutCSV("m","zip", "text", "Zip Code", ["form-control"], "zip");
        echo "</div><div style='display: flex; flex-direction: row;'>";
        createInputWithoutCSV("xl","password", "password", "Password", ["form-control"], "password");
        ?>
        </div>
        <!-- Div with 2 buttons -->
        <div class="form-group">
            <button type="submit" class="btn-primary">Submit</button>
            <button type="reset" class="btn-secondary">Reset</button>
        </div>

        <!-- Div with 1 button -->
        <div class="form-group">
            <button type="button" class="btn-primary">Click Me</button>
        </div>
    </form>
    </div><!-- Modals -->
    <section class="section">
        <h2>Modals</h2>
        <button class="btn btn-primary" onclick="showModal()">Open Modal</button>
        <div class="modal" id="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h3>Modal Title</h3>
                <p>This is a modal dialog. Modals are great for displaying important information without leaving the current page.</p>
                <button class="btn btn-secondary" onclick="closeModal()">Close</button>
            </div>
        </div>
    </section>

    <!-- Navigation Bar -->
    <section class="section">
        <h2>Navigation Bar</h2>
        <nav class="navbar">
            <ul class="nav-list">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </nav>
    </section>

    <!-- Tables -->
    <section class="section">
        <h2>Tables</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Header 1</th>
                    <th>Header 2</th>
                    <th>Header 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                </tr>
                <tr>
                    <td>Data 4</td>
                    <td>Data 5</td>
                    <td>Data 6</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Alerts -->
    <section class="section">
        <h2>Alerts</h2>
        <div class="alert alert-success">Success! You have successfully completed the task.</div>
        <div class="alert alert-warning">Warning! There is something you need to be aware of.</div>
        <div class="alert alert-danger">Error! Something went wrong.</div>
    </section>

    <!-- Breadcrumbs -->
    <section class="section">
        <h2>Breadcrumbs</h2>
        <nav class="breadcrumb">
            <a href="#" class="breadcrumb-item">Home</a> &gt;
            <a href="#" class="breadcrumb-item">Library</a> &gt;
            <span class="breadcrumb-item active">Data</span>
        </nav>
    </section>
    </div>
    <!-- Cards -->


    <section class="section" style="display:flex; overflow: hidden;">
        
        


            <div class="card-l modest-background">
                <img src="https://via.placeholder.com/300" alt="Card Image" class="card-l-img">
                <div class="card-l-content">
                    <h3 class="card-title">Card Title</h3>
                    <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                    <!--<button class="btn btn-secondary">Read More</button>-->
                </div>
                <div class="featuredList">
                <div class="discount-or-name-window">
                    <p class="corporate"><strong>75% off</strong></p>
                </div>
            </div>
            </div>
        
        <div class="card-l modest-background">
            <img src="" alt="Card Image" class="card-l-img">
            <div class="card-l-content">
                <h3 class="card-title">Card Title</h3>
                <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                <!--<button class="btn btn-secondary">Read More</button>-->
            </div>
        </div>

        <div class="card-l modest-background">
            <img src="https://via.placeholder.com/300" alt="Card Image" class="card-l-img">
            <div class="card-l-content">
                <h3 class="card-title">Man's Search For Meaning broz</h3>
                <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                <!--<button class="btn btn-secondary">Read More</button>-->
            </div>
        </div>
        
    </section>

    <section class="section" style="display:flex;">
        <div class="card modest-background">
        <img src="https://via.placeholder.com/300" alt="Card Image" class="card-img">
            <div class="card-content">
                <h3 class="card-title">A Search For Meanings</h3>
                <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                <!--<button class="btn btn-secondary">Read More</button>-->
            </div>
            <div class="featuredList">
                <img class="card-Op-Ed-Img" />
                <div class="discount-or-name-window">
                    <p class="corporate">Ben Jones</p>
                </div>
            </div>
        </div>
        <div class="card modest-background">
            <img src="https://via.placeholder.com/300" alt="Card Image" class="card-img">
            <div class="card-content">
                <h3 class="card-title">Card Title</h3>
                <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                <!--<button class="btn btn-secondary">Read More</button>-->
            </div>
            <div class="featuredList">
                <div class="discount-or-name-window">
                    <p class="corporate"><strong>75% off</strong></p>
                </div>
            </div>
        </div>
        <div class="card modest-background">
            <img src="https://via.placeholder.com/300" alt="Card Image" class="card-img">
            <div class="card-content">
                <h3 class="card-title">Card Title</h3>
                <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                <!--<button class="btn btn-secondary">Read More</button>-->
            </div>
        </div>
        <div class="card modest-background">
            <img src="https://via.placeholder.com/300" alt="Card Image" class="card-img">
            <div class="card-content">
                <h3 class="card-title">Card Title</h3>
                <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                <!--<button class="btn btn-secondary">Read More</button>-->
            </div>
        </div>
        
    </section>
    <section class="section" style="display:flex;">
        <div class="card modest-background">
            <img src="https://via.placeholder.com/300" alt="Card Image" class="card-img">
            <div class="card-content">
                <h3 class="card-title">Card Title</h3>
                <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                <!--<button class="btn btn-secondary">Read More</button>-->
            </div>
        </div>
        <div class="card modest-background">
            <img src="https://via.placeholder.com/300" alt="Card Image" class="card-img">
            <div class="card-content">
                <h3 class="card-title">Card Title</h3>
                <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                <!--<button class="btn btn-secondary">Read More</button>-->
            </div>
        </div>
        <div class="card-xl modest-background">
            <img src="https://via.placeholder.com/300" alt="Card Image" class="card-xl-img">
            <div class="card-xl-content">
                <h3 class="card-title">Card Title</h3>
                <p class="card-text">This is a card with an image, title, and some descriptive text.  </p>
                <!--<button class="btn btn-secondary">Read More</button>-->
            </div>
        </div>
        
        
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </footer>



<!-- JavaScript for Modal -->
<script>
    function showModal() {
        document.getElementById('modal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }
</script>

    <!-- Generating grid items with JavaScript for simplicity -->
</div>

<script>
    /* Generate a grid with a specific number of items
    const gridContainer = document.querySelector('.grid-container');

    // Calculate how many boxes are needed to fill the screen
    const numColumns = Math.floor(window.innerWidth / 64);
    const numRows = Math.floor(window.innerHeight / 64);
    const totalBoxes = numColumns * numRows;

    for (let i = 0; i < totalBoxes; i++) {
        const gridItem = document.createElement('div');
        gridItem.classList.add('grid-item');
        gridContainer.appendChild(gridItem);
    } */
</script>

</body>
</html>
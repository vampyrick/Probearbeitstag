<!DOCTYPE html>
<?php
    include('header.php');
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "../css/styles.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <title>Probearbeitstag-Aufgabe</title>
</head>
<body>
<div class="container">

    <div class="mx-auto" style="width: 800px">

        <div class="row">
            <div class="col-md">
                LOGO
            </div>
            <div class="col-md" align="right">
                NAVIGATION
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                Heading
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                IntroText
            </div>
        </div>

        <div class="row">
            <div class="col-md">
            <form>

                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="name" class="form-control" id="exampleInputName1" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                Bekannt aus
            </div>
            <div class="col-md">
                bild 1
            </div>
            <div class="col-md">
                bild 2
            </div>
            <div class="col-md">
                bild 3
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                <h3>WILLKOMMENS-ÜBERSCHRIFT</h3>
                <p>
                    LOREM IPSUM TEXT
                </p>
            </div>
            <div class="col-md">
                <img src="../assets/img/sush.jpg" class="img-thumbnail" alt="descriptionimage1">
            </div>
        </div>

        <!-- video container starts here !-->
        <div class="row">
            <div class="col-md">
                <h3>UBERSCHRIFT</h3>
                <p>LOREM IPSUM TEXT</p>
            </div>
        </div>


            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
            </div>

        <script src="../js/faq.js"></script>
        <div id="accordion-container">
            <h3>FAQ</h3>
            <h2 class="accordion-header">ACCORDIAN ELEMENT</h2>
            <div class="accordion-content">
                <p>LOREM IPSUM TEXT</p>
            </div>
            <h2 class="accordion-header">ACCORDIAN ELEMENT</h2>
            <div class="accordion-content">
                <p>LOREM IPSUM TEXT</p>
            </div>
            <h2 class="accordion-header">ACCORDIAN ELEMENT</h2>
            <div class="accordion-content">
                <p>LOREM IPSUM TEXT</p>
            </div>
            <h2 class="accordion-header">ACCORDIAN ELEMENT</h2>
            <div class="accordion-content">
                <p>LOREM IPSUM TEXT</p>
            </div>
            <h2 class="accordion-header">ACCORDIAN ELEMENT</h2>
            <div class="accordion-content">
                <p>LOREM IPSUM TEXT</p>
            </div>
        </div>


        <div class="row">
            <div class="col-md">
                LOGO
            </div>
            <div class="col-md" align="right">
                NAVIGATION
            </div>
        </div>

    </div>
</div>

<?php
    include ('footer.php');
?>


</body>
</html>

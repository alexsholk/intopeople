<?php

$lang = 'nl';
$selected = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InToPeople</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link href="styles/css/index.css" rel="stylesheet">
</head>
<body>
    <?php require '_header.php' ?>
    <div class="bg-gray">
        <div class="main-wrap">
            <h1>IntoPeople</h1>
            <p>
                provides software solutions for everyone. Our solutions consist of nearshore development,
                flexible staffing, payrolling and a combination of those services. We offer you security,
                quality and competitive pricing. We offer easy solutions tailored through operational knowledge,
                business expertise, flexibility and creativity.
            </p>
        </div>
    </div>
    <div class="bg-white">
        <div class="main-wrap">
            <h1>Clients</h1>
            <p>
                We create new awesome interactive digital products. Researching market, a-b testing, branding,
                mobile & web development, wireframes and interactive prototypes for early stages services.
                We focused on user experience and mobile applications.
            </p>
        </div>
    </div>
    <div class="bg-gray">
        <div class="main-wrap">
            <h1>Want work with us?</h1>
            <p class="larger">
                We are excited to work with services and complicated applications,<br>
                so if your project one of those you will get a small discount
            </p>
            <form action="/" method="post">
                <div class="form-row">
                    <div class="form-field half-width">
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="form-field half-width">
                        <input type="text" placeholder="Email or phone number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field full-width">
                        <input type="text" placeholder="Comments">
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit">SEND</button>
                </div>
            </form>
        </div>
    </div>
    <?php require '_footer.php' ?>
</body>
</html>
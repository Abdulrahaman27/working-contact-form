<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="wrapper">
        <header>Send us a Message</header>
        <form action="message.php" method="post">
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="name" placeholder="Enter your name">
                    <i class="fas fa-user"></i>
                </div>
                <div class="field">
                    <input type="text" name="email" placeholder="Enter your email">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="mobile" placeholder="Enter your phone">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="field">
                    <input type="text" name="website" placeholder="Enter your website">
                    <i class="fas fa-globe"></i>
                </div>
            </div>
            <div class="message">
                <textarea name="message" id="" placeholder="Write your message"></textarea>
                <i class="material-icons">message</i>
            </div>
            <div class="button-area">
                <button type="submit">Send message</button>
                <span>Sending your message...</span>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>

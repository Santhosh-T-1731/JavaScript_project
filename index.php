<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./Contact.css">
    <style>
        .error_alert{
            display: none;

        }
        .errors{
            color: red;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
                <h1>contact us</h1>
        </div>
        <div class="row">
                <h4 style="text-align:center">We'd love to hear from you!</h4>
        </div>
        <div class="row input-container">

            `   <form action="submit.php" method="POST" class="form" name="form" id="contactForm">

                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" name="name" class="required" id="name" pattern="[A-Za-z]{3}"/>
                        <label>Name</label>

                        <span class="errors error_alert" id="name-error" >
                            Please fill this line

                        </span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input">
                        <input type="email" name="email" class="required" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                        <label>Email</label>

                        <span class="errors error_alert" id="email-error">
                            Please fill this line
                        </span>

                        <span class="errors error_alert" id="email-valid-error">
                            Email is not a valid email address
                        </span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input" style="float:right;">
                        <input type="tel" name="contact" class="required" id="contact" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"/>
                        <label>Phone Number</label>

                        <span class="errors error_alert" id="contact-error">
                            Please fill this line
                        </span>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <textarea name="message" class="required" id="message"></textarea>
                        <label>Message</label>

                        <span class="errors error_alert" id="message-error">
                            Please fill this line
                        </span>
                    </div>
                </div>
                <div class="col-xs-12">
                    <!-- <input type="submit"> -->
                    <!-- <button onclick="work()">Send Message</button> -->
                     <button type="button" onclick="return validateForm()">Submit</button>


                </div>
            </form>
        </div>
    </div>
    <script src="./Contact.js">

    </script>

</body>
</html>

<?php




if(isset($_POST['email'])) {


    // ADD YOUR EMAIL WHERE YOU WANT TO RECIEVE THE MESSAGES

    $email_to = "eternal191@gmail.com";

    $email_subject = "DigitalDimensionz Message";


    function died($error)
    {

        // your error code can go here

        echo '<div class="alert alert-danger alert-dismissible wow fadeInUp" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Something is wrong:</strong><br>';

        echo $error . "<br />";

        echo '</div>';

        die();

    }

    // validation expected data exists

    if (!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['message']) ||

        !isset($_POST['last_name']) ||

        !isset($_POST['date_low']) ||

        !isset($_POST['date_high']) ||

        !isset($_POST['price_high']) ||

        !isset($_POST['price_low'])
    ) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }


    $name = $_POST['name'];

    $email = $_POST['email'];

    $massage = $_POST['message'];

    $last_name = $_POST['last_name'];

    $date_low = $_POST['date_low'];

    $date_high = $_POST['date_high'];

    $price_high = $_POST['price_high'];

    $price_low = $_POST['price_low'];


    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {

        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {

        $error_message .= 'The First Name you entered does not appear to be valid.<br />';

    }

    if (strlen($massage) < 2) {

        $error_message .= 'The message you entered do not appear to be valid.<br />';

    }

    if (strlen($error_message) > 0) {

        died($error_message);

    }

    $email_message = "Form details below.\n\n";


    function clean_string($string)
    {

        $bad = array("content-type", "bcc:", "to:", "cc:", "href");

        return str_replace($bad, "", $string);

    }


    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Last name: " . clean_string($last_name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($massage) . "\n";
    $email_message .= "Date low: " . clean_string($date_low) . "\n";
    $email_message .= "Date High: " . clean_string($date_high) . "\n";
    $email_message .= "Price low: " . "$" . clean_string($price_low) . "\n";
    $email_message .= "Price high: " . "$" . clean_string($price_high) . "\n";

    error_log($email_message);

// create email headers

    $headers = 'From: ' . $email_to . "\r\n" .

        'Reply-To: ' . $email_to . "\r\n" .

        'X-Mailer: PHP/' . phpversion();


    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        echo "success";
    } else {
        echo "fail";
    }

}

 ?>
<?php




if(isset($_POST['url'])) {


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

    if ( !isset($_POST['url']) ) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }


    $url = $_POST['url'];

    $error_message = "";

    if (strlen($url) < 2) {

        $error_message .= 'The message you entered do not appear to be valid.<br />';

    }

    /*if (strlen($error_message) > 0) {

        died($error_message);

    }*/

    $email_message = "Form details below.\n\n";


    function clean_string($string)
    {

        $bad = array("content-type", "bcc:", "to:", "cc:", "href");

        return str_replace($bad, "", $string);

    }


    $email_message .= "URL: " . clean_string($url) . "\n";


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
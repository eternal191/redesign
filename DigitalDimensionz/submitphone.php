<?php

/**
 *
 * submit contact form or appointment form
 * to your email address
 *
 * @author: Martanian <support@martanian.com>
 *
 */

# put your email address here
define('OWNER_EMAIL', 'eternal191@gmail.com');

# put your website "do not reply" email here
define('DONOTREPLY_EMAIL', 'eternal191@gmail.com');

# put your name here
define('OWNER_NAME', 'Digital Dimensionz');


/**
 *
 * phone call request
 *
 */


# put the email title here
$title = 'New Phone Call Request from your website';

# email headers
$headers = "MIME-Version: 1.0\n" .
    "Content-type: text/html; charset=utf-8\n" .
    "Content-Transfer-Encoding: 8bit\n" .
    "From: " . OWNER_NAME . " <" . DONOTREPLY_EMAIL . ">\n" .
    "Date: " . date("r") . "\n";

# email content
$content = 'New Phone Call Request from your website: <strong>' . $_POST['phoneNumber'] . '</strong>';

# sending an email
$result = mail(
    OWNER_EMAIL,
    "=?UTF-8?B?" . base64_encode($title) . "?=",
    $content,
    $headers
);

# if the email wasn't send
if ($result == false) {

    # second version of email
    mail(
        OWNER_EMAIL,
        "=?UTF-8?B?" . base64_encode(EMAIL_TITLE) . "?=",
        $content
    );

    echo 'false';

} else {
    echo 'true';
}


/**
 *
 * end of file.
 *
 */

?>
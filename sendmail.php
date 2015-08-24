<?php
  $email_to="hello@littletinrocket.com";
  $email_subject="New enquiry from Little Tin Rocket";

  // function clean_string($string) {
  //     $bad = array("content-type","bcc:","to:","cc:","href");
  //     return str_replace($bad,"",$string);
  //   };
  $name = $_POST['fullName'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = "Query from Little Tin Rocket";

  $email_message .= "<html><body>";
  $email_message .= "<p><strong>You have received a new enquiry from the website.</strong></p>";
  $email_message .= "<strong>Name: \t\t</strong>".$name."<br />";
  $email_message .= "<strong>Email: \t\t</strong>".$email."<br />";
  $email_message .= "<strong>Message: \t\t</strong>".$message."<br />";
  $email_message .= "<br /><strong>****************************************************</strong><br />";

  $email_message .= "</body></html>";

  $email_headers  = 'MIME-Version: 1.0' . "\r\n";
  $email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $email_headers .= 'From: Little Tin Rocket' . "\r\n";

  mail($email_to, $email_subject, $email_message, $email_headers);

?>

<?php include 'header.php'; ?>
  <section id="contact" class="row">
    <div class="container">
      <h1 class="inverse">Contact</h1>

      <h3>Thank you</h3>
      <p>Your message has been sent</p>
      <p><a href="index.php">Go Back</a></p>
    </div>
  </section>
<?php include 'footer.php'; ?>


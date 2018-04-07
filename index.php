<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Mailer - By EidanRones</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Main container-->
  <div class="main">

<!-- Header-->
<div class="header"><h1>PHP MAILER</h1></div>

<!-- Form wrapper -->
  <div class="form-wrapper">

<!-- Form -->
  <div class="form">
  <form action="form.php" method="post">
    <p><label>Sender</label><br />
    <input type="text" name="email" value="Sender e-mail...">
    </p>
  <p><label>Recipient</label><br />
    <input type="text" name="recipient" value="Recipient e-mail...">
  </p>
  <p><label>Subject</label><br />
    <input type="text" name="subject" value="E-mail subject..." >
  </p>
  <p><label>Message</label><br />
  <textarea rows="5" type="text" name="message">Your message...</textarea>
  </p>
  <input class="button" type="submit" name="submit" value="Submit">
</form>

</div>

</div>
<h6><small>by EidanRones</small></h6>

</body>
</html>

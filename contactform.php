<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contactform.css">
    <script src="js/formvalidatie.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="cursor">
  <div class="contact">
  <div id="container">
    <h2>contact</h2>
    <form action="mailto:1190447@student.roc-nijmegen.nl" method="post" id="contact_form">
    
      <div class="name">
        <label for="name"></label>
        <input type="text" placeholder="name" name="name" id="name_input" required>
      </div>
      <div class="email">
        <label for="email"></label>
        <input type="email" placeholder="e-mail" name="email" id="email_input" required>
      </div>
      <div class="subject">
        <label for="subject"></label>
        <select placeholder="subject line" name="subject" id="subject_input" required>
          <option disabled hidden selected>subject</option>
          <option>QUESTION ABOUT THE WEBSITE!</option>
          <option>QUESTION ABOUT THE TRAVEL LOCATIONS</option>
          <option>QUESTION ABOUT THE DATE/TIME</option>
        </select>
      </div>
      <div class="message">
        <label for="message"></label>
        <textarea name="message" placeholder="message" id="message_input" cols="30" rows="5" required></textarea>
      </div>
      <div class="submit">
        <input type="submit" value="submit" id="form_button"/>
        
      </div>
      <div class="submit">
          <a href="contact.php">GO BACK</a></li>
      </div>
    </form>
  </div>
  </div>
</div>
</body>
</html>
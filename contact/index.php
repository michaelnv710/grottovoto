<html lang="en">
  <head>
    <?php require('../php/head.php');?>
    <title>Contact - Grotto Voto</title>
  </head>
  <body id="contact">
    <?php require('../php/header.php');?>  
    <div class="container">
      <h1>Contact</h1>
      <p>You might want to let us know you like our stuff, or that you hate it, or something else. Whatever it is, if you want to tell us something:</p>
      <ul>
        <li>Email us at contact@grottovoto.com,</li>
        <li>find us on social media (lower right),</li>
        <li>or fill out the form below</li>
      </ul>
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    <?php require('../php/footer.php');?>
  </body>
</html>
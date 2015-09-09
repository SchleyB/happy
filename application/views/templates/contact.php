<nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"></span>Get<strong>Happy</strong>Austin!</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/">Home</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
      </nav>


<div class="contact-container">
    
    <h1 class="contact-hero-text">Questions? Comments?</h1>
    
    <p class="contact-text">Reach Us here!</p>
    
    <div class="contact-div">
        
        <?php
        
            $number1 = rand(1, 9);
            $number2 = rand(1, 9);
            $sum = $number1 + $number2;
        ?>
        
        <?php
        
        if(isset($_POST['correctsum'], $_POST['captcha'])){
            $correctsum = $_POST['correctsum'];
            $captcha = $_POST['captcha'];
            if($correctsum == $captcha){
               $filname = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
               $filemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
               $filmessage = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
               
               $msg = $filname . "\n" . $filemail . "\n" . $filmessage;
               mail("slybarrack@gmail.com", "Contact Form", $msg);
               echo "<p class='fail-text'>Thank you for Submitting!</p>";
            }else{
               echo "<p class='fail-text'>Please enter the correct value!</p>";
            }
        }    
        ?>
    
        <form method='post' class='contact-form'>
            
            <input type="hidden" name="correctsum" value="<?php echo $sum; ?>"/>
            
            <input name="name" type="text" placeholder="Name:" required>
            
            <br/>
            
            <input name="email" type="email" placeholder="Email:" required>
            
            <br/>
            
            <textarea name="message" placeholder="Message:"></textarea>
            
            <br/>
            
            <p class="captcha-text">Please verify your humanity:</p>
            
            <?php echo $number1.' + '.$number2.' = '; ?>
            <input type="text" name="captcha" id="captcha"/>
            
            <br/>
            
            <button id="contact-button" type="submit" class="btn btn-default">Submit!</button>
            
            
        </form>
    
    </div>
    
</div>
    
    
    



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
              <li><a href="#">Home</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
      </nav>

<div class="fullscreen-bg">
    <video autoplay loop class="fullscreen-bg__video">
    
    <source src="<?php echo base_url(); ?>assets/video/Beer_Bubbles_300314_Videvo.ogv" type="video/ogv"></source>
    <source src="<?php echo base_url(); ?>assets/video/converted_4e9468b2.webm" type="video/webm"></source>
    <source src="<?php echo base_url(); ?>assets/video/converted_d6bfb7bf.mp4" type="video/mp4"></source>
    
</video>
</div>


<div class="container">
    
    <h1 class="hero-text">Find the best <strong>Happy Hour</strong> deals in town!</h1>
    
    <form action="/venues/" method="get" id="home-form">
    
    <div id="index-row" class="row">
        
        <div class="col-md-4">
            
            <label for="when" class="labels">When?</label>
            <div class="styled-select">
                <select name="when">
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
            </div>
           
            
        </div>
        
        <div class="col-md-4">
            <label for="where" class="labels">Where?</label>
            <div class="styled-select">
                <select name="where">
                    <option value="nearby">Nearest</option>
                    <option value="central">Central</option>
                    <option value="east">East</option>
                    <option value="south">South</option>
                    <option value="north">North</option>
                    <option value="west">West</option>
                </select>
            </div>   
        </div>
        
        <div class="col-md-4">
            <button id="index-button" class="btn btn-default" type="submit">Lets Go!</button>
        </div>
        
    </div><!--row-->
    
    </form>
    
</div><!--container-->

    
        



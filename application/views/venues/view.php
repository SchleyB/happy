
<nav class="navbar navbar-default navbar-fixed-top" id="map-nav">
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
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
      </nav>

<div id="map-row" class="row">
    
    <div class="col-sm-6">
        
        <div id='map-canvas'></div>
        
    </div>
    
    <div class="venue-list col-sm-6">
        
        <?php if ($venue_area[0]['venue_area'] != "central") { ?>
                
            <h2>Happy hours on the <?php echo $venue_area[0]['venue_area']; ?>side!</h2>
            
        <?php }else { ?>
        
            <h2>Central Happy Hours!</h2>
            
        <?php } ?>
        
        <div id="venue-list">
        
            <?php foreach ($venue_area as $venue_item): ?>
            
                <div class="venue-list-item">
                    
                    <h4><strong><?php echo $venue_item['venue_name']; ?></strong></h4>
                
                    <p><?php echo $venue_item['venue_deal']; ?></p>
                
                    <p><?php echo $venue_item['address']; ?></p>
                    
                </div>
            
            <hr>
                                        
            <?php endforeach; ?>
        
        </div>
        
    </div>
    
</div>


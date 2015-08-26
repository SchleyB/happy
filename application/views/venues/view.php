
<h2>Happy hours on the <?php echo $venue_area[0]['venue_area']; ?>side!</h2>

<?php foreach ($venue_area as $venue_item): ?>

    <h4><?php echo $venue_item['venue_name']; ?></h4>
    
    <p><?php echo $venue_item['venue_deal']; ?></p>
    
    <p><?php echo $venue_item['address']; ?></p>
    
    <p><strong><?php echo $venue_item['day_of_week']; ?></strong></p>

<?php endforeach; ?>
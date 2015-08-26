<h2>Happy Hours</h2>

<?php foreach ($venues as $venue_item): ?>
    <h3><?php echo $venue_item['venue_name']; ?></h3>
    
    <div class="main">
        <strong>Here is the deal</strong><br>
        <?php echo $venue_item['venue_deal'] ?>
        <br>
        <strong>And the address: </strong><br>
        <?php echo $venue_item['address'] ?>
    </div>
    
<?php endforeach; ?>
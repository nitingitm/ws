<marquee scrollamount="3" direction="up" height="300px;" onmouseover="this.stop();" onmouseout="this.start();" style="background-color:#ffffff">
<?php foreach ($news as $item) {?>
    <blockquote>
        <p><?php echo $item->SUBJECT; ?></p>
        <small><?php echo $item->NEWS; ?> <div style="clear: both; height:5px"></div><cite title="Source Title" style="color: #0E76A8">
        <br />
        	<?php echo $item->DATE_ . " | "; ?></cite></small>
    </blockquote>
<?php } ?>
</marquee>
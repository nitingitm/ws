<div class="container">
    <div class="row">
        <div class="col-sm-12">
        	<div style="position:fixed; float:right; margin-top: -110px; z-index: 9999; right: 10px;">
        		<a href="<?PHP echo site_url('web/addNews_');?>" class="btn btn-default" role="button" style="margin-top: 30px; border-radius: 40px;"><span class="glyphicon glyphicon-plus"></span></a>
        		<a href="<?PHP echo site_url('web');?>" class="btn btn-danger" role="button" style="margin-top: 30px; border-radius: 40px;"><span class="glyphicon glyphicon-off"></span></a>
        	</div>
             <?php foreach ($news as $item) {?>
             	
			    <blockquote>
			        <p><?php echo $item->SUBJECT; ?></p>
			        <small><?php echo $item->NEWS; ?><div style="clear: both; height:5px"></div><cite title="Source Title" style="color: #0E76A8">
			        	<br>
			        	<?php echo $item->DATE_ . " | "; ?></cite></small>
			        <a href="<?PHP echo site_url('web/editNews_/'.$item->ID);?>" class="btn btn-primary" role="button" style="margin-top: 30px;">EDIT <span class="glyphicon glyphicon-wrench"></span></a>
			        <a href="<?PHP echo site_url('web/del_news/'.$item->ID);?>" class="btn btn-danger" role="button" style="margin-top: 30px;">DELETE <span class="glyphicon glyphicon-remove-circle"></span></a>
			        <?php if ($item->STATUS ==0){?> 
			        	<a href="<?PHP echo site_url('web/news_status/1/'.$item->ID);?>" class="btn btn-danger" role="button" style="margin-top: 30px;">INACTIVE <span class="glyphicon glyphicon-remove-circle"></span></a>
			        <?php }else{?>
			        	<a href="<?PHP echo site_url('web/news_status/0/'.$item->ID);?>" class="btn btn-success" role="button" style="margin-top: 30px;">ACTIVE <span class="glyphicon glyphicon-ok"></span></a>
			        <?php }?>
			    </blockquote>
			<?php } ?>                  
        </div>
	</div>
</div>			             
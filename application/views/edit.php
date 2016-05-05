
<div class="container">
        <div class="row">
        	<div style="position:fixed; float:right; margin-top: -110px; z-index: 9999; right: 0px;">
        		<a href="<?PHP echo site_url('web/addNews_');?>" class="btn btn-default" role="button" style="margin-top: 30px; border-radius: 40px;"><span class="glyphicon glyphicon-plus"></span></a>
        		<a href="<?PHP echo site_url('web/update_news');?>" class="btn btn-danger" role="button" style="margin-top: 30px; border-radius: 40px;"><span class="glyphicon glyphicon-off"></span></a>
            </div>
            <div class="col-sm-12">
            	<h3 style="margin-bottom: 30px;"><a style="color:#2085D6" href="<?PHP echo site_url('web/panel_');?>">ADMIN PANEL</a>/ EDIT NEWS</h3>
        		<form role="form" action="<?PHP echo site_url('web/update_news'); ?>" method="post">
        			<input type="hidden" name="id_" value="<?PHP echo $rec_->ID;?>" />
				  <div class="form-group">
				    <label for="subject">Subject</label>
				    <input type="subject" class="form-control" name="subject" value="<?PHP echo $rec_->SUBJECT; ?>">
				  </div>
				  <div class="form-group">
				    <label for="News">News</label>
				    <textarea class="form-control" name="news"><?PHP echo $rec_->NEWS; ?></textarea>
				  </div>
				  <?PHP
				  	if($rec_->STATUS == 1){
				  		$chk = ' checked="checked"';
				  	}else{
				  		$chk = '';
				  	}
				  ?>
				  <div class="checkbox">
				    <label><input type="checkbox"<?PHP echo $chk; ?> value="1" name="status">Active</label>
				  </div>
				  <button type="submit" class="btn btn-primary">UPDATE</button>
				  <button type="reset" class="btn btn-danger">CANCEL</button>
				</form>  		                           
            </div>
		</div>
</div>			             
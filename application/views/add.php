<div class="container">
        <div class="row">
        	<div style="position:fixed; float:right; margin-top: -110px; z-index: 9999; right: 0px;">
        		<a href="<?PHP echo site_url('web/addNews_');?>" class="btn btn-default" role="button" style="margin-top: 30px; border-radius: 40px;"><span class="glyphicon glyphicon-plus"></span></a>
        		<a href="<?PHP echo site_url('web');?>" class="btn btn-danger" role="button" style="margin-top: 30px; border-radius: 40px;"><span class="glyphicon glyphicon-off"></span></a>
            </div>
            <div class="col-sm-12">
            	<h3 style="margin-bottom: 30px;"><a style="color:#2085D6" href="<?PHP echo site_url('web/panel_');?>">ADMIN PANEL</a>/ ADD NEWS</h3>
        		<form role="form" action="<?PHP echo site_url('web/createnews');?>" method="post">
				  <div class="form-group">
				    <label for="subject">Subject</label>
				    <input type="subject" class="form-control" name="subject" required="required">
				  </div>
				  <div class="form-group">
				    <label for="News">News</label>
				    <textarea class="form-control" name="news" required="required"></textarea>
				  </div>
				  <div class="checkbox">
				    <label><input type="checkbox" value="1" checked name="status">Active</label>
				  </div>
				  <button type="submit" class="btn btn-primary">SUBMIT</button>
				  <button type="reset" class="btn btn-danger">RESET</button>
				</form>  		                           
            </div>
            <div style="padding: 11px; color: #ff0000; font-weight: bold">
            	<?PHP echo $this->session->flashdata('msg_'); ?>
            </div>
		</div>
		
</div>			             
<div class="container">
        <div class="row">
        	<div class="col-sm-4" align="left">
                  <img src="<?PHP echo base_url() . 'assets/i_m_g_/Workshop2016_header.png'?>" title="Workshop 2016">
                  <a href="<?PHP echo site_url('web/panel_');?>" class="btn btn-primary" role="button" style="margin-top: 30px;">ADMIN PANEL<span class="glyphicon glyphicon-user"></span></a>
            </div>
            <div class="col-sm-8">
                <div class="media">
                    <div class="media-body">
                        <h3 class="media-heading">Recent News</h3>
                         <?PHP $this->load->view('templates/newsevents');?> 
                    </div>
                </div>
            </div>
		</div>
</div>			             
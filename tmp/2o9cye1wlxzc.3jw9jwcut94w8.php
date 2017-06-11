<!--
    /*
	*Author: Nate Hascup & Patrick Callahan
	*Greenriver IT 328
	*Badgery userHome.html
	*/
-->

<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
		<!---//End-header---->			
				<!-- These are our grid blocks 	---->

							
						<!-- begin card deck/columns -->
						<div class="card-deck text-center">
							
							<?php foreach (($badgeDisplay?:[]) as $badge): ?>
							
							
							<!-- card -->
							<div class="card text-center m-0 badge border-0">
								
								<a data-target="#myModal" data-toggle="modal">
									<img class="card-img caps rounded-circle" src="images/beerIcons/<?= $badge['badge_ID'] ?>.jpg" onerror="this.src='images/beerIcons/beerDefault1.png';">
								</a>
								<!-- Modal -->
								<div tabindex="-1" class="modal fade" id="myModal" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
								  <div class="modal-dialog">
									<div class="modal-content">
									  <div class="modal-header">
										<button class="close" aria-hidden="true" type="button" data-dismiss="modal">×</button>
										<h4 class="modal-title" id="myModalLabel">More Beer?</h4>
									  </div>
									  <div class="modal-body">
										<p><img src="images/bubbaJ.jpg"></p>
									  </div>
									  <div class="modal-footer">
										<button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
										<button class="btn btn-primary" type="button">Save changes</button>
									  </div>
									</div><!-- /.modal-content -->
								  </div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
								
							</div>
							
							
							<?php endforeach; ?>
							
							
							<!-- card
							images/beerIcons/coors.jpg
							<div class="card text-center m-0 badge border-0">
								<img class="card-img rounded-circle" src='images/beerDefault1.png' > 
							</div>
							-->
							
							
							<!--<div class="w-100 hidden-sm-down hidden-lg-up"><!-- wrap every 3 on md</div>-->
							<!--<div class="w-100 hidden-xs-down hidden-md-up"> wrap every 2 on sm</div>-->
							<!--<div class="w-100 hidden-md-down hidden-xl-up"> wrap every 4 on lg</div>-->
							<!--<div class="w-100 hidden-lg-down"> wrap every 5 on xl</div>-->
														<!-- end cards -->
						</div>
						<!-- End card deck-->
						
						
			
		</div>

		
		<!----start-footer--->
		<?php echo $this->render('/pages/footer.html',NULL,get_defined_vars(),0); ?>
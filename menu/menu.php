<?php require_once('Connections/gestionstock.php'); ?>
<?php require_once('Connections/logout.php'); ?>
<?php require_once('authentification.php'); ?>


<div id="sidebar" class="sidebar responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>
 
  
   <ul  class="nav nav-list">
          <li  class="active"> <a  href="index.php"> <i  class="menu-icon fa fa-tachometer"></i>
              <span  class="menu-text"> Dashboard </span> </a> <b  class="arrow"></b>
          </li>
          <li class=""> <a href="#" class="dropdown-toggle">
					<span class=" menu-text glyphicon glyphicon-sort"> Stock </span> <b class="arrow fa fa-angle-down"></b> 
						</a> <b class="arrow"></b>
						<ul class="submenu">
							<li class=""><a href="#"> <i class="glyphicon glyphicon-log-in"></i> Entrées </a>
							 <b  class="arrow"></b> </li>
							<li class=""> <a href="#"><i class="glyphicon glyphicon-log-out"></i> Sorties </a>
							 <b  class="arrow"></b></li>
						</ul>
					</li>
					 <li class=""> <a href="#" > 
							<span class="menu-text glyphicon glyphicon-list-alt"> Articles</span> <b>  </b>
						</a> <b class="arrow"></b>
					
					</li>
					
					 <li class=""> <a href="#" class="dropdown-toggle"> 
						 <span class="menu-text glyphicon glyphicon-shopping-cart"> Achats </span> <b class="arrow fa fa-angle-down"></b>
						</a> <b class="arrow"></b>
						<ul class="submenu">
							<li class=""><a href="#"> Commande </a>
							 <b  class="arrow"></b> </li>
							<li class=""> <a href="#"> Depenses </a>
							 <b  class="arrow"></b></li>
							 <li class=""> <a href="#"> Factures reçues </a>
							 <b  class="arrow"></b></li>
							  <li class=""> <a href="#"> Historique</a>
							 <b  class="arrow"></b></li>
						</ul>
					</li>
					
					
					 <li class=""> <a href="#" class="dropdown-toggle"> 
							<span class="menu-text glyphicon glyphicon-euro"> Ventes </span> <b class="arrow fa fa-angle-down"></b>
						</a> <b class="arrow"></b>
						<ul class="submenu">
							<li class=""><a href="#">  Les imports</span></a>
							 <b  class="arrow"></b> </li>
							<li class=""> <a href="#"> Les exports </i> </a>
							 <b  class="arrow"></b></li>
							 
						</ul>
					</li>
					
					<li class=""> <a href="#" > 
							<span class="menu-text glyphicon glyphicon-briefcase"> Comptabilité</span> <b>  </b>
						</a> <b class="arrow"></b>
					
					</li>
					
						</ul>
					</li>
				</ul><!-- /.nav-list -->
					<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
</div>
<?php require_once('Connections/gestionstock.php'); ?>
<?php require_once('Connections/logout.php'); ?>
<?php require_once('authentification.php'); ?>


<script type="text/javascript" src="js/date_time.js"></script>
 
  
    <div  id="navbar"  class="navbar navbar-default">
      <script  type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>
      <div  class="navbar-container"  id="navbar-container"> <button  type="button"

           class="navbar-toggle menu-toggler pull-left"  id="menu-toggler"  data-target="#sidebar">
          <span  class="sr-only">Toggle sidebar</span> <span  class="icon-bar"></span>
          <span  class="icon-bar"></span> <span  class="icon-bar"></span> </button>
       
	   <div  class="navbar-header pull-left"> <a  href="#"  class="navbar-brand">
            <small> <i  class="fa fa-leaf"></i> La Mia Camicia SARL</small> </a>
                         


     </div>  
        <div  class="navbar-buttons navbar-header pull-right"  role="navigation">
          <ul  class="nav ace-nav">
                          
            <li  class="light-blue">

                          <span id="date_time" class="glyphicon glyphicon-time"  >
                             <script type="text/javascript">window.onload = date_time('date_time');</script>
                           </span>
            
             </li>
            <li  class="list-group-item-info">
           
              <a  data-toggle="dropdown"  class="dropdown-toggle"  href="#"> <i  class="glyphicon glyphicon-cog"></i> 
                         <span>Paramétres</span>
              </a> 
           </li>
            <li  class="green">
            
              <a  data-toggle="dropdown"  class="dropdown-toggle"  href="#"> <i  class="glyphicon glyphicon-user"></i> 
                         <span><?php echo $row_user['nom']; ?> <?php echo $row_user['prenom']; ?></span>
              </a> 
           </li>

             
            <li  class="light-blue"> <a   href="<?php echo $logoutAction ?>"  class="dropdown-toggle">

                <i  class="ace-icon fa fa-power-off"></i>  <span> Log out </span> 
              </a> </li>
          </ul>
        </div>
		
		
      </div>
      <!-- /.navbar-container --> </div>
    
      
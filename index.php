<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta  content="text/html; charset=utf-8"  http-equiv="content-type">
    <meta  http-equiv="X-UA-Compatible"  content="IE=edge,chrome=1">
    <title>Dashboard -LC</title>
   
    <meta  name="description"  content="overview &amp; stats">
    <meta  name="viewport"  content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- bootstrap & fontawesome -->
  
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link  rel="stylesheet"  href="assets/css/bootstrap.min.css">
    <link  rel="stylesheet"  href="assets/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- page specific plugin styles -->
    <!-- text fonts -->
    <link  rel="stylesheet"  href="assets/fonts/fonts.googleapis.com.css">
    <!-- ace styles -->
    <link  rel="stylesheet"  href="assets/css/ace.min.css"  class="ace-main-stylesheet"

       id="main-ace-style">
    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />		<![endif]-->
    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />		<![endif]-->
    <!-- inline styles related to this page -->
    <!-- ace settings handler -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
    <script src="js/footable-0.1.js" type="text/javascript"></script>
   <script type="text/javascript" src="js/date_time.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    
    

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <!--[if lte IE 8]>  -->
		
  </head>
  <body    class="no-skin" >
   
	<?php include('menu/navmenu.php'); ?>	
	<?php include('menu/menu.php'); ?>
      
      <!-- /.navbar-container --> </div>
    

       
      <div  class="main-content">
        <div  class="main-content-inner">
          <div  class="page-content">
            <div  class="page-header" >
              <h1> Dashboard <small> <i  class="ace-icon fa fa-angle-double-right"></i>
                 Aperçu et &amp; statistiques</small> </h1>
                 <a  data-toggle="dropdown"  class="dropdown-toggle"   href="#"> </a> 
                     <span id="date_time"></span>
                          <script type="text/javascript">window.onload = date_time('date_time');</script>
                      </div>
            <!-- /.page-header -->
            <div  class="row">
              <div  class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div  class="alert alert-block alert-success"> <button  type="button"

                     class="close"  data-dismiss="alert"> </button> Bienvenue 
                     <?php echo $row_user['prenom']; ?> <?php echo $row_user['nom']; ?>
                  <strong  class="green"> dans votre espace

                     
                  </strong></div>
                <strong  class="green">
                  <div  class="row">
                                     
                     					
                    <div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													Contribution des depenses avril 2016  en % :
												</h5>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div id="piechart-placeholder"></div>

													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<div class="grid3">
															<span class="grey">
																Steg
															</span>
															<h4 class="bigger pull-right">1,255</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																 impôts
															</span>
															<h4 class="bigger pull-right">941</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																frais du transiteur
															</span>
															<h4 class="bigger pull-right">1,050</h4>
														</div>
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
					</div><!-- /.widget-box -->
					<div  class="col-sm-6">			



                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


					</div>
			
                   
                 </div>
                  <!-- /.row -->
                  <div  class="row">
                    <div  class="col-sm-5">
                      <div  class="widget-box transparent">
                       <div  class="col-sm-7 infobox-container">
                            <div  class="infobox infobox-orange2">
                               <div  class="infobox-chart"> <span  class="sparkline"  data-values="196,128,202,177,154,94,100,170,224"></span>
                               </div>
                            <div  class="infobox-data"> <span  class="infobox-data-number">62</span>
                            <div  class="infobox-content">Charges Sociales</div>
                        </div>
                        
                      </div>
                        <div  class="widget-body">
                          <div  class="widget-main no-padding">
                            
                          </div>
                      </div>
                          <!-- /.widget-main --> </div>
                        <!-- /.widget-body --> </div>
                      <!-- /.widget-box --> </div>

                    <!-- /.col --></div>
                    <div  class="col-sm-7">
                      <div  class="widget-box transparent">
                        
                        <div  class="widget-body">
                          <div  class="widget-main padding-4"> </div>
                          <!-- /.widget-main --> </div>
                        <!-- /.widget-body --> </div>
                      <!-- /.widget-box --> </div>
                    <!-- /.col --> </div>
                
                  <!-- PAGE CONTENT ENDS --> </strong></div>
              <!-- /.col --><strong  class="green"> </strong></div>
            <!-- /.row --><strong  class="green"> </strong></div>
          <!-- /.page-content --><strong  class="green"> </strong></div>
        <strong  class="green"> </strong></div>
      <!-- /.main-content --><strong  class="green">
       <?php include_once('menu/footer.php'); ?>
       
      </strong></div>
    <!-- /.main-container --><strong  class="green">
      <!-- basic scripts -->
      <!--[if !IE]> -->
      <script  src="assets/js/jquery.2.1.1.min.js"></script>
      <!-- <![endif]-->
      <!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script><![endif]-->
      <!--[if !IE]> -->
      <script  type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>
      <!-- <![endif]-->
      <!--[if IE]>
<script type="text/javascript"> window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script><![endif]-->
      <script  type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
      <script  src="assets/js/bootstrap.min.js"></script>
      <!-- page specific plugin scripts -->
      <!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>		<![endif]-->
	  
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script> 
      <script  src="assets/js/jquery-ui.custom.min.js"></script>
      <script  src="assets/js/jquery.ui.touch-punch.min.js"></script>
      <script  src="assets/js/jquery.easypiechart.min.js"></script>
      <script  src="assets/js/jquery.sparkline.min.js"></script>
      <script  src="assets/js/jquery.flot.min.js"></script>
      <script  src="assets/js/jquery.flot.pie.min.js"></script>
      <script  src="assets/js/jquery.flot.resize.min.js"></script>
      <!-- ace scripts -->
      <script  src="assets/js/ace-elements.min.js"></script>
      <script  src="assets/js/ace.min.js"></script>
      <!-- inline scripts related to this page -->
      <script  type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "Boat",  data: 38.7, color: "#68BC31"},
				{ label: "Aluminuim",  data: 24.5, color: "#2091CF"},
				{ label: "Fiber",  data: 8.2, color: "#AF4E96"},
	
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			}) ; 

</script> 



		</script> </strong>


  </body>
</html>

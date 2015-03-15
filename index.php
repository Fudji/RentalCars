<!DOCTYPE html>
<html>
    <head>накосячил
      <meta charset="UTF-8"> 
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content=""/>
      <meta name="description" content="" />
      <title><?php echo $title; ?></title>
      <!-- Bootstrap -->
      <link href="assets/system_design/css/styles.css" rel="stylesheet">
            <link href="assets/system_design/css/cab.css" rel="stylesheet">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <header class="bg">
      <script type="text/javascript" src="assets/system_design/scripts/jquery.min.js"></script>
      <script src="assets/system_design/form_validation/js/jquery.validate.min.js" type="text/javascript"></script>
      <script src="assets/system_design/form_validation/js/additional-methods.min.js" type="text/javascript"></script>
	  <?php include ('layout/header.php');?>
<div class="container padding-p-0 banner">
   <div class="row">
	       <div class="col-md-8 padding-p-r">
         <form action="welcome/passengerDetails" method="post" accept-charset="utf-8" name="online_booking_form" id="online_booking_form"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="6233b3c33a7321df427eabf4b92bad4f" />
</div>  
         <div class="trip-form">
            <div class="tab">
               <div role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs hed-bg" role="tablist">
                     <li role="presentation" class="active">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                           <div class="cabs-j"><i class="fa fa-automobile"></i> </div>
                           Лучшая цена гарантирована.                      </a>
                     </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="trip-form-con">
                           <div class="col-md-6">
                              <label> Pick-Up Location </label>
                              <input type="text"  placeholder="25th Street, San Francisco, CA, United States" class="location" id="local_pick" name="pick_up">
                              <!-- For Airports -->
                              <select name="pick_up" class="airlocation" id="airport_pick" disabled="true"  style="display: none;">
                                                                  <option value="Dothan Regional Airport">Dothan Regional Airport</option>
                                                                  <option value="Fairbanks International Airport">Fairbanks International Airport</option>
                                                                  <option value="Grand Canyon National Park Airport">Grand Canyon National Park Airport</option>
                                                               </select>
                              <input type="hidden" id="pick_type" name="pick_type" value="L"/>
                              <br><br>
                                
                              <div>
                                 <a href="javascript:void(0)" class="ilike" id="pick_airport_link" data-value="pick_airport">
                                    <div class="air-car"><i class="fa fa-plane"></i> </div>
                                    Airport 
                                 </a>
                                 <a href="javascript:void(0)" class="ilike" style="display: none;" id="pick_local_link"  data-value="pick_local">
                                    <div class="air-car"><i class="fa fa-map-marker"></i> </div>
                                    Local Address                                 </a>
                              </div>
                              							  <div class="clearfix"></div>
                           </div>
                           <div class="col-md-6">
                              <label> Drop-Of Location </label>
                              <input type="text"  placeholder="19th Street, San Francisco, CA, United States" class="location" id="local_drop" alt="general_booking" name="drop_of" >
                              <select name="drop_of" class="airlocation" id="airport_drop" style="display: none;" disabled="true">
                                                                  <option value="Dothan Regional Airport">Dothan Regional Airport</option>
                                                                  <option value="Fairbanks International Airport">Fairbanks International Airport</option>
                                                                  <option value="Grand Canyon National Park Airport">Grand Canyon National Park Airport</option>
                                                               </select>
                              <input type="hidden" id="drop_type" name="drop_type" value="L"/>
                              <br><br>
                                                            <div>
                                 <a href="javascript:void(0)" id="drop_airport_link" class="ilike"  data-value="drop_airport">
                                    <div class="air-car"><i class="fa fa-plane"></i> </div>
                                    Airport 
                                 </a>
                                 <a href="javascript:void(0)" class="ilike" style="display: none;" id="drop_local_link" data-value="drop_local">
                                    <div class="air-car"><i class="fa fa-map-marker"></i> </div>
                                    Local Address                                 </a>
                              </div>
                                                         </div>
                           <div class="col-md-3">
                                                            <label> Pick-Up Date </label>
                              <input data-beatpicker="true" class="dte" type="text" value="16-03-2015" name="moving_date" data-beatpicker-disable="{from:[2015,3,15],to:'<'}" data-beatpicker-format="['DD','MM','YYYY'],separator:'-'"  />
                           </div>
                           <div class="col-md-3">
                              <label>Pick-Up Time</label>
                              <input  id="timepicker1" name="pick_time" type="text" value="04 : 54 : PM"/>
                           </div>
                           <div class="col-md-3"><input name="waitnReturn" id="waitnReturn" 
                              type="checkbox" class="css-checkbox css-label-chcss-label-ch waitnReturn" >  
                              <label for="waitnReturn" class="css-label-ch waitnReturn" id="mt">Return journey required</label>
                           </div>
                                                      <div class="col-md-3">
                              <div class="control"></div>
                              <label class="waiting_time"> Waiting Time </label>
                              <select name="waiting_time" id="waiting_time" class="waiting_time">
<option value="0 0">Select Waiting Time</option>
<option value="20Mins 10.00">20 min (10.00)</option>
<option value="30Mins 20.00">30 min (20.00)</option>
<option value="50Mins 30.00">50 min (30.00)</option>
</select>                           </div>
                                                      <input type="hidden" name="waitingTime" id="waitingTime" value="No Waiting"/>
                           <input type="hidden" name="waitingCost" id="waitingCost" value="0"/>
                           <div class="col-md-3">
                              <input type="hidden" name="package_type" value="-" >
                              <input type="hidden" name="booking_ref" value="150315165450"/>
                              <input type="hidden" name="car_cost" id="car_cost" value="0.00"/>
                              <input type="hidden" name="total_cost" id="total_cost" value="0.00"/>
                              <input type="hidden" name="total_time" id="total_time" value="0"/>
                              <input type="hidden" name="total_distance" id="total_distance" value="0"/>
                              <input type="hidden" name="car_name" id="car_name" />
							<input type="hidden" name="check_cars" value="0" id="check_cars"  />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="hed-line"></div>
            <div class="down-form" id="journey_details" style="display: none;">
               <div  class="col-md-9">
                  <div class="scrooll" id="cars_data_list">
				  
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="location-map">
                     <a href="#"  data-toggle="modal" data-target="#myModal" > <img src="assets/system_design/images/location-map.png"/></a>	
                     One Way Journey Details: 
                     <strong id="distance_id">Distance: 1ft</strong>	<br>
                     <strong id="time_id">Time:  1 min (Approx)</strong>
                  </div>
                  <div class="book">
                     <input type="button" id="journey_cost" value="" style="display:none;" class="geta">
                     <input type="submit" style="display:none;" id="btnbooknow" value="Book Now" class="geta" >
                  </div>
               </div>
            </div>
         </div>
         </form>      </div>
		 
   </div>
</div>
</header>
<div class="scroll-up">
   <div class="container-fluid">
      <div class="container padding-p-0">
         <div class="row">
            <div class="col-md-12 padding-p-0">
               <div class="hedding-style">  </div>
               <aside class="main-hedd">HOT CARS</aside>
               <div class="hedding-style1"> </div>
            </div>
         </div>
		 
		 
         <div class="row">
            <ul class="bxslider">
                              <div class="col-md-3 wi-re">
                  <div class="first-car">
                     <div class="first-car-hed">SALOON</div>
                     <div class="first-car-img"> <img src="uploads/vehicle_images/34_saloon.png" width="100%"/> </div>
                     <div class="rl">
                        <div class="col-md-8 padding-p-r">
                           <aside class="rate">HOT Price: 7$</aside>
                           <!-- <aside class="city-sm-img"></aside> -->
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
                              <div class="col-md-3 wi-re">
                  <div class="first-car">
                     <div class="first-car-hed">HATCHBACK</div>
                     <div class="first-car-img"> <img src="uploads/vehicle_images/35_hatchback.png" width="100%"/> </div>
                     <div class="rl">
                        <div class="col-md-8 padding-p-r">
                           <aside class="rate">HOT Price: 10$</aside>
                           <!-- <aside class="city-sm-img"></aside> -->
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
                              <div class="col-md-3 wi-re">
                  <div class="first-car">
                     <div class="first-car-hed">MINIVAN</div>
                     <div class="first-car-img"> <img src="uploads/vehicle_images/40_minivan.png" width="100%"/> </div>
                     <div class="rl">
                        <div class="col-md-8 padding-p-r">
                           <aside class="rate">HOT Price: 200$</aside>
                           <!-- <aside class="city-sm-img"></aside> -->
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
                              <div class="col-md-3 wi-re">
                  <div class="first-car">
                     <div class="first-car-hed">ESTATE CAR</div>
                     <div class="first-car-img"> <img src="uploads/vehicle_images/36_estate.png" width="100%"/> </div>
                     <div class="rl">
                        <div class="col-md-8 padding-p-r">
                           <aside class="rate">HOT Price: 8$</aside>
                           <!-- <aside class="city-sm-img"></aside> -->
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
                              <div class="col-md-3 wi-re">
                  <div class="first-car">
                     <div class="first-car-hed">EXECUTIVE SALOON</div>
                     <div class="first-car-img"> <img src="uploads/vehicle_images/37_executivesaloon.png" width="100%"/> </div>
                     <div class="rl">
                        <div class="col-md-8 padding-p-r">
                           <aside class="rate">HOT Price: 15$</aside>
                           <!-- <aside class="city-sm-img"></aside> -->
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
                              <div class="col-md-3 wi-re">
                  <div class="first-car">
                     <div class="first-car-hed">VINTAGE</div>
                     <div class="first-car-img"> <img src="uploads/vehicle_images/41_vintage.png" width="100%"/> </div>
                     <div class="rl">
                        <div class="col-md-8 padding-p-r">
                           <aside class="rate">HOT Price: 100$</aside>
                           <!-- <aside class="city-sm-img"></aside> -->
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
                           </ul>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript"> 
   (function($,W,D)
   {
      var JQUERY4U = {};
   
      JQUERY4U.UTIL =
      {
          setupFormValidation: function()
          {
              //Additional Methods			
   
   
   
   		
   		//form validation rules
              $("#online_booking_form").validate({
                  rules: {
                      pick_up: {
                          required: true
                          
                      },
   				drop_of: {
                          required: true
                          
                      },
			pick_time: {
                          required: true 
                      }
                  },
   			
   			messages: {
   				pick_up: {
                          required: "Pick up location required"
                      },
   				drop_of: {
                          required: "Drop of location required"
                      },
   	pick_time: {
                          required: "Pick up time required"
                      }
   			},
                  
                  submitHandler: function(form) {
                      form.submit();
                  }
              });
          }
      }
   
      //when the dom has loaded setup form validation rules
      $(D).ready(function($) {
          JQUERY4U.UTIL.setupFormValidation();
      });
   
   })(jQuery, window, document);
   
   
   
   $(function(){
        $('.ilike').click(function(){
            var $this = $(this);
            var p1 = $this.data('value');
            changeField(p1);
        });
    });
   function changeField(ss)
   {
   if(ss=="pick_airport")
   {
   $('#local_pick').hide();
   $('#airport_pick').show();
   $('#airport_pick').attr('disabled',false);
   $('#local_pick').attr('disabled',true);
   $('#pick_airport_link').hide();
   $('#pick_type').val('A');
   $('#pick_local_link').show();
   }
   else if(ss=="drop_airport")
   {
   $('#local_drop').hide();
   $('#airport_drop').show();
   $('#airport_drop').attr('disabled',false);
   $('#local_drop').attr('disabled',true);
   $('#drop_type').val('A');
   $('#drop_airport_link').hide();
   $('#drop_local_link').show();
   
   }
   else if(ss=="pick_local")
   {
   $('#local_pick').show();
   $('#airport_pick').hide();
   $('#airport_pick').attr('disabled',true);
   $('#local_pick').attr('disabled',false);
   $('#pick_type').val('L');
   $('#pick_airport_link').show();
   $('#pick_local_link').hide();
   }
   else if(ss=="drop_local")
   {
   
   $('#local_drop').show();
   $('#airport_drop').hide();
   $('#airport_drop').attr('disabled',true);
   $('#local_drop').attr('disabled',false);
   $('#drop_type').val('L');
   $('#drop_airport_link').show();
   $('#drop_local_link').hide();
   
   
   }
   
   }
</script>
<?php include ('layout/footer.php');?>    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 

 <script src="assets/system_design/scripts/chosen.jquery.min.js"></script>
  
         <script>
$(function() {
$(".chzn-select").chosen();});
        </script>
 
<script src="assets/system_design/scripts/bootstrap.min.js"></script> 
<script src="assets/system_design/scripts/BeatPicker.min.js"></script>

    <script src="assets/system_design/scripts/timepicki.js"></script>
    <script>
    	$('#timepicker1').timepicki({increase_direction:'up'});
		$('#timepicker2').timepicki({increase_direction:'up'});
 	 
    </script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<!--script src="assets/system_design/scripts/jquery.min.js"></script--> 
<script src="assets/system_design/scripts/jquery.geocomplete.js"></script>
<script src="assets/system_design/scripts/logger.js"></script>
<script src="assets/system_design/scripts/gmap3.js"></script>
<script src="assets/system_design/scripts/bx-slider.js"></script>
<script>
   $(document).ready(function(){
   		
   		$('.bxslider').bxSlider({
   				  minSlides: 1,
   				  maxSlides: 4,
   				  slideWidth:250,
   				  slideMargin: 10,
   				   infiniteLoop: false
   				});
   		
   		
   		$(".waiting_time").hide();
   		$(".waitnReturn").hide();
       
       
     $("#waitnReturn").click(function(){
   	
   	   
   	if($('#waitnReturn').is(":checked")) {
   
   		$(".waiting_time").toggle();
   		total = parseInt($("#car_cost").val())*2;
   		money = $(".money").text();
   		symbol = money.charAt(1);
   		$("#journey_cost").val(symbol+total.toFixed(2));
   		$("#total_cost").val(total);
   	
   	} else {
       
   		$(".waiting_time").toggle();
   		value = parseInt($("#car_cost").val());
   		money = $(".money").text();
   		symbol = money.charAt(1);
   		$(".waiting_time").val('0 0');
   		ins = $('#waiting_time').val().split(' ');
   		$('#waitingTime').val(ins[0]);
   		$('#waitingCost').val(ins[1]);
   		$("#journey_cost").val(symbol+value.toFixed(2));
   		$("#total_cost").val(value);
   		
   	}
   	
         
     });
                  
              
     $("#waiting_time").change(function(){
   	var car_cost = 0;
   	ins = $('#waiting_time').val().split(' ');
   	$('#waitingTime').val(ins[0]);
   	$('#waitingCost').val(ins[1]);
   	total = parseInt($("#car_cost").val())*2+parseInt(ins[1]);
   	money = $(".money").text();
   	symbol = money.charAt(1);
   	$("#journey_cost").val(symbol+total.toFixed(2));
   	$("#total_cost").val(total);
     });
   			Pickpoint = '';
   			Droppoint = '';
   			Pickup_time = '';
   	   
   		$(".location").geocomplete({
             country: 'us'
           }).bind("geocode:result", function(event, result){
   		$(this).val(JSON.stringify(result.formatted_address));		
   			
   			if($('#pick_type').val()=='A')
   			{
   				Pickpoint = $('#airport_pick').val();
   			}
   			else if($('#pick_type').val()=='L')
   			{
   				Pickpoint = $('#local_pick').val();	
   			}
   			if($('#drop_type').val()=='A')
   			{
   				Droppoint = $('#airport_drop').val();
   			}
   			else if($('#drop_type').val()=='L')
   			{
   				
   				Droppoint = $('#local_drop').val();
   			}
   				page = $('#local_drop').attr("alt");
   		
   		Pickup_time = $('#timepicker1').val();
   			if(Pickpoint!='' && Droppoint!='') {
   				get_map(Pickpoint,Droppoint,Pickup_time,page);		
   				$('#journey_details').fadeIn(1500);		
   			}
     });
   		
   		
   		
   		//AIRPORTS DISTANCE CALCULATION
   			$(".airlocation").change(function(){
   			Pickpoint = '';
   			Droppoint = '';
   			Pickup_time = '';
   		
   			if($('#pick_type').val()=='A')
   			{
   				Pickpoint = $('#airport_pick').val();
   			}
   			else if($('#pick_type').val()=='L')
   			{
   				Pickpoint = $('#local_pick').val();	
   			}
   			if($('#drop_type').val()=='A')
   			{
   				Droppoint = $('#airport_drop').val();
   			}
   			else if($('#drop_type').val()=='L')
   			{
   				Droppoint = $('#local_drop').val();
   			}
			
			Pickup_time = $('#timepicker1').val();
   			page = $('#local_drop').attr("alt");
   			if(Pickpoint!='' && Droppoint!='') { 
   				get_map(Pickpoint,Droppoint,Pickup_time,page);
   				$('#journey_details').fadeIn(1500);		
   			}
   		
   		});
   		//AIRPORTS COST CALCULATION END
   		
   });
   
   function setActive(id) {
   	
   	numid = id.split('_')[1];
   	$('#cars_data_list div').removeClass('active');
   	$('#'+id).parent().addClass('scrool-cab active');
   	$('#btnbooknow').fadeIn(300);
   	$('.waitnReturn').fadeIn(300);
   	$('#check_cars').val(1);
   	carCost = $('#cab_'+numid).val();
   	
   	$('#car_cost').val(carCost.split("_")[1]);
   	$('#total_cost').val($('#car_cost').val());
   	$("#car_name").val($('#cname_'+numid).val());
   	$("#journey_cost").val($('#cost_'+numid).text()).fadeIn(300);
   }
   
   
   function get_map(PickLocation,DropLocation,Pickup_time,page) {
   $("#map_canvas").gmap3({ 
    clear: {},
   
     getroute:{
       options:{
           origin:PickLocation,
           destination:DropLocation,
           travelMode: google.maps.DirectionsTravelMode.DRIVING,
   		/*ENABLE IT IF MILES*/
   				
       },
       callback: function(results){
   	var dist0 = results.routes[0].legs[0].distance.text;
   	 var dist=dist0.split(" ")[0];
   	var time = results.routes[0].legs[0].duration.text+" (Approx)"; 
   	
   	$('#time_id').text(time);
   	$("#total_time").val(time);
   	$('#distance_id').text(dist0);
   	$('#total_distance').val(dist0);
   	
   	 $.ajax({			 
   
   			 type: 'POST',			  
   
   			 url: "bookingsystem/getVechicles",
   			 data: 'csrf_test_name=6233b3c33a7321df427eabf4b92bad4f&distance='+dist+','+'&Pickup_time='+Pickup_time+'&page='+page,
   			 async: false,
   			 cache: false,			 
   			 success: function(data) {			
   			 $('#cars_data_list').html(data);			 
   			 }		  		
   			
   			});
   	
   	
         if (!results) return;
         $(this).gmap3({ 
   	    map:{
             options:{
   					center: [17.4689533,78.3891002], //42.032974, -105.482483
                       zoom: 13,
                       animation: google.maps.Animation.DROP
   
             }
           },
         
         });
       }
     }
   });
   }
</script> 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Route Map</h4>
         </div>
         <div class="modal-body">
            <div id="map_canvas" style="height:500px;"> </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->

<!--Date Table--> 
	<!--Date Table--> 
	


 <script type="text/javascript" language="javascript" class="init">

 
 
 function setActiveOnlinePackage(id) {
	numid = id.split('_')[1];
	$('#cars_data_list div').removeClass('active');
	$('li').removeClass('active');
	$('#'+id).parent().closest('ul').addClass('active');
	$('#'+id).parent().parent().addClass('car-sel-bx active');
	
}

	</script>
	<!--Slider--> 
	<!--Slider--> 
 
</body>
</html>


</div>







<script>

 $( document ).ready(function() {
	 
	 
	 
	 
	 
	 
	$("input#search").live("keyup", function(e) {
		
		
		if($("#results").is(":hidden")){
			 $("#results").slideDown("slow");
			 $("#aboutdiv").slideUp("slow");
			 $("#contactdiv").slideUp("slow");

		}
		
		
		var search_string = $(this).val();
		
		if(search_string !== ''){
			$.ajax({
				type: "POST",
				url: "/IP/inc/search.php",
				data: { search: search_string },
				cache: false,
				success: function(html){
					$("div#results").html(html);
				}
			});
		}
		else{
			 $("#contactdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#aboutdiv").slideUp("slow");
		}
		return false;
	
	
	});
	
	
	
	
	
	
	
	
	
	
	/*champions menu drop down and slide up. .stop-true-true used to cancel multiple events of hover over link */
	$('#ch').hover(function(){
		if($('.about').is(":visible")){
			$("#chm").css("top", "313px");
			$('#chm').stop(true,true).slideDown();
		
		}else{
			$("#chm").css("top", "50px");
			$('#chm').stop(true,true).slideDown('slow');
		}
   },
   function(){
      $('#chm').stop(true,true).slideUp('slow');	
		});﻿
		
	/* Original drop down menu code
		$("#ch").hover(function(){
			$('#contactdiv').slideUp('slow');
			$('#aboutdiv').slideUp('slow');
		 $('#chm').stop(true,true).slideDown('slow');
	 },
	 function() {
		 $('#chm').stop(true,true).slideUp('slow');
	 } 
     );  
	 */
	 
	 
	 
	 /* drop down for latest articles links */
	/* $("#lada").click(function(){
		 if($("#lad").is(":hidden")){
			 $("#lad").slideDown("slow");
		 }
		 
		 else{
			 $("#lad").slideUp("slow");
		 }	 	 
	 }); */
	 
	 
	 
	 
	 
	 /*show more video details function*/
	  $("#show").click(function(){
		 if($("#showmore").is(":hidden")){
			 $("#showmore").slideDown("slow");
			 $("#show").text("Show Less");
		 }
		 
		 else{
			 $("#showmore").slideUp("slow");
			 $("#show").text("Show Less");
		 }	 	 
	 });
	 
	 
	 
	 
	 
	 
	 
	 /* drop down for about link */
	 $("#about").click(function(){
		 if($("#aboutdiv").is(":hidden")){
			 $("#contactdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#aboutdiv").slideDown("slow");
			 $("#dispchamp").slideUp("slow");
		 }
		 
		 else{
			 $("#contactdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#aboutdiv").slideUp("slow");
		 }	 	 
	 });
 
 
 
 
 
	 /* drop down for contact link */
	 $("#contact").click(function(){
		 if($("#contactdiv").is(":hidden")){
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideDown("slow");
			 $("#dispchamp").slideUp("slow");
		 }
		 
		 else{
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
		 }	 
	 });
 
 
 
	/* Close free champion info */
	 $("#close").click(function(){
		 $(this).fadeOut('slow');
		 $("div#infohere").slideUp("slow");
	 });   
 
 
 
 
 /* Figure out how to fix this. #aschamp,etc. are part of #ch. When you click any part of the menu
 below function always excutes 
		$("#ch").click(function(){
		 if(!($("#dispchamp").is(":hidden"))){
		 
			 $("#dispchamp").slideUp("slow");
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("mainbody").fadeIn("slow");
		} 
	 });
	 */
	 
	/* Drop down for assassins */ 
	 	$("#aschamp").click(function(){
		 if($("#dispchamp").is(":hidden")){
			 
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampall").hide();
			 $("#dispchampfi").hide();
			 $("#dispchampmag").hide();
			 $("#dispchampmar").hide();
			 $("#dispchampas").show();
			 $("#dispchamp").slideDown("slow");			 
		 }
		 
		 else if(($("#dispchampall").is(":hidden"))&&($("#dispchampfi").is(":hidden"))&&($("#dispchampmag").is(":hidden"))&&($("#dispchampmar").is(":hidden"))){
			 $("#dispchamp").slideUp("slow");
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampas").slideUp("slow");
		 }	 
		 
		 else{
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");	
			 $("#dispchampall").slideUp("fast");
			 $("#dispchampfi").slideUp("fast");
			 $("#dispchampmag").slideUp("fast");
			 $("#dispchampmar").slideUp("fast");
			 $("#dispchampas").slideDown("slow");
		 }
	 });
	 
	 
	 
	 
	 
	/* Drop down for fighters */ 
	 	$("#fichamp").click(function(){
		 if($("#dispchamp").is(":hidden")){
			 
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampall").hide();
			 $("#dispchampas").hide();
			 $("#dispchampmag").hide();
			 $("#dispchampmar").hide();
			 $("#dispchampfi").show();
			 $("#dispchamp").slideDown("slow");			 
		 }
		 
		 else if(($("#dispchampall").is(":hidden"))&&($("#dispchampas").is(":hidden"))&&($("#dispchampmag").is(":hidden"))&&($("#dispchampmar").is(":hidden"))){
			 $("#dispchamp").slideUp("slow");
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampfi").slideUp("slow");
		 }	 
		 
		 else{
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");	
			 $("#dispchampall").slideUp("fast");
			 $("#dispchampas").slideUp("fast");
			 $("#dispchampmag").slideUp("fast");
			 $("#dispchampmar").slideUp("fast");
			 $("#dispchampfi").slideDown("slow");
		 }
	 });	 
	 
	 
	

	/* Drop down for Mages */ 
	 	$("#magchamp").click(function(){
		 if($("#dispchamp").is(":hidden")){
			 
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampall").hide();
			 $("#dispchampas").hide();
			 $("#dispchampfi").hide();
			 $("#dispchampmar").hide();
			 $("#dispchampmag").show();
			 $("#dispchamp").slideDown("slow");			 
		 }
		 
		 else if(($("#dispchampall").is(":hidden"))&&($("#dispchampas").is(":hidden"))&&($("#dispchampfi").is(":hidden"))&&($("#dispchampmar").is(":hidden"))){
			 $("#dispchamp").slideUp("slow");
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampmag").slideUp("slow");
		 }	 
		 
		 else{
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");	
			 $("#dispchampall").slideUp("fast");
			 $("#dispchampfi").slideUp("fast");
			 $("#dispchampas").slideUp("fast");
			 $("#dispchampmar").slideUp("fast");
			 $("#dispchampmag").slideDown("slow");
		 }
	 });	
	 
	 
	 
	 
	/* Drop down for marksmen */ 
	 	$("#marchamp").click(function(){
		 if($("#dispchamp").is(":hidden")){
			 
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampall").hide();
			 $("#dispchampas").hide();
			 $("#dispchampmag").hide();
			 $("#dispchampfi").hide();
			 $("#dispchampmar").show();
			 $("#dispchamp").slideDown("slow");			 
		 }
		 
		 else if(($("#dispchampall").is(":hidden"))&&($("#dispchampas").is(":hidden"))&&($("#dispchampmag").is(":hidden"))&&($("#dispchampfi").is(":hidden"))){
			 $("#dispchamp").slideUp("slow");
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampmar").slideUp("slow");
		 }	 
		 
		 else{
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");	
			 $("#dispchampall").slideUp("fast");
			 $("#dispchampfi").slideUp("fast");
			 $("#dispchampmag").slideUp("fast");
			 $("#dispchampas").slideUp("fast");
			 $("#dispchampmar").slideDown("slow");
		 }
	 });	 
	 
	 
	 
	 
	/* Drop down for all */ 
	 	$("#allchamp").click(function(){
		 if($("#dispchamp").is(":hidden")){
			 
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampas").hide();
			 $("#dispchampfi").hide();
			 $("#dispchampmag").hide();
			 $("#dispchampmar").hide();
			 $("#dispchampall").show();
			 $("#dispchamp").slideDown("slow");			 
		 }
		 
		 else if(($("#dispchampfi").is(":hidden"))&&($("#dispchampas").is(":hidden"))&&($("#dispchampmag").is(":hidden"))&&($("#dispchampmar").is(":hidden"))){
			 $("#dispchamp").slideUp("slow");
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");
			 $("#dispchampall").slideUp("slow");
			 
		 }	 
		 
		 else{
			 $("#aboutdiv").slideUp("slow");
			 $("#results").slideUp("slow");
			 $("#contactdiv").slideUp("slow");	
			 $("#dispchampas").slideUp("fast");
			 $("#dispchampfi").slideUp("fast");
			 $("#dispchampmag").slideUp("fast");
			 $("#dispchampmar").slideUp("fast");
			 $("#dischampall").slideDown("slow");
		 }
	 });
 
 
 
 });

 
 
 /* function called from freechampions.php. Sends name to championinfo.php */
 function championinfo(name){
	 $.post('/IP/inc/championinfo.php', {name: name}, function(data){
		 if($("div#infohere").is(":hidden")){
			  $('div#infohere').slideDown("slow");
		      $("div#infohere").html(data); 
			  $("#close").fadeIn('slow');
		 }
		 else{
			 $("div#infohere").html(data);
		 }
	 });	 
 }
 
 
</script>






</body>
</html>
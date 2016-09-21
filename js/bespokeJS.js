<!-- Analytics tracking -->

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-72709226-1', 'auto');
ga('send', 'pageview');



//set the twitter height variable
$(document).ready(function(){
  if($("body").hasClass("ticketPage") || $("body").hasClass("homePage") || $("body").hasClass("gallery") ){
//	alert('IS home page or ticket page');
  } else {
	  $(".twitter-timeline").attr("height", "50px")
  };
});


  
    $(document).ready(function(){
    	
    	//submit contact form
    	$('#contactFormSubmit').click(function(){
    		//alert('click function');
    		
    		$('#CFFailMessage').hide();
        	$('#CFSuccessMessage').hide();

	    	var datastring = $("#formContact").serialize();
        	
        	$.ajax({
        		type: "POST",
        		url: "postContact.php",
        		data: datastring,
        		cache: false,
        		dataType: "text",
        		beforeSend: function() {
        			$("#contactLoading").show();
        	    },
        		success:  function(response)
        		{
        			$("#contactLoading").hide();
        			if (response.indexOf("Error") > -1) {
    	    			$('#CFFailMessage').html(response).show();
    	    		} else {
    					$('#CFSuccessMessage').html(response).show();
    				}	
        		}	    		
	    	});
	    	return false;
    		

    	}); //end click function submit contact form
    	
    	//send new mailing list contact
    	$('#mailingListSubmit').click(function(){

        	$('#failMessage').hide();
        	$('#successMessage').hide();

        	var datastring = $("#frmMailingList").serialize();
        	
        	$.ajax({
        		type: "POST",
        		url: "mailingList.php",
        		data: datastring,
        		cache: false,
        		dataType: "text",
        		beforeSend: function() {
        			$("#SBMLLoading").show();
        	    },
        		success:  function(response)
        		{
        			$("#SBMLLoading").hide();
        			if (response.indexOf("Error") > -1) {
    	    			$('#failMessage').html(response).show();
    	    			$('.mailingListInput').focus();
    	    			$('.mailingListInput').attr("disabled", false);
    	    			$('.mailingListSubmit').attr("disabled", false);
    	    		} else {
    					$('#successMessage').html(response).show();
    				}	
        		}	    		
	    	});
	    	return false;
    	 
    	});

    	//submit mobile mailing list contact email
    	$('#mobileMailingListSubmit').click(function(){

        	$('#mobileFailMessage').hide();
        	$('#mobileSuccessMessage').hide();
    	 
        	var datastring = $("#frmMobileMailingList").serialize();
        	
        	$.ajax({
        		type: "POST",
        		url: "mailingList.php",
        		data: datastring,
        		cache: false,
        		dataType: "text",
        		beforeSend: function() {
        			$("#MMLLoading").show();
        	    },
        		success:  function(response)
        		{
        			$("#MMLLoading").hide();
        			if (response.indexOf("Error") > -1) {	
    	    			$('#mobileFailMessage').html(response).show();
    	    			$('#mobileMailingListInput').focus();
    	    			$('#mobileMailingListInput').attr("disabled", false);
    	    			$('#mobileMailingListSubmit').attr("disabled", false);
    	    		} else {
    					$('#mobileSuccessMessage').html(response).show();
    				}	
        		}	    		
	    	});
	    	return false;
    	 
    	}); //close click function
    	
    });
    

    $(window).load(function(){
    	
    	var timesRun = 0;
    	var interval = setInterval(function(){
    		timesRun += 1;
    		if (timesRun === 20){
    			clearInterval(interval);
    			return;
    		}
	    	  //make columns equal size
	        $("#rightCol").height($("#leftCol").height());	
    	
    	}, 500);
    });
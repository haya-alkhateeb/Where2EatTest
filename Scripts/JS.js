//called when suggest button is pressed
function suggest_Restaurant_pressed(){
	
	//Get user Location
	if (navigator.geolocation) {
		//Get user Location
        navigator.geolocation.getCurrentPosition(getSuggestion);
    } else { 
        alert("Geolocation is not supported by this browser.");
}}

//Get suggestion
function getSuggestion(position) {
		//first part of the link is a proxy 
		$.getJSON("https://cors-anywhere.herokuapp.com/"+"https://wainnakel.com/api/v1/GenerateFS.php?uid="+position.coords.latitude+","+
		position.coords.longitude+"&get_param=value",load_suggestionInfo);            
}

//called by getSuggestion()
function load_suggestionInfo(suggestedresult){
		
		//Display name, rate and category
		$("#restaurantName").text(suggestedresult.name);
		$("#restaurantRate").prepend(suggestedresult.rating);
		$("#restaurantCategory").text(suggestedresult.cat);
		
		//Get lat & lon to use them for google map call 
		$("#lat").text(suggestedresult.lat);
		$("#lon").text(suggestedresult.lon);
		$("#lat").hide();
		$("#lon").hide();
		
		//Get images
		//1)Convert from object to string
		var SuggestedresultString= JSON.stringify(suggestedresult);
		//2)Parse to get rid of the backslash in the url
		var SuggestedresultParsed = $.parseJSON(SuggestedresultString);		
		//3)Loop through all images and display them
		$(SuggestedresultParsed.image).each(function(i){
			var url = this;
			//First iteration add class='active'
			if(i==0)
			{	//Add indicator
				$(".carousel-indicators").append("<li data-target='#restaurantCarousel' data-slide-to='"+i+"' class='active'></li>");
				//Add image
				$(".carousel-inner").append("<div class='item active'><img  src='"+url+"'></div>");
			}
			else
			{	//Add indicator
				$(".carousel-indicators").append("<li data-target='#restaurantCarousel' data-slide-to='"+i+"'></li>");
				//Add image
				$(".carousel-inner").append("<div class='item '><img  src='"+url+"'></div>");}
		});
		
		//Get foursquare link and link it to the restaurant title
		$("#restaurantName").wrap("<a href='"+suggestedresult.link+"'target='_blank'></a>")
};

//called when open in google maps button is pressed
function openGoogleMap(lat,lon){					
		var lat = lat;
		var lon = lon;
		var url = "https://www.google.com/maps/search/?api=1&query="+lat+","+lon;
		window.open(url);
};			
			
			
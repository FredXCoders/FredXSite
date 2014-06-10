function getFeedData(url){
  jQuery.get(url, function(data) {
      var jQueryxml = jQuery(data);
      var output;
      jQueryxml.find("item").each(function() {
	  var jQuerythis = jQuery(this),
	      item = {
		  title: jQuerythis.find("title").text(),
		  link: jQuerythis.find("link").text(),
		  description: jQuerythis.find("description").text(),
		  date: jQuerythis.find("pubDate").text(),
		  author: jQuerythis.find("author").text()
	  }
	  output = '<h1>'+item.title+'</h1>'+'<p>Posted on '+item.date+' - '+item.description
	    +'</p>'+'<p><a class="btn btn-large btn-primary" href="'+item.link+'"  title="'+item.title
	    +'">'+item.title+'</a></p>';
	  
	  console.log("Item: " + output);
	  return false;
      });
      return output;
  });
}

jQuery(document).ready(function(){
  jQuery("#blogSectOne").html(getFeedData("/dojo/?cat=9&feed=rss2")); 
  jQuery("#blogSectTwo").html(getFeedData("/dojo/?cat=2&feed=rss2")); 
  jQuery("#blogSectThree").html(getFeedData("/dojo/?cat=10&feed=rss2")); 
});

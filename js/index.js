
var jq = jQuery;

jq(document).ready(function(){
	
	

    jq("#but_prev").click(function () {
      carousel.prev();
    });
    jq("#but_pause").click(function () {
      carousel.pause();
    });
    jq("#but_start").click(function () {
      carousel.start();
    });
    jq("#but_next").click(function () {
      carousel.next();
    });
	
	jq('.sn-carosel-nav').click(function(){
		jq('.sn-enroll-form-header h5').html('Enroll Now');
		snMakeActive(this);
		snGetCarouselHtml(this);
	});
	
	jq('.sn-enroll-now-btn').live('click',function(){
		var dummy_data = jq(this).attr('data-text');
		jq('.sn-enroll-form-header h5').html('Enroll Now '+ dummy_data);
		$('#inputFname').focus();
	});
	
	jq('.sn-carousel-init').trigger('click');
	
	jq('#sn-enroll-form').validate({
		errorClass:'error-block',
		errorElement:'span',
		errorPlacement:function(error,element){
			element.parents('.controls').find('div.error-text').append(error);
			element.parents('.controls').addClass('error-block');
			
		}
	});
	
});

function snMakeActive(snNavElement)
{
	if(!jq(snNavElement).parent().hasClass('active'))
	{
		jq(snNavElement).parent().prevAll().removeClass('active');
		jq(snNavElement).parent().nextAll().removeClass('active');
		jq(snNavElement).parent().addClass('active');	
	}
}

function snGetCarouselHtml(snNavElement)
{
	var id = jq(snNavElement).attr('data-id');
	var request = jq.ajax({
		
		url: "inc/ajax-html.php",
		  type: "POST",
		  data: {id : id},
		  dataType: "json"
		});
		 
		request.done(function(response) {
			
			jq('.sn-carosel-wrapper').empty().append(response);
			jq('.sn_'+id).featureCarousel({
		    	largeFeatureWidth:0.5,
		    	largeFeatureHeight:0.5,
		    	captionBelow:true,
		    	trackerIndividual:false,
		    	trackerSummation:false,
		    	stopOnHover:true
		    });
		});
		 
		request.fail(function(jqXHR, textStatus) {
		  alert( "Request failed: " + textStatus );
		});
}
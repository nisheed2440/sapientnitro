var jq = jQuery;

var jsonData = [
				{
					age:24,
					name:'Jennifer'
				},
				{
					age:18,
					name:'Kate'
				},
				{
					age:25,
					name:'David'
				},
				{
					age:25,
					name:'Mark'
				},
];

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
	
	snTableData(jsonData);
	
	jq('#sn-enroll-form').validate({
		errorClass:'error-block',
		errorElement:'span',
		errorPlacement:function(error,element){
			element.parents('.controls').find('div.error-text').append(error);
			element.parents('.controls').addClass('error-block');
			
		}
	});
	
	jq('.sn-sort-table-data').click(function(){
		var sort_order = jq(this).attr('data-sort');
		var sort_key	= jq(this).attr('data-key');
		var new_order 	= (sort_order == 'desc')?'asc':'desc';
		var icon_dir 	= (sort_order == 'desc')?'down':'up';
		jq(this).attr('data-sort',new_order);
		jq(this).prevAll().find('i.icon').remove();
		jq(this).nextAll().find('i.icon').remove();
		jq(this).find('i.icon').remove();
		jq(this).append('<i class="icon icon-arrow-'+ icon_dir +'"></i>');
		var sortedData  =  snSortByKey(jsonData, sort_key , sort_order);
		snTableData(sortedData);
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

function snTableData(jsontest){
	
	var tb_rows = '';
	jq.each(jsontest, function(i, item) {
		tb_rows += '<tr><td class="sn-tb-left">'+ jsontest[i].name +'</td><td class="sn-tb-right">'+ jsontest[i].age +'</td></tr>';
	    });
	jq('.sn-sort-table tbody').empty().append(tb_rows);
};

function snSortByKey(array, key , direction) {
    return array.sort(function(a, b) {
        var x = a[key]; var y = b[key];
        if(direction == 'desc')
        	return ((x > y) ? -1 : ((x < y) ? 1 : 0));
        else
        	return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });
}
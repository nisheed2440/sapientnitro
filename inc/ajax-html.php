<?php

function sn_carousel_header($cid){
	
	$html = '<div class="carousel-container">';
	$html .= '<div id="carousel" class="'.$cid.'">';
	return $html;
}
function sn_corousel_body($imgsrc,$imgalt,$testtext)
{
	$html = '<div class="carousel-feature">';
	$html .= '<a href="#"><img class="carousel-image" alt="'.$imgalt.'" src="'.$imgsrc.'"></a>';
	$html .= '<div class="carousel-caption">';
	$html .= '<p><button class="btn btn-small sn-enroll-now-btn" data-text="'.$testtext.'" type="button">Enroll Now</button></p>';
	$html .= '</div></div>';
	return $html;
}

function sn_corousel_body_loop($items_array){
	
	$html = '';
	foreach ($items_array as $item)
	{
		$html .= sn_corousel_body($item['src'],$item['alt'],$item['test']);
	}
	return $html;
}

function sn_carousel_footer(){
	$html = '</div><!-- End #carousel -->';	
	$html .= '<div id="carousel-left"><img src="img/arrow-left.png"/></div>';
	$html .= '<div id="carousel-right"><img src="img/arrow-right.png" /></div>';
	$html .= '</div><!-- End .carousel-container -->';
	return $html;
}

function sn_carousel_meta($title,$desc)
{
	$html = '<div class="sn-carousel-meta">';
	$html .= '<h4>'.$title.'</h4>';
	$html .= '<p>'.$desc.'</p>';
	$html .= '</div>';
	return $html;
}

function sn_dtp_html(){
	
	header('Content-Type: application/json');	
	$citems = array(
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample2.jpg', 'test' => 'Ut enim ad minim veniam'),
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample3.jpg', 'test' => 'quis nostrud exercitation'),
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample4.jpg', 'test' => 'labore et dolore magna aliqua'),
			);
	
	$cmetatitle = 'Sapient Nitro: Distinguished Technology Program';
	$cmetadesc  = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat';
	
	$chtml = sn_carousel_header('sn_dtp');
	$chtml .= sn_corousel_body_loop($citems);
	$chtml .= sn_carousel_footer();
	$chtml .= sn_carousel_meta($cmetatitle,$cmetadesc);
	
	
	echo json_encode($chtml);
	exit();		
}

function sn_de_html(){
	header('Content-Type: application/json');	
	$citems = array(
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample5.jpg', 'test' => 'Ut enim ad minim veniam'),
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample2.jpg', 'test' => 'quis nostrud exercitation'),
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample1.jpg', 'test' => 'labore et dolore magna aliqua'),
			);
	
	$cmetatitle = 'Sapient Nitro: Domain Expertise';
	$cmetadesc  = 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident';
	
	$chtml = sn_carousel_header('sn_de');
	$chtml .= sn_corousel_body_loop($citems);
	$chtml .= sn_carousel_footer();
	$chtml .= sn_carousel_meta($cmetatitle,$cmetadesc);
	
	
	echo json_encode($chtml);
	exit();	
}


function sn_ms_html(){
	header('Content-Type: application/json');	
	$citems = array(
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample5.jpg', 'test' => 'Ut enim ad minim veniam'),
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample3.jpg', 'test' => 'quis nostrud exercitation'),
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample4.jpg', 'test' => 'labore et dolore magna aliqua'),
			);
	
	$cmetatitle = 'Sapient Nitro: Mobile Solutions';
	$cmetadesc  = 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus';
	
	$chtml = sn_carousel_header('sn_ms');
	$chtml .= sn_corousel_body_loop($citems);
	$chtml .= sn_carousel_footer();
	$chtml .= sn_carousel_meta($cmetatitle,$cmetadesc);
	
	
	echo json_encode($chtml);
	exit();
}


function sn_h5c_html(){
	
	header('Content-Type: application/json');	
	$citems = array(
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample5.jpg', 'test' => 'Ut enim ad minim veniam'),
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample3.jpg', 'test' => 'quis nostrud exercitation'),
			array('alt' => 'Lorem ipsum', 'src' => 'img/sample4.jpg', 'test' => 'labore et dolore magna aliqua'),
			);
	
	$cmetatitle = 'Sapient Nitro: HTML5 Canvas';
	$cmetadesc  = 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus';
	
	$chtml = sn_carousel_header('sn_h5c');
	$chtml .= sn_corousel_body_loop($citems);
	$chtml .= sn_carousel_footer();
	$chtml .= sn_carousel_meta($cmetatitle,$cmetadesc);
	
	
	echo json_encode($chtml);
	exit();
}


$carousel_id = $_POST['id'];
switch($carousel_id)
{

	
	case 'de': sn_de_html();
	break;

	case 'ms': sn_ms_html();
	break;
	
	case 'h5c': sn_h5c_html();
	break;
	
	case 'dtp': sn_dtp_html();
		default: sn_dtp_html();
		break;
}
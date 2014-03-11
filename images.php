<?php
	class Images{
		
		private $images = array();
		
		function __construct($imgs = null){
			if($imgs != null){
				foreach($imgs as $image):
					array_push($images, $image);
				endforeach;
			}
		}
		
		function getImageSize(){
			
		}
	}
?>
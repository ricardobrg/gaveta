<?php

function brg_types_remove_metabox(){
	$post_types = get_post_types();
	foreach($post_types as $post_type){
		remove_meta_box('types-information-table',$post_type,'normal');
	}	
}
add_action( 'add_meta_boxes' , 'brg_types_remove_metabox' );

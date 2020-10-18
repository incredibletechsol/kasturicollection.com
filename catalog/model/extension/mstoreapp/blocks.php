<?php
class ModelExtensionMstoreappBlocks extends Model {

	public function getBlocks($id) {
		
 		 	$sql = "SELECT 
			id,
            name,
            parent_id,
            block_type,
            image_url,
            image_width,
            image_height,
            link_id,
            link_type,
            sort_order,
            status,
            concat(margin_top,margin_top_dimension,' ',margin_right,margin_right_dimension,' ',margin_bottom,margin_bottom_dimension,' ',margin_left,margin_left_dimension) as margin,
            concat(padding_top,padding_top_dimension,' ',padding_right,padding_right_dimension,' ',padding_bottom,padding_bottom_dimension,' ',padding_left,padding_left_dimension) as padding,
            bg_color,
            concat(border_radius,border_radius_dimension) as border_radius,
            layout,
            layout_grid_col,
            shape,
            header_align,
            text_color,
            card_style,
            end_time 

            FROM " . DB_PREFIX . "mstoreapp_blocks  where status='1' and parent_id = '" . (int)$id . "' ORDER BY sort_order";

            $query = $this->db->query($sql);

            return $query->rows;
			
	}

	public function getsubChildren($id) {
 		 
 		 	$sql = "SELECT 
			id,
            name,
            parent_id,
            block_type,
            image_url,
            image_width,
            image_height,
            link_id,
            link_type,
            sort_order,
            status,
            concat(margin_top,margin_top_dimension,' ',margin_right,margin_right_dimension,' ',margin_bottom,margin_bottom_dimension,' ',margin_left,margin_left_dimension) as margin,
            concat(padding_top,padding_top_dimension,' ',padding_right,padding_right_dimension,' ',padding_bottom,padding_bottom_dimension,' ',padding_left,padding_left_dimension) as padding,
            bg_color,
            concat(border_radius,border_radius_dimension) as border_radius,
            layout,
            layout_grid_col,
            shape,
            header_align,
            text_color,
            card_style,
            end_time 

            FROM " . DB_PREFIX . "mstoreapp_blocks  where status='1' and parent_id = '" . (int)$id . "' ORDER BY sort_order";

            $query = $this->db->query($sql);

            return $query->rows;

	}

	public function getAllBlocks() {
		
 		$sql = "SELECT * FROM " . DB_PREFIX . "mstoreapp_blocks";

            $query = $this->db->query($sql);

            return $query->rows;
			
	}


	
}

<?php
/**
 * Created by PhpStorm.
 * User: Hardner07@gmail.com
 * Date: 6/21/2019
 * Time: 6:46 PM
 */

class Category_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_categories()
	{
		return $this->db->query("SELECT * FROM categories 
		WHERE category_id IN (SELECT child_cat_id FROM category_categories WHERE parent_cat_id = 0)")->result();
	}

	public function get_subcategories($category_id)
	{
		return $this->db->query("SELECT * FROM subcategories WHERE category_id = $category_id")->result();
	}
}

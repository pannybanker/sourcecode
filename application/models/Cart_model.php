<?php

class Cart_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function retrieve_products() {
        $query = $this->db->get('products'); // Select the table products
        return $query->result_array(); // Return the results in a array.
    }

    function retrieve_temp_cart($id) {
        $this->db->where('member_id', $id);
        $query = $this->db->get('dal_temp_cart'); // Select the table products
        return $query->result_array(); // Return the results in a array.
    }

    function get_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('products');
        return $query->result_array();
    }

    // Add an item to the cart
    function validate_after_confirm_add_cart_item($ids = array(), $qty = array()) {
        //return $ids;
        $id = $ids; // Assign posted product_id to $id
        $cty = $qty; // Assign posted quantity to $cty
        // $data = $this->db->get_where('product_id',$ids);
        // $this->db->where_in('columnname',$data);
        // $this->db->where('code !=','B');
        //$query =  $this->db->get();
        // print_r($ids);
        // echo "<br><br><br> qty ";
        // print_r($qty);



        $query = array();
        if (count($ids) > 0) {
            $query = $this->db->query("SELECT * FROM products 
     WHERE id IN (" . implode(',', $ids) . ")")->result_array();
        }
        // $this->db->where('id', $id); // Select where id matches the posted id
        // $query = $this->db->get('products', 1); // Select the products where a match is found and limit the query by 1
        // Check if a row has matched our product id
        if (count($query) > 0) {
            $i = 0;
            // We have a match!
            foreach ($query as $key => $value) {
                // print_r($cty);
                // Create an array with product information
                $data = array(
                    'id' => $value['id'],
                    'qty' => $cty[$i],
                    'price' => $value['price'],
                    'name' => $value['name']
                );
                $i = $i + 1;
                // Add the data to the cart using the insert function that is available because we loaded the cart library
                $this->cart->insert($data);
            }
            // return $data; 
            return TRUE; // Finally return TRUE
        } else {
            // Nothing found! Return FALSE!
            return FALSE;
        }
    }

    // Add an item to the cart
    function validate_add_cart_item() {
        $this->cart->destroy();
        $id = $this->input->post('product_id'); // Assign posted product_id to $id
        $cty = $this->input->post('quantity'); // Assign posted quantity to $cty

        $this->db->where('pckgtype_id', $id); // Select where id matches the posted id
        $query = $this->db->get('package_type')->result_array(); // Select the products where a match is found and limit the query by 1

        $data = array(
            'id' => $id,
            'qty' => 12,
            'price' => $query[0]['pckgtype_price'],
            'name' => $query[0]['pckgtype_name']
        );

        // Add the data to the cart using the insert function that is available because we loaded the cart library

        $this->cart->insert($data);
        return TRUE;
    }

    // Updated the shopping cart
    function validate_update_cart() {

        // Get the total number of items in cart
        $total = $this->cart->total_items();
        // Retrieve the posted information
        $item = $this->input->post('rowid');
        $qty = $this->input->post('qty');
        //echo "".$item;
        // Cycle true all items and update them
        for ($i = 0; $i < $total; $i++) {
            // Create an array with the products rowid's and quantities.
            $data = array(
                'rowid' => $item[$i],
                'qty' => $qty[$i]
            );

            // Update the cart with the new information
            $this->cart->update($data);
        }
    }

    function insert_temp_cart($data) {
        $this->db->insert('dal_temp_cart', $data);
        return $this->db->insert_id();
    }

    public function get_all_countries() {

        $this->db->order_by('countryname','ASC');
        $cntry = $this->db->get('country');
        return $cntry->result_array();
    }

}

/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */
?>
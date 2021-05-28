<?php 



class ProductsModel extends CI_Model{

    

    public function get_products(){

        $query = $this->db->get("products");



        return $query->result();

    }



    public function insert_product($data = "")

    {    //print_r($data);

        $returnData = array(

            'productName'   => $data['productName'],

            'mrp'           => $data['mrp'],

            'salePrice'     => $data['salePrice'],

            'shortDesc'     => $data['shortDesc'],

            'description'   => $data['description']

        );

        return $this->db->insert('products', $returnData);

    }





    public function updateProduct($data='')

    {

       

        $updateData = array(

            'productName'   => $data['productName'],

            'mrp'           => $data['mrp'],

            'salePrice'     => $data['salePrice'],

            'shortDesc'     => $data['shortDesc'],

            'description'   => $data['description']

        );

        $this->db->where('id',$data['id']);

        return $this->db->update('products',$updateData);

                

    }





    public function deleteProduct($data='')

    {

       

        $updateData = array(

            'productName'   => $data['productName'],

            'mrp'           => $data['mrp'],

            'salePrice'     => $data['salePrice'],

            'shortDesc'     => $data['shortDesc'],

            'description'   => $data['description']

        );

        $this->db->where('id',$data['id']);

        return $this->db->update('products',$updateData);

                

    }

    



}
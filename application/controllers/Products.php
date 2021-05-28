<?php

defined('BASEPATH') OR exit('No direct script access allowed');





class Products extends CI_Controller {





   public function __construct() { 



      parent::__construct(); 

      $this->load->model('ProductsModel');
      $this->load->helper('url', 'form');
      $this->load->library('form_validation');


   }





   /**

    * Get All Products from this method.

    *

    * @return Response

   */



   public function index(){



      $products = new ProductsModel;



      $loadData['data']        =     $products->get_products();



      $data['content']         =     $this->load->view('products/list', $loadData, TRUE);



      $this->load->view('front', $data);

   }





   //Create Product

   public function createProduct(){



      $loadData['title']        =     "Create Product";

      $loadData['action']       =     "createProduct";

      //Insert Products

      if($this->input->post()){
         $this->form_validation->set_rules('productName','Product Name','trim|required');
         $this->form_validation->set_rules('mrp','MRP','trim|required');
         $this->form_validation->set_rules('shortDesc','Short Description','trim|required');

        if ($this->form_validation->run() == TRUE) {

            $products=new ProductsModel;
            $data = $this->input->post();
            $products->insert_product($data);
            $this->session->set_flashdata('message', 'New Product Created!');
            redirect(base_url('products'));

         }
         
      }

      $data['content']  =  $this->load->view('products/create', $loadData, TRUE);

      
      $this->load->view('front', $data);


    }





   //Edit Product

   public function edit($id=''){

      $loadData['title']        =     "Edit Product";

      $loadData['action']        =     "edit/".$id;

      $loadData['product'] = $this->db->get_where('products', array('id' => $id))->row();



      //Update Products

      if($this->input->post()){

         $this->form_validation->set_rules('productName','Product Name','trim|required');
         $this->form_validation->set_rules('mrp','MRP','trim|required');
         $this->form_validation->set_rules('shortDesc','Short Description','trim|required');

         if ($this->form_validation->run() == TRUE) {

            $products=new ProductsModel;

            $data = $this->input->post();

            $products->updateProduct($data);

            $this->session->set_flashdata('message', 'Product Updated!');

            redirect(base_url('products'));
         }

      }

      $data['content']         =     $this->load->view('products/create', $loadData, TRUE);

      $this->load->view('front', $data);

      

   }





   //Delete Product

   public function delete($id)

   {

       $this->db->where('id', $id);

       $this->db->delete('products');

       $this->session->set_flashdata('message', 'Product Deleted!');

       redirect(base_url('products'));

   }





}
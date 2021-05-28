<form method="post" action="<?php echo base_url('products/').$action;?>">

  



  

  <div class="form-outline mb-4">

    <input type="text" id="productName" class="form-control" name="productName" value="<?php echo isset($product->productName)?$product->productName:""; ?>" />

        <label class="form-label" for="productName">product Name</label>
        

    

  </div>
  <span><?php echo form_error('productName'); ?></span>


  <div class="row mb-4">

    <div class="col">

      <div class="form-outline">

        <input type="text" id="salePrice" class="form-control" name="salePrice" value="<?php echo isset($product->salePrice)?$product->salePrice:""; ?>" />

        <label class="form-label" for="SalePrice">Sale Price</label>

      </div>

    </div>

    <div class="col">

      <div class="form-outline">

        <input type="text" id="MRP" class="form-control" name="mrp" value="<?php echo isset($product->mrp)?$product->mrp:""; ?>" />

        <label class="form-label" for="MRP">MRP</label>

        

      </div>
      <span><?php echo form_error('mrp'); ?></span>

    </div>

  </div>



  <div class="form-outline mb-4">

    <textarea class="form-control" id="shortDesc" rows="4" name="shortDesc"><?php echo isset($product->shortDesc)?$product->shortDesc:""; ?></textarea>

    <label class="form-label" for="shortDesc">Short Description</label>

    

  </div>
  <span><?php echo form_error('shortDesc'); ?></span>


  <div class="form-outline mb-4">

    <textarea class="form-control" id="description" rows="4" name="description"><?php echo isset($product->description)?$product->description:""; ?></textarea>

    <label class="form-label" for="description">Description</label>

  </div>



  

  <input type="hidden"  name="id" value="<?php echo isset($product->id)?$product->id:""; ?>" />

  <!-- Submit button -->

  <button type="submit" class="btn btn-primary btn-block mb-4">Save Product</button>

</form>
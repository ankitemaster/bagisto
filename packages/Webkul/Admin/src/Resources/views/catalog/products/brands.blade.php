@extends('admin::layouts.content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>Brands</h1>
            </div>
            <div class="page-action">
                <a class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal">Add Brands</a>
            </div>
        </div>
    </div>
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Brand Image</th>
        <th>Brand Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      
      	<?php 
    	foreach ($brands as $key => $value) {
			//print_r($value->name);
    	?>
    	<tr>
    	<td><?php echo ($key+1);?></td>
    	<td><img src="<?php echo url('Brand_image').'/'.$value->image; ?>" width="50" height="50" style="border-radius: 50%;" ></td>
        <td><?php echo $value->name; ?></td>
        <td>
        	<button onclick="showEditModel('{{ $value->id }}','{{ $value->name }}')"><span class="icon pencil-lg-icon"></span></button>
        	<!-- <a data-toggle="modal" data-target="#updateModal" href="{{ route('admin.catalog.products.brandsEdit',$value->id) }}"><span class="icon pencil-lg-icon"></span></a>-->
        	<a href="{{ route('admin.catalog.products.brandsDelete',$value->id) }}"><span class="icon trash-icon"></span></a></td>
        </tr>
    	<?php
    	}
       ?>
      
    </tbody>
  </table>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title text-center" id="exampleModalLabel">Brands Form</h3>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="{{ route('admin.catalog.products.brandsCreate') }}" method="post" style="padding: 20px;"  enctype="multipart/form-data">
	      	@csrf
	     	<div class="form-group">
	     		<label for="model_brand">Brand Name</label>
	     		<input type="text" class="form-control" name="b_name" placeholder="Please Enter Brand Name" required="" value="">
	     	</div>
	     	<div class="form-group">
	     		<label for="">Image Upload</label>
	     		<input type="file" class="form-control" name="brand_mage"required="">
	     	</div>
	     	<div class="form-group">
	     		<button type="submit" class="btn btn-primary">Save</button>
	     	</div>
	     </form>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>


	<!-- Update Modal -->
	<div class="modal" id="editBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title text-center" id="exampleModalLabel">Update Brands Form</h3>
	        <button type="button" class="close" onclick="closeEditModel()" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="{{ route('admin.catalog.products.brandsEdit') }}" method="post" style="padding: 20px;" enctype="multipart/form-data">
	      	@csrf
	      	<input type="hidden" name="id" id="brands_id" value="0">
	     	<div class="form-group">
	     		<label for="model_brand">Brand Name</label>
	     		<input id="brands_name" type="text" class="form-control" name="name" placeholder="Please Enter Brand Name" required="">
	     	</div>
	     	<div class="form-group">
	     		<label for="">Image Upload</label>
	     		<input type="file" class="form-control" name="brand_mage"><br>
	     	</div>
	     	<div class="form-group">
	     		<button type="submit" class="btn btn-primary">Save</button>
	     	</div>
	     </form>
	      <div class="modal-footer">
	        <button type="button" onclick="closeEditModel()" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>


	<script type="text/javascript">
		function showEditModel(id,name) {
			document.getElementById("brands_id").value = id;
			document.getElementById("brands_name").value = name;

			document.getElementById("editBrandModal").style.display = "block";

		}

		function closeEditModel()
		{
			document.getElementById("editBrandModal").style.display = "none";
		}
	</script>

@stop

<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content= 
        "width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  
    <link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>Posts Page</title> 
</head> 
  
<body> 
    <div class="container"> 
        <div class="row"> 
            <h2>List Page</h2> 
            <table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>id</th> 
                        <th>order_id</th> 
                        <th>amount</th>
                        <th>response_code</th>
                        <th>response_desc</th> 
                        <th>action</th> 
                    </tr> 
                </thead> 
  
                <tbody> 
                    <?php 
			 foreach ($datas as $data_arr) {
   				 if (is_array($data_arr)){
     				   foreach ($data_arr as $data_arr2) { 
                    ?> 
                    <tr> 
                        <td> 
                            <a href="<?php echo e(url('/profiles',['id' =>$data_arr2['id']])); ?>"><?php echo $data_arr2['id']; ?></a> 
                        </td> 
                         
                        <td> 
                            <?php echo $data_arr2['order_id']; ?> 
                        </td> 
                        <td> 
                            <?php echo $data_arr2['amount']; ?> 
                        </td>
                          <td> 
                            <?php echo $data_arr2['response_code']; ?> 
                        </td> 
                        <td> 
                            <?php echo $data_arr2['response_desc']; ?> 
                        </td> 
  
                        <td> 
                            <div class="form-check form-check-inline"> 
    					<a href="<?php echo e(url('/profiles',['id' =>$data_arr2['id']])); ?>">Edit</a>
                            </div>
                            <div class="form-check form-check-inline"> 
                               <a href="<?php echo e(url('/delete',['id' =>$data_arr2['id']])); ?>">Delete</a>
                            </div> 
                        </td> 
                    </tr> 
                    <?php
                    } }}
                    ?> 
                </tbody> 
            </table> 
  		
        </div> 
        <form action="<?php echo e(url('/create')); ?>" method="POST" enctype="multipart/form-data"> 
             <?php echo csrf_field(); ?>

  		<label for="order_id">order_id:</label>
     		 <input type="text" name="order_id"> 
     		 <label for="amount">amount:</label>
     		 <input type="text" name="amount">
     		 <label for="response_code">response_code:</label>
       	 <input type="text" name="response_code">
       	 <label for="response_desc">response_desc:</label>
       	 <input type="text" name="response_desc">
      		 <input type="submit" name="submit" value="ADD">
      		 </form>
    </div> 
</body> 
  
</html> 


<?php /**PATH /home/madikadi/proj/glog/resources/views/list.blade.php ENDPATH**/ ?>
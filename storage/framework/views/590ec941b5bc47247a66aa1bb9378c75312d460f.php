
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content= 
        "width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  
    <link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>Update & Delete Page</title> 
</head> 
  
<body> 
    <div class="container"> 
        <div class="row"> 
            <h2>Update & Delete Page</h2> 
            
 	


  		<form action="<?php echo e(url('/update',['id' =>$datas['id']])); ?>" method="POST" enctype="multipart/form-data">
  		<?php echo csrf_field(); ?> 
  		<label for="id">id:</label>
     		 <input type="text" name="id" readonly value="<?php echo $datas['id']; ?>"> 
  		<label for="order_id">order_id:</label>
     		 <input type="text" name="order_id" value="<?php echo $datas['order_id']; ?>"> 
     		 <label for="amount">amount:</label>
     		 <input type="text" name="amount" value="<?php echo $datas['amount']; ?>">
     		 <label for="response_code">response_code:</label>
       	 <input type="text" name="response_code" value="<?php echo $datas['response_code']; ?>" >
       	 <label for="response_desc">response_desc:</label>
       	 <input type="text" name="response_desc" value="<?php echo $datas['response_desc']; ?>">
      		 <input type="submit" name="editSubmit" value="EDIT">

      		 </form>

        </div> 
    </div> 
</body> 
  
</html> 

<?php /**PATH /home/madikadi/proj/glog/resources/views/list_one.blade.php ENDPATH**/ ?>
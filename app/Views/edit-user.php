<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Edit User Form With Validation Example</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
<div class="header">
    <h1 style="margin-top: 10px;margin-left: 21px;">E D I T / U P D A T E</h1>
</div>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>

    <span class="d-none alert alert-success mb-3" id="res_message"></span>

    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('/update');?>" name="edit-user" id="edit-user" method="post" accept-charset="utf-8">

           <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $user['id'] ?>">

          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name" value="<?php echo $user['name'] ?>">
            
          </div> 

          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id" value="<?php echo $user['email'] ?>">
            
          </div>   

          <div class="form-group">
            <label for="formGroupExampleInput">Phone Number</label>
            <input type="text" name="phone_num" class="form-control" id="formGroupExampleInput" placeholder="Please enter phone number" value="<?php echo $user['phone_num'] ?>">
            
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput">Messages</label>
            <input type="text" name="message" class="form-control" id="formGroupExampleInput" placeholder="Please enter message" value="<?php echo $user['message'] ?>">
            
          </div> 

          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
         
        </form>
      </div>

    </div>
 
</div>
 <script>
   if ($("#edit-user").length > 0) {
      $("#edit-user").validate({
     
    rules: {
      name: {
        required: true,
      },
 
      email: {
        required: true,
        maxlength: 50,
        email: true,
      },   
    },
    messages: {
       
      name: {
        required: "Please enter name",
      },
      email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
        }, 
    },
  })
}
</script>
</body>
</html>
<h1 align="center">
    EDIT YOUR ACCOUNT
</h1>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>FIRST NAME</label>
        <input type="text" name="c_firstName" class="form-control" required>
    </div>

    <div class="form-group">
        <label>LAST NAME</label>
        <input type="text" name="c_lastName" class="form-control" required>
    </div>

    <div class="form-group">
        <label>EMAIL</label>
        <input type="text" name="c_email" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label>ADDRESS</label>
        <input type="text" class="form-control" name="c_address" required>
    </div>

    <div class="form-group">
        <label>POST CODE</label>
        <input type="text" class="form-control" name="c_postcode" required>
    </div>

    <div class="form-group">
        <label>COUNTRY</label>
        <input type="text" class="form-control" name="c_country" required>
    </div>

    <div class="form-group form-height-custom">
        <label>PROFILE PICTURE</label>
        <input type="file" class="form-control form-height-custom" form-height custom="" name="c_image" required>

        <img src="customer_images/logo_customer.png" alt="profile pictures" class="img-responsive">
    </div>

    <div class="text-center">
        <button name="update" class="btn btn-primary">
            UPDATE
        </button>
    </div>



</form>
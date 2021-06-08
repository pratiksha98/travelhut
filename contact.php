<?php include('header.php'); ?>

<div class='container-fluid px-0'>
    <div class='bg-info p-3 shadow'>
        <h1 class='display-4 font-weight-lighter text-white'>Contact Us</h1>
    </div>

    <div class='row mb-4 mx-0 mt-0'>
        <div class='col border-right'>
            <form class='mt-4' method='get' action='feedback.php'>
                <div class='form-group'>
                    <input type='text' name='name' placeholder='Full name' class='form-control-lg w-100 border-custom border-secondary mb-3' required>
                </div>

                <div class='form-group'>
                    <input type='email' name='email' placeholder='Email id' class='form-control-lg w-100 border-custom border-secondary mb-3' required>
                </div>

                <div class='form-group'>
                    <input type='tel' name='phone' placeholder='Mobile number' class='form-control-lg w-100 border-custom border-secondary mb-3' required> 
                </div>

                <div class='form-group'>
                    <textarea name='message' style='height:250px;' class='form-control-lg w-100 border-custom border-secondary mb-3' placeholder='Message' required></textarea>  
                </div>

                <div class='form-group'>
                    <input type='submit' class='form-control-lg w-100 text-white border-0 bg-info'>
                </div>
            </form>
        </div>
        <div class='col border-left'>
            <div class='mt-4 mx-auto'>
            <iframe class='map' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5755.6472306302185!2d73.73080948797076!3d24.596290635389444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e5e8557490a1%3A0x3300ced03e53b3e2!2sCollege%20of%20Technology%20and%20Engineering!5e1!3m2!1sen!2sin!4v1621405930667!5m2!1sen!2sin' allowfullscreen='' loading='lazy'></iframe>
                
                <div class='mt-3'>
                    <span class='h3 font-weight-light'>Address:</span><br>
                    <span class='h6 font-weight-light custom-size'>Near Placement Cell, College of Technology & Engineering</span><br>
                    <span class='h6 font-weight-light custom-size'>University Road, Ganpati Nagar, <br>Udaipur, Rajasthan 313001<br>Contact No. 8005544845</span>
                    <br>
						
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
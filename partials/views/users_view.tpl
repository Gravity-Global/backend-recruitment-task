<h1 class='title'>List  Users! &#128075;</h1>


<div id="message"></div>

<table class='table'>
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Company</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data AS $id => $user){ ?>
                <tr id = tr<?php echo $id ?>>
                    <td><?php echo $user['name']?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['email']?></td>
                    <td><?php echo $user['address']['street'].' '.$user['address']['zipcode'].' '.$user['address']['city'] ?></td>
                    <td><?php echo $user['phone'] ?></td>
                    <td><?php echo $user['company']['name'] ?></td>
                    <td><button onclick="delete_user( <?php echo $id ?> )" class="btn btn-prima ">Delete</button></td>
                </tr>
        <?php }?>
    </tbody>
</table>



<a href="#" onclick="return false;" class="modal-link" data-modal-id="1">Add user</a>
 
<div class="modal-overlay">
 
    <div class="modal-table">

        <div class="modal-table-cell">
 
             <form action="action_page.php" class="modal" id="callback-form">
                <div class="modal__close"></div>
                <div class="modal__header">Add user</div>
                <div class="modal__content">
                    <div class="row">

                        <div class="coll">                        
                            <p class="item">
                                <label for="name">Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" value="" name="firstname" id="firstname" class="form-control">
                            </p>
                            <p class="item">
                                <label for="username">User name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                            <p class="item">
                                <label for="phone">Phone
                                    <span class="required">*</span>
                                </label>
                                <input type="text" value="" name="firstname" id="firstname" class="form-control">
                            </p>
                            <p class="item">
                                <label for="email">Email
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                            <p class="item">
                                <label for="website">Website
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                            <p>Company</p> 
                            <p class="item">
                                <label for="name">name</label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                            <p class="item">
                                <label for="catchPhrase">catchPhrase</label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                            <p class="item">
                                <label for="bs">bs</label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                        </div>  
                        <div class="coll">
                            <p>Address</p>
                            <p class="item">
                                <label for="street">Street
                                    <span class="required">*</span>
                                </label>
                                <input type="text" value="" name="firstname" id="firstname" class="form-control">
                            </p>
                            <p class="item">
                                <label for="suite">Suite
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                            <p class="item">
                                <label for="city">City
                                    <span class="required">*</span>
                                </label>
                                <input type="text" value="" name="firstname" id="firstname" class="form-control">
                            </p>
                            <p class="item">
                                <label for="zipcode">Zipcode</label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                            <p>geo</p>

                            <p class="item">
                                <label for="geo">lat</label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                            <p class="item">
                                <label for="geo">lng</label>
                                <input type="text" size="30" value="" name="phone" id="phone" class="form-control">
                            </p>
                        </div>
   
                    </div>  

                        <p class="contact-form-submit text-center topmargin_30">
                            <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">ADD</button>
                        </p>
                </div>
            </form>
            
 
        </div>
 
    </div>
 
</div>
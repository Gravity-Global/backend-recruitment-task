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
 
             <form action="/users/add_user" class="modal" id="callback-form" method="post">
                <div class="modal__close"></div>
                <div class="modal__header">Add user</div>
                <div class="modal__content">
                    <div class="row">

                        <div class="coll">
                            <h4>User</h4> 
                            <input value="" name="id" id="id" type="hidden">                       
                            <p class="item">
                                <label for="name">Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" value="" name="name" id="name" class="form-control" required >
                            </p>
                            <p class="item">
                                <label for="username">User name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" value="" name="username" id="username" class="form-control" required >
                            </p>
                            <p class="item">
                                <label for="phone">Phone
                                    <span class="required">*</span>
                                </label>
                                <input type="text" value="" name="phone" id="phone" class="form-control" required >
                            </p>
                            <p class="item">
                                <label for="email">Email
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" value="" name="email" id="email" class="form-control" required >
                            </p>
                            <p class="item">
                                <label for="website">Website
                                </label>
                                <input type="text" size="30" value="" name="website" id="website" class="form-control" >
                            </p>
                        </div>  
                        <div class="coll"></div>  
                            <h4>Company</h4> 
                            <p class="item">
                                <label for="name">Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" value="" name="company[name]" id="company_name" class="form-control" required >
                            </p>
                            <p class="item">
                                <label for="catchPhrase">CatchPhrase</label>
                                <input type="text" size="30" value="" name="company[catchPhrase]" id="company_catchPhrase" class="form-control" >
                            </p>
                            <p class="item">
                                <label for="bs">Bs</label>
                                <input type="text" size="30" value="" name="company[bs]" id="company_bs" class="form-control">
                            </p>
                        </div>  
                        <div class="coll"></div>                       
                            <h4>Address</h4>
                            <p class="item">
                                <label for="street">Street
                                    <span class="required">*</span>
                                </label>
                                <input type="text" value="" name="address[street]" id="address_street" class="form-control" required >
                            </p>
                            <p class="item">
                                <label for="suite">Suite
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" value="" name="address[suite]" id="address_suite" class="form-control" required >
                            </p>
                            <p class="item">
                                <label for="city">City
                                    <span class="required">*</span>
                                </label>
                                <input type="text" value="" name="address[city]" id="address_city" class="form-control" required >
                            </p>
                            <p class="item">
                                <label for="zipcode">Zipcode</label>
                                <input type="text" size="30" value="" name="address[zipcode]" id="address_zipcode" class="form-control">
                            </p>                            
                            <p>Geo</p>
                            <p class="item">
                                <label for="lat">lat</label>
                                <input type="text" size="30" value="" name="address[geo][lat]" id="phone" class="form-control">
                            </p>
                            <p class="item">
                                <label for="lng">lng</label>
                                <input type="text" size="30" value="" name="address[geo][lng]" id="phone" class="form-control">
                            </p>
                        </div>
                       <p class="contact-form-submit text-center topmargin_30">
                        <button type="submit"  class="theme_button color1">ADD</button>
                    </p>
                    </div>  


                </div>
            </form>
            
 
        </div>
 
    </div>
 
</div>
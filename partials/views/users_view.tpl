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
                <tr id = tr<?= $user['id'] ?>>
                    <td><?= $user['name']?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email']?></td>
                    <td><?= $user['address']['street'].' '.$user['address']['zipcode'].' '.$user['address']['city'] ?></td>
                    <td><?= $user['phone'] ?></td>
                    <td><?= $user['company']['name'] ?></td>
                    <td><button onclick="delete_user( <?= $user['id'] ?> )" class="btn btn-prima ">Delete</button></td>
                </tr>
        <?php }?>
    </tbody>
</table>



<a href="#" onclick="return false;" class="modal-link" data-modal-id="1">Add user</a>
 
<div class="modal-overlay">
 
    <div class="modal-table">

        <div class="modal-table-cell">
 
             <form action="" class="modal" id="ajax_form" method="post">
                <div class="modal__close"></div>
                <h1 class="modal__header">Adding a user</h1>
                <div class="modal__content">

                        <div class="coll">
                            <h4>User</h4>
                            <input value="" name="id" id="id" type="hidden">                       
                            <p class="item">
                                <!-- <label for="name">Name <span class="required">*</span></label>                                 -->
                                <input type="text" value="" name="name" id="name" minlength="3" maxlength="100" placeholder="Name" required >
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="username" >User name <span class="required">*</span></label> -->
                                <input type="text"  value="" name="username" id="username" minlength="3" maxlength="100" placeholder="User name" required>
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="phone">Phone <span class="required">*</span></label> -->
                                <input type="phone" name="phone" pattern="\+48\\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}" placeholder="+48 xxx xxx xxx" value="" id="phone" required>                                
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="email">Email <span class="required">*</span></label> -->
                                <input type="email" value="" name="email" id="email" placeholder="Email" required>
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="website">Website</label> -->
                                <input type="url"  value="" name="website" id="website" placeholder="Website" >
                                <label class="errorMsg"></label>
                            </p>
                        </div>  
                        <div class="coll">  
                            <h4>Company</h4> 
                            <p class="item">
                                <!-- <label for="company_name">Name <span class="required">*</span></label> -->
                                <input type="text"  value="" name="company[name]" id="company_name" placeholder="Name" required>
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="company_catchPhrase">CatchPhrase</label> -->
                                <input type="text"  value="" name="company[catchPhrase]" id="company_catchPhrase" placeholder="CatchPhrase" >
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="bs">Bs</label> -->
                                <input type="text"  value="" name="company[bs]" id="company_bs" placeholder="Bs">
                                <label class="errorMsg"></label>
                            </p>
                        </div>  
                        <div class="coll"></div>                       
                            <h4>Address</h4>
                            <p class="item">
                                <!-- <label for="address_street">Street <span class="required">*</span></label> -->
                                <input type="text" value="" name="address[street]" id="address_street" placeholder="Street" required>
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="suite">Suite <span class="required">*</span></label> -->
                                <input type="text"  value="" name="address[suite]" id="address_suite" placeholder="Suite" required>
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="address_city">City<span class="required">*</span></label> -->
                                <input type="text" value="" name="address[city]" id="address_city" placeholder="City" required>
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="address_zipcode">Zipcode</label> -->
                                <input type="text"  value="" name="address[zipcode]" id="address_zipcode" placeholder="Zipcode">
                                <label class="errorMsg"></label>
                            </p>                            
                            <p class="item">
                                <!-- <label for="address_geo_lat">Geo_lat</label> -->
                                <input type="text"  value="" name="address[geo][lat]" id="address_geo_lat" placeholder="Geo lat">
                                <label class="errorMsg"></label>
                            </p>
                            <p class="item">
                                <!-- <label for="address_geo_lng">Geo_lng</label> -->
                                <input type="text"  value="" name="address[geo][lng]" id="address_geo_lng" placeholder="Geo lng">
                                <label class="errorMsg"></label>
                            </p>
                        </div>
                        <!-- <p class="contact-form-submit text-center topmargin_30"> -->
                            <button type="button" onclick="sendAjaxForm();" id="btn_ADD" class="theme_button color1">ADD</button>
                        </p>
                </div>
            </form>
            
 
        </div>
 
    </div>
 
</div>
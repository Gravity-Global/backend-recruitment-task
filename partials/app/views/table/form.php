<div class="container">
    <form action="/users/add" method="post">
        <br>
            <h2>Add new user</h2>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Name</label>
                </div>
                <div class="col-75">
                    <input id="fname" type="text" name="name" placeholder="Name..." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fusername">Username</label>
                </div>
                <div class="col-75">
                    <input id="fusername" type="text" name="username" placeholder="Username..." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="femail">Email</label>
                </div>
                <div class="col-75">
                    <input id="femail" type="email" name="email" placeholder="Email..." required>
                </div>
            </div>
            <div>
                <label for="faddress"><strong>Address</strong></label>
                <div id="faddress">
                    <div class="row">
                        <div class="col-25">
                            <label for="fstreet">Street</label>
                        </div>
                        <div class="col-75">
                            <input id="fstreet" type="text" name="street" placeholder="Street..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fsuite">Suite</label>
                        </div>
                        <div class="col-75">
                            <input id="fsuite" type="text" name="suite" placeholder="Suite..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fcity">City</label>
                        </div>
                        <div class="col-75">
                            <input id="fcity" type="text" name="city" placeholder="City..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fzipcode">Zip Code</label>
                        </div>
                        <div class="col-75">
                            <input id="fzipcode" type="text" name="zipcode" placeholder="Zip Code..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label><strong>Geo</strong></label>
                        </div>
                        <div class="col-75">
                                    <label for="flat">lat</label>
                                    <input id="flat" type="text" name="lat" placeholder="lat..." required>
                                    <label for="flng">lng</label>
                                    <input id="flng" type="text" name="lng" placeholder="lng..." required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fphone">Phone</label>
                </div>
                <div class="col-75">
                    <input id="fphone" type="tel" name="phone" placeholder="Phone..." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fwebsite">Website</label>
                </div>
                <div class="col-75">
                    <input id="fwebsite" type="url" name="website" placeholder="Website..." required>
                </div>
            </div>
            <div>
                <label><strong>Company</strong></label>
                    <div class="row">
                        <div class="col-25">
                            <label for="fcompanyname">Company name</label>
                        </div>
                        <div class="col-75">
                            <input id="fcompanyname" type="text" name="companyName" placeholder="Company..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fcathphrase">Catch Phrase</label>
                        </div>
                        <div class="col-75">
                            <input id="fcathphrase" type="text" name="catchPhrase" placeholder="Catch Phrase..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fbs">BS</label>
                        </div>
                        <div class="col-75">
                            <input id="fbs" type="text" name="bs" placeholder="BS..." required>
                        </div>
                    </div>
                </label>
            </div>

        </div>
        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
</div>
<?php
// include header file
include 'header.php'; ?>
<div class="admin-content-container">
    <h2 class="admin-heading">Options</h2>
            <form id="updateOptions" class="add-post-form row" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Site Name</label>
                        <input type="text" class="form-control site_name" name="site_name"
                               value="" placeholder="Site Name"/>
                        <input type="hidden" name="s_no" value="" />
                    </div>
                    <div class="form-group">
                        <label for="">Site Title</label>
                        <input type="text" class="form-control site_title" name="site_title"
                               value="" placeholder="Site Title"/>
                    </div>
                    <div class="form-group">
                        <label>Site Description</label>
                        <textarea name="site_desc" class="form-control site_desc" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Contact Email</label>
                        <input type="email" class="form-control email" name="contact_email" value="">
                    </div>
                    <div class="form-group">
                        <label>Contact Phone Number</label>
                        <input type="text" class="form-control phone" name="contact_phone" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Site Logo</label>
                        <input type="file" class="new_logo" name="new_logo" />
                        <input type="hidden" class="old_logo" name="old_logo" value="">
                        <img id="image" src="" alt="" width="100px"/>
                    </div>
                    <div class="form-group">
                        <label for="">Footer Text</label>
                        <input type="text" class="form-control footer_text" name="footer_text" value="">
                    </div>
                    <div class="form-group">
                        <label>Currency Format</label>
                        <input type="text" class="form-control currency" name="currency_format" value="">
                    </div>
                    <div class="form-group">
                        <label>Contact Address</label>
                        <textarea name="contact_address" class="form-control address" cols="30" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" class="btn add-new" name="submit" value="Update">
                    </div>
                </div>
            </form>
</div>
<?php
//    include footer file
    include "footer.php";
?>
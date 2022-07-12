<?php require '../view/admin/header.php'; ?>

<div class="checkout_area p-5">
    <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">
                <div class="cart-page-heading mb-30">
                    <h5>Import an Excel file to DATABASE</h5>
                </div>
                <div class="cart-page-heading mb-30">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore quisquam dolorum odio recusandae nihil voluptate in magnam aut, laudantium repellendus alias quaerat ea aliquam consequatur numquam eum. Omnis, fugiat.
                </div>
                <form action="?page=excel&up=1" method="post" enctype="multipart/form-data">
                    <div class="row">  
                        <div class="col-md-12 mb-3">
                            <input type="file" name="up-ex" id="">
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="custom-control custom-checkbox d-block p-3">
                                <input type="submit" class="btn essence-btn" value="Upload" name="btn-upload">
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require '../view/admin/footer.php';?>
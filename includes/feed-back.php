<?php include('includes/header.php'); ?>


<div class="py-5 bg-secondary">
    <div class="container text-center">
        <h4 class="text-white">Feed-Back</h4>
    </div>
</div>


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-web">
                        <h4 class="title1 mb-0 text-white">Feed-Back</h4>
                    </div>
                    <div class="card-body">
                                
                        <form action="#" method="POST">
                            
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label> Message</label>
                                <textarea name="comment" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="mb-1">
                                <button type="sumbit" name="enquiryBtn" class="btn btn-primary w-100">SUBMIT</button>
                                <!-- You can configure your email with this form -->
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

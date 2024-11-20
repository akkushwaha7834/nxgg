<?php include_once('./include/header.php') ?>
<style>
    .not-found{
        padding: 80px 0;
    }
    .not-found-wrapper{
box-shadow: 0px 0px 10px rgb(0 0 0/15%);
    }
    .error {
    font-size: 150px;
    color: #c3306b;
    text-shadow: 1px 1px 1px #a30041, 2px 2px 1px #a30041, 3px 3px 1px #a30041, 4px 4px 1px #a30041, 5px 5px 1px #a30041, 6px 6px 1px #a30041, 7px 7px 1px #a30041, 8px 8px 1px #a30041, 25px 25px 8px rgba(0, 0, 0, 0.2);}
    @media(max-width:767.98px){
        .error {
            font-size: 100px !important;
    }
    }
</style>
<section class="not-found">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <div class="not-found-wrapper py-5 px-4 rounded">
                    <h2 class=" error "> 404</h2>
                    <h2>Sorry, Page Not Found!</h2> 
                    <a href="<?php echo base_url();?>" class="theme-btn theme-btn2 mt-5"> Back To Home Page</a>
                </div>
               
            </div>
        </div>
    </div>
</section>
<?php include_once('./include/footer.php') ?>
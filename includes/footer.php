  
    <div class="py-1 bg-web">
        <div class="container">
            <p class="mb-0 fs-14 text-white text-center">© Copyright | All rights reserved at <?= webSetting('title') ?? 'Car Rental Services'; ?></p>
        </div>
    </div>

    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/razorpay-checkout.js"></script>

    <script>
        $('.car-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav: true,
            dots: true,
            navText: ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
            autoplay: true,
            autoplayHoverPause:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        $('.car-testi').owlCarousel({
            loop:true,
            margin:10,
            nav: false,
            dots: true,
            navText: ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
            autoplay: true,
            autoplayHoverPause:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        $(document).ready(function () {

            $(".filtercar").click(function (e) { 
                e.preventDefault();
                var startDate = $('#start_date').val();
                var endDate = $('#end_date').val();
                startEndDifference = (Math.abs(new Date(startDate) - new Date(endDate)) / 60000) / 60;
                if(startDate >= endDate){
                    $('#end_date').css('border', '2px solid red');
                    alert("End date cannot be less than or equal to start date");

                    return false;
                }
                else if(startEndDifference < 24){
                    $('#end_date').css('border', '2px solid red')

                    alert("Minimum booking period is 24 hours");
                    return false;
                }
                else{
                    // window.location.href = "cars.php?start="+startDate+"&end="+endDate+"#content"
                    const urlParams = new URLSearchParams(window.location.search);
                        urlParams.set('start', startDate);
                        urlParams.set('end', endDate);
                        window.location.search = urlParams;

                }

            });

            $('#start_date').change(function (e) { 
                e.preventDefault();
                var startDate = $('#start_date').val();

                var d = new Date(startDate);
                d.setHours(d.getHours() + 24);
                const dateTimeLocalValue = (new Date(d.getTime() - d.getTimezoneOffset() * 60000).toISOString()).slice(0, -1);
                document.getElementsByName("end_date")[0].value = dateTimeLocalValue;
                document.getElementsByName("end_date")[0].min = dateTimeLocalValue;

            });

        });
    </script>


</body>
</html>
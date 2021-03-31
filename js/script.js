    // Preloader
    $(window).on("load" , function () {
        function HideLoader() {
            setTimeout(() => {
                $("#Loader").fadeOut(100)
            }, 300);
        }
        HideLoader();
    })
    
    // Navbar
    $(window).on("scroll load" , function () {
        if($(".navbar").offset().top > 40){
            $(".navbar").addClass("shrink");
            $(".Gototop").css("visibility" , "visible");
        }
        else{
            $(".navbar").removeClass("shrink");
            $(".Gototop").css("visibility" , "hidden");
        }
    })
    
    // Portfolio Filter
    // Active Class
    $(".Filter_List .inline-list li").on("click" , function () {
        var FilterClass = $(this).attr("filter");
        console.log(FilterClass)
        if (!$(this).hasClass("active")) {
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        }
        $(".Portfolio_projects .row .col-md-6").each(function() {
            if(FilterClass == "All"){
                $(this).fadeIn()
            }
            else{
                if($(this).hasClass(FilterClass)){
                    $(this).fadeIn();
                }
                else{
                    $(this).hide();
                }
            }
        })
    })
    
    //image modal
    $(document).ready(function() {
        // Gets the video src from the data-src on each button
        var $imageSrc;  
        $('.gallery .Layer').click(function() {
            $(".modal-title").html($(this).attr('data-content'));
            $imageSrc = $(this).data('bigimage');
        });
        // when the modal is opened autoplay it  
        $('#myiModal').on('shown.bs.modal', function (e) {      
        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#image").attr('src', $imageSrc  ); 
        })   
        // reset the modal image
        $('#myiModal').on('hide.bs.modal', function (e) {
            // a poor man's stop video
            $("#image").attr('src',''); 
        }) 
    });

    // Play Video
    $(document).ready(function(){
        /* Get iframe src attribute value i.e. YouTube video url
        and store it in a variable */
        var url = $("#RTvideo").attr('src');
        
        /* Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing */
        $("#myModal").on('hide.bs.modal', function(){
            $("#RTvideo").attr('src', '');
        });
        
        /* Assign the initially stored url back to the iframe src
        attribute when modal is displayed again */
        $("#myModal").on('show.bs.modal', function(){
            $("#RTvideo").attr('src', url);
        });
    });
    
    // Toggle Active class
    $(".collapse_menu").on("click" , function(){
        $(this).toggleClass("active");
    })
    // Wow Animate
    new WOW().init();
    //Animate Typing
    var typed = new Typed('.animate', {
        strings: [
            "Internet Service",
            "Network Engineer",
            "Troubleshooting PC",
            "Front-End Web and Apps Developer",
            "UI/UX Designer"
        ],
        typeSpeed:50,
        backSpeed:50,
        loop:true
    });
    
    const spans = document.querySelectorAll('.word span');
    spans.forEach((span, idx) => {
    span.addEventListener('click', (e) => {
        e.target.classList.add('active');
    });
    span.addEventListener('animationend', (e) => {
        e.target.classList.remove('active');
    });
    
    // Initial animation
    setTimeout(() => {
        span.classList.add('active');
    }, 750 * (idx+1))
    });
    
    //Accordion
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
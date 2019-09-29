@extends('layouts.main')
@section('PageTitle', 'Inspired Steps')

@section('css')
    <style>
    #category-2-part{
position: relative;
z-index: 100;
}

.category-form .main-form .single-form input{
    height:50px;
}
.category-form{
    margin-top:-600px;
}

@media(max-width:780px){
 .category-form{
    margin-top:-100px;
}   
}
</style>
@endsection

@section('content')
 <!--====== SEARCH BOX PART START ======-->
    
 <div class="search-box">
    <div class="search-form">
        <div class="closebtn">
            <span></span>
            <span></span>
        </div>
        <form action="#">
            <input type="text" placeholder="Search by keyword">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div> <!-- search form -->
</div>

<!--====== SEARCH BOX PART ENDS ======-->

<section id="slider-part" class="slider-active">
    <div class="single-slider slider-2 bg_cover" style="background-image: url(images/slider/s-2.jpg)" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-10">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">Korean Courses</h1>
                        <a data-animation="fadeInUp" data-delay="1.3s" href="#" class="main-btn">Apply Online</a>
                        <a data-animation="fadeInUp" data-delay="1.3s" href="#" class="main-btn">Apply Offline</a>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->
    
</section>


<section id="category-2-part">
         
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="category-2-items pt-10">
                    
                </div> <!-- category -->
            </div>
            <div class="col-lg-6">
                <div class="category-form">
                    <div class="form-title text-center">
                        <h3>Sign up now</h3>
                    </div>
                    <div class="main-form">
                        <form action="api/registeruser" id="registerform" method="POST">
                            <div class="single-form">
                                <input type="text" placeholder="Your name" name="name">
                            </div>
                            <div class="single-form">
                                <input type="email" placeholder="Your Email" name="email">
                            </div>
                            <div class="single-form">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input type="text" placeholder="Country Code" name="countrycode">
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" placeholder="Your Phone" name="phone">
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="single-form">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="single-form">
                                <button class="main-btn" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    
     
</section>


<section id="course-part" class="pt-115 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Our course</h5>
                    <h2>Featured courses </h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row course-slide mt-30">
            <div class="col-lg-4">
                <div class="single-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/course/cu-1.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                        <div class="course-teacher d-flex align-items-center">
                            <div class="thum">
                                <a href="courses-single.html"><img src="images/course/teacher/t-1.jpg" alt="teacher"></a>
                            </div>
                            <div class="teacher ml-10">
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                    </div>
                </div> <!-- single course -->
            </div>
            <div class="col-lg-4">
                <div class="single-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/course/cu-2.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                        <div class="course-teacher d-flex align-items-center">
                            <div class="thum">
                                <a href="courses-single.html"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                            </div>
                            <div class="teacher ml-10">
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                    </div>
                </div> <!-- single course -->
            </div>
            <div class="col-lg-4">
                <div class="single-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/course/cu-3.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                        <div class="course-teacher d-flex align-items-center">
                            <div class="thum">
                                <a href="courses-single.html"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                            </div>
                            <div class="teacher ml-10">
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                    </div>
                </div> <!-- single course -->
            </div>
            <div class="col-lg-4">
                <div class="single-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/course/cu-4.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                        <div class="course-teacher d-flex align-items-center">
                            <div class="thum">
                                <a href="courses-single.html"><img src="images/course/teacher/t-4.jpg" alt="teacher"></a>
                            </div>
                            <div class="teacher ml-10">
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                    </div>
                </div> <!-- single course -->
            </div>
            <div class="col-lg-4">
                <div class="single-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/course/cu-5.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                        <div class="course-teacher d-flex align-items-center">
                            <div class="thum">
                                <a href="courses-single.html"><img src="images/course/teacher/t-5.jpg" alt="teacher"></a>
                            </div>
                            <div class="teacher ml-10">
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                    </div>
                </div> <!-- single course -->
            </div>
        </div> <!-- course slide -->
    </div> <!-- container -->
</section>

<!--====== COURSE PART ENDS ======-->

<div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter text-center mt-40">
                    <span><span class="counter">30,000</span>+</span>
                    <p>Students enrolled</p>
                </div> <!-- single counter -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter text-center mt-40">
                    <span><span class="counter">41,000</span>+</span>
                    <p>Courses Uploaded</p>
                </div> <!-- single counter -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter text-center mt-40">
                    <span><span class="counter">11,000</span>+</span>
                    <p>People certificate</p>
                </div> <!-- single counter -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter text-center mt-40">
                    <span><span class="counter">39,000</span>+</span>
                    <p>Global Teachers</p>
                </div> <!-- single counter -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
    

   <!--====== TEACHERS PART START ======-->
    
   <section id="teachers-part" class="pt-65 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mt-50 pb-25">
                    <h5>Top Tutors</h5>
                    <h2>Featured Teachers</h2>
                </div> <!-- section title -->
                <div class="teachers-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="teachers-2-single mt-30">
                                <div class="thum">
                                    <img src="images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                </div>
                                <div class="cont">
                                    <a href="teachers-single.html"><h5>Mark anthem</h5></a>
                                    <p>JAVA Expert</p>
                                    <span><i class="fa fa-book"></i>10 Courses</span>
                                </div>
                            </div> <!-- teachers 2 single -->
                        </div>
                        <div class="col-md-6">
                            <div class="teachers-2-single mt-30">
                                <div class="thum">
                                    <img src="images/teachers/teacher-2/tc-2.jpg" alt="Teacher">
                                </div>
                                <div class="cont">
                                    <a href="teachers-single.html"><h5>Hellen Mark</h5></a>
                                    <p>Laravel Expert</p>
                                    <span><i class="fa fa-book"></i>05 Courses</span>
                                </div>
                            </div> <!-- teachers 2 single -->
                        </div>
                        <div class="col-md-6">
                            <div class="teachers-2-single mt-30">
                                <div class="thum">
                                    <img src="images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                </div>
                                <div class="cont">
                                    <a href="teachers-single.html"><h5>Maria Noor</h5></a>
                                    <p>JAVA Expert</p>
                                    <span><i class="fa fa-book"></i>10 Courses</span>
                                </div>
                            </div> <!-- teachers 2 single -->
                        </div>
                        <div class="col-md-6">
                            <div class="teachers-2-single mt-30">
                                <div class="thum">
                                    <img src="images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                </div>
                                <div class="cont">
                                    <a href="teachers-single.html"><h5>Alan hen</h5></a>
                                    <p>Laravel Expert</p>
                                    <span><i class="fa fa-book"></i>05 Courses</span>
                                </div>
                            </div> <!-- teachers 2 single -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- teachers 2 -->
            </div>
            <div class="col-lg-6 ">
                <div class="happy-student mt-55">
                    <div class="happy-title">
                        <h3>Happy Students</h3>
                    </div>
                    <div class="student-slide">
                        <div class="single-student">
                            <img src="images/teachers/teacher-2/quote.png" alt="Quote">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                            <h6>Mark anthem</h6>
                            <span>Bsc, Engineering</span>
                        </div> <!-- single student -->
                        
                        <div class="single-student">
                            <img src="images/teachers/teacher-2/quote.png" alt="Quote">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                            <h6>Mark anthem</h6>
                            <span>Bsc, Engineering</span>
                        </div> <!-- single student -->
                        
                        <div class="single-student">
                            <img src="images/teachers/teacher-2/quote.png" alt="Quote">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                            <h6>Mark anthem</h6>
                            <span>Bsc, Engineering</span>
                        </div> <!-- single student -->
                    </div> <!-- student slide -->
                    <div class="student-image">
                        <img src="images/teachers/teacher-2/happy.png" alt="Image">
                    </div>
                </div> <!-- happy student -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEACHERS PART ENDS ======-->
@endsection


@section('footer')
@include('layouts.footer')   
@endsection


@section('scripts')
<script>

$('#registerform').submit(function(e){
    e.preventDefault();
    $('.main-btn').attr("disabled",true);
    $.ajax({
        type:'POST',
        url: $(this).attr('action'),
        data:new FormData(this),
        cache:false,
        contentType: false,
        processData: false,
        success:function(data){
            swal("Here you go!","Successfully Registered. Please login to continue","success");
            $('.main-btn').removeAttr("disabled");
                        
        },
        error: function(data){
        swal("Oops!!", data.responseJSON.message, "error");
        $('.main-btn').removeAttr("disabled");               
        }
    });
   

})    
         
</script>
    
@endsection
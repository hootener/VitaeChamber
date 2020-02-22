@extends('_layouts.master')

@section('page-style')
<style>
    body {
        background: #ededed;
    }
</style> 

@endsection

@section('body')
<div class="row" style="padding-bottom: 20px; padding-top: 10px; margin: 0 auto;">
    {{--<a class="btn btn-lrg btn-success" href="https://www.dropbox.com/s/e0dv6bdya4vth0d/resume.pdf" target="_blank">View as PDF</a>--}}
</div>
<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <img class="profile" width="150" src="/assets/images/profile.png" alt="" />
            <h1 class="name">Eli Hooten</h1>
            <h3 class="tagline">CTO / Developer / Engineer</h3>
        </div><!--//profile-container-->
        
        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li class="email"><a href="mailto:
                    &#101;&#108;&#105;&#114;&#046;&#104;&#111;&#111;&#116;&#101;&#110;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">
                    &#101;&#108;&#105;&#114;&#046;&#104;&#111;&#111;&#116;&#101;&#110;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;
                </a> </li>
                <li class="website"><a href="http://elihooten.com/index" target="_blank"><i class="fa fa-globe"></i> elihooten.com</a></li>
                <li><a class="mr-5" href="https://twitter.com/hootener" target="_blank"><i class="fab fa-twitter"></i> @hootener</a></li>
                <li><a class="mr-5" href="https://www.linkedin.com/in/hootener/" target="_blank"><i class="fab fa-linkedin-in"></i> hootener</a></li>
                <li><a class="mr-5" href="https://github.com/hootener/" target="_blank"><i class="fab fa-github"></i> hootener</a></li>
            </ul>
        </div>
        <div class="education-container container-block">
            <h2 class="container-block-title">Education</h2>
            <div class="item">
                <h4 class="degree">Ph D Computer Science</h4>
                <h5 class="meta">Vanderbilt University</h5>
                <div class="time">2010 - 2014</div>
            </div>
            <div class="item">
                <h4 class="degree">MSc Electrical Engineering</h4>
                <h5 class="meta">Vanderbilt University</h5>
                <div class="time">2009 - 2010</div>
            </div>
            <div class="item">
                <h4 class="degree">BSc Engineering Physics</h4>
                <h5 class="meta">Murray State Univeristy</h5>
                <div class="time">2004 - 2009</div>
            </div>
        </div>
        
        <div class="interests-container container-block">
            <h2 class="container-block-title">Interests</h2>
            <ul class="list-unstyled interests-list">
                <li>Software Engineering</li>
                <li>DevOps</li>
                <li>Engineering Management</li>
                <li>Distributed Teams</li>
            </ul>
        </div>
    </div>
    
    <div class="main-wrapper">
        @yield('resumeContent')
    </div><!--//main-body-->
</div>
@endsection

@section('page-scripts')
<script>
jQuery(document).ready(function($) {


    /*======= Skillset *=======*/
    
    
    $('.level-bar-inner').css('width', '0');
    
    $(window).on('load', function() {

        $('.level-bar-inner').each(function() {
        
            var itemWidth = $(this).data('level');
            
            $(this).animate({
                width: itemWidth
            }, 800);
            
        });

    });
   
    

});
</script>
@endsection
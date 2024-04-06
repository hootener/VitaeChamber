@extends('_layouts.master')
@section('page-title')
Eli Hooten -- Personal Site
@endsection
@section('body')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h3>Hey there</h3>
        <p> You've reached the personal site of Eli Hooten.</p>
        
        <p> Here are my last several years in five bullet points: </p>
        <ul>
            <li>
                I'm currently the Director of Engineering for Codecov at <a href="https://getsentry.com" target="_blank" rel="noopener">Sentry</a>, the world's leading error reporting and application performance monitoring platform.
            </li>
            <li>
                I was the CTO of <a href="https://codecov.io" target="_blank" rel="noopener">Codecov</a> from 2018 - 2022. At Codecov I helped build the fully remote, globally distributed team that turned Codecov into a world-class developer tool used by over one million software developers. Codecov was <a href="https://sentry.io/about/press-releases/sentry-acquires-codecov/" target="_blank" rel="noopener">acquired by Sentry in 2022</a>.
            </li>
            <li> 
                I was the CTO / Co-Founder of <a href="https://gamewisp.com" target="_blank" rel="noopener">GameWisp</a> (2012 - 2018). Its core technology was <a href="https://www.gamasutra.com/view/pressreleases/340429/Lightstream_Acquires_GameWisp_Technology_to_Power_and_Enhance_Offerings_for_Streamers_and_Communities.php" target="_blank" rel="noopener">acquired by Lightstream in 2019</a>.
            </li>
            <li> 
                I am an alum of the <a href="https://www.techstars.com/" target="_blank" rel="noopener">TechStars</a> 2014 Chicago Cohort.
            </li>
            <li>
                I graduated from Vanderbilt University in 2014 with a Ph D in Computer Science, as an <a href="https://ndseg.asee.org/" target="_blank" rel="noopener">NDSEG Fellow</a>.
            </li>
        </ul>
        <p> Here are some social links: </p>
        <p> 
            <a class="mr-5" href="https://twitter.com/hootener" target="_blank" rel="noopener"><i data-feather="twitter"></i></a>  
            <a class="mr-5" href="https://www.linkedin.com/in/hootener/" target="_blank" rel="noopener"><i data-feather="linkedin"></i></a>
            <a class="mr-5" href="https://github.com/hootener/" target="_blank" rel="noopener"><i data-feather="github"></i></a>
        </p>
        <p> You can use the links at the top to check out my <a href="{{$page->baseUrl}}/vitae">CV</a> and <a href="{{$page->baseUrl}}/resume">Resume</a>. </p>
    </div>
</div>
@endsection

@extends('_layouts.master')

@section('body')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h3>Hey there</h3>
        <p> You've reached the personal site of Eli Hooten. This site serves as a compilation of my academic work, professional experience, 
            and personal projects.</p>
        
        <p> Here are some facts: </p>
        <ul>
            <li> 
                I'm the Chief Technology Officer / Co-Founder of <a href="https://gamewisp.com" target="_blank">GameWisp</a> (2012 - present).
            </li>
            <li>
                I graduated from Vanderbilt University in 2014 with a Ph D in Computer Science, as an <a href="https://ndseg.asee.org/" target="_blank">NDSEG Fellow</a>.
            </li>
            <li> 
                I'm an alum of the <a href="https://www.techstars.com/" target="_blank">TechStars</a> 2014 Chicago Cohort.
            </li>
            <li>
                I should've bought Bitcoin sooner.
            </li>
        </ul>
        <p> Here are some social links: </p>
        <p> 
            <a class="mr-5" href="https://twitter.com/hootener" target="_blank"><i class="fab fa-2x fa-twitter"></i></a>  
            <a class="mr-5" href="https://www.linkedin.com/in/hootener/" target="_blank"><i class="fab fa-2x fa-linkedin-in"></i></a>
            <a class="mr-5" href="https://github.com/hootener/" target="_blank"><i class="fab fa-2x fa-github"></i></a>
        </p>
        <p> You can use the links at the top to check out my <a href="{{$page->baseUrl}}/vitae">CV</a> and <a href="{{$page->baseUrl}}/resume">Resume</a>. </p>
    </div>
</div>
@endsection

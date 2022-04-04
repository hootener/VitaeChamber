@extends('_layouts.resume-master')
@section('page-title')
Eli Hooten -- Resume
@endsection
@section('resumeContent')
<section class="section summary-section">
    <h2 class="section-title"><i data-feather="user"></i> Executive Summary</h2>
    <div class="summary">
        <p>After I received my Ph D in Computer Science from Vanderbilt University, I served as CTO of GameWisp, Inc. from 2012 to 2018.
        </p>
        <p> At GameWisp I grew the software team from zero to ten individuals. Additionally, I led the technical design of GameWisp's products and shipped production-quality code on a daily basis. I assisted in growing GameWisp from $0 to $4M ARR, gaining hundreds of thousands active users, and shipping numerous successful products and features. 
        </p>
        <p>
            In 2018 I joined Codecov, a SaaS code coverage solution, as its CTO. While at Codecov I have scaled the techincal team, facilitated large amounts of revenue growth, and helped turn Codecov into a world class, industry leading developer tool and software product used by over a million software developers worldwide.
        </p>
    </div><!--//summary-->            
</section><!--//section  -->

<section class="section experiences-section">
    <h2 class="section-title"><i data-feather="briefcase"></i> Experience</h2>
    <div class="item">
        <div class="meta">
            <div class="upper-row">
                <h3 class="job-title">CTO</h3>
                <div class="time">2018 - Present</div>
            </div><!--//upper-row-->
            <div class="company">Codecov; Remote</div>
        </div><!--//meta-->
        <div class="details">
            <p>I oversaw all technical operations at Codecov, including engineering, technical support, solutions engineering, and product. </p>  
            <p>While at Codecov I: </p>
            <ul>
                <li> Helped scale our team from 3 to 15+ employees and contractors.</li>
                <li> Worked alongside our Vice President of Engineering to shape Codecov's engineering processes and best practices.</li>
                <li> Directly led and the solutions engineering, technical support, and product teams. </li>
                <li> Served as the technical point of contact for stakeholders from many of the world's largest companies.</li>
                <li> Worked directly with Codecov's CEO to set product roadmap and long-term technical direction. </li>
            </ul>
        </div><!--//details-->
    </div><!--//item-->
    <div class="item">
        <div class="meta">
            <div class="upper-row">
                <h3 class="job-title">CTO / Co-Founder</h3>
                <div class="time">2012 - 2018</div>
            </div><!--//upper-row-->
            <div class="company">GameWisp, Inc.; Nashville, TN</div>
        </div><!--//meta-->
        <div class="details">
            <p>I was directly responsible for GameWisp's technology and product strategy; overseeing the design and development of core software products for our main customer: gaming livestreamers and content creators.     
            </p>
            <p>
            GameWisp's core technology was <a href="https://www.gamasutra.com/view/pressreleases/340429/Lightstream_Acquires_GameWisp_Technology_to_Power_and_Enhance_Offerings_for_Streamers_and_Communities.php" target="_blank" rel="noopener">acquired by Lightstream in 2019.</a>
            </p>  
            <p>While at GameWisp I: </p>
            <ul>
                <li> Grew a diverse team from 1 to 10 employees and contractors.</li>
                <li> Shipped products that resulted in over $4M in Annual Recurring Revenue.</li>
                <li> Designed and developed performant and cost-effective video upload, encoding, and delivery systems utilized by thousands of active users. </li>
                <li> Developed production quality REST and WebSocket APIs used by hundreds of third-party developers.</li>
                <li> Routinely developed user-facing features and shipped production-ready code. </li>
                <li> Sat GameWisp's board and assisted with the overall strategic direction of the company.</li>
            </ul>
        </div><!--//details-->
    </div><!--//item-->
    
    <div class="item">
        <div class="meta">
            <div class="upper-row">
                <h3 class="job-title">Research Assistant</h3>
                <div class="time">2009 - 2014</div>
            </div><!--//upper-row-->
            <div class="company">Department of Electrical Engineering and Computer Science; Vanderbilt University; Nashville, TN</div>
        </div><!--//meta-->
        <div class="details">
            <p>I received my Ph D in 2014 from Vanderbilt Univeristy, studying human-computer interaction and human-robot interaction under Professor Julie A. Adams. My research investigated
                navigating and wayfinding using digital maps, and unmanned aerial vehicles.</p>
            <p> While at Vanderbilt University I:</p>
            <ul>
                <li> Developed design prototypes for academic research using C++/Qt, Ruby on Rails, and JavaScript. </li>
                <li> Performed statistical analysis on real-world user interaction data using R.</li>
                <li> Independently designed, sourced, assembled, and flight tested unmanned aerial vehicles and balloons for archaeological field use in South America.</li>
                <li> Supported archaeological survey teams in remote areas of Peru by providing on-site hardware and software development. </li>
            </ul>
        </div>
    </div>    
</section><!--//section-->

<section class="section projects-section">
    <h2 class="section-title"><i data-feather="archive"></i> Projects</h2>
    <div class="intro">
        <p>I was directly responsible for development on many projects while at GameWisp. Relevant examples include: </p>
    </div><!--//intro-->
    <div class="item">
        <span class="project-title"><a href="https://gamewisp.com">Subscriptions</a></span> - <span class="project-tagline">A fan monetization and rewards platform for live-streamers and video content creators. GameWisp's in-house subscription technology was <a href="https://www.gamasutra.com/view/pressreleases/340429/Lightstream_Acquires_GameWisp_Technology_to_Power_and_Enhance_Offerings_for_Streamers_and_Communities.php" target="_blank" rel="noopener">acquired by Lightstream in 2019</a>. </span>
        
    </div><!--//item-->
    <div class="item">
        <span class="project-title"><a href="https://www.youtube.com/watch?v=qrOutTHq4xI" target="_blank">Video Platform</a> (video link)</span> - <span class="project-tagline">Robust video functionality that allowed content creators to easily upload, distribute, and schedule premium video content. Also provided windowed viewing functionality and automatic pushing to YouTube.</span>
    </div><!--//item-->
    <div class="item">
        <span class="project-title"><a href="https://gamewisp.readme.io/docs" target="_blank">Singularity APIs</a> (docs link)</span> - <span class="project-tagline">A WebSocket and REST enabled API that allowed third party developers to interact with the GameWisp Subscriptions platform. Actively used by hundreds of developers.</span>
    </div><!--//item-->
    <div class="item">
        <span class="project-title"><a href="https://github.com/SocialiteProviders/Providers" target="_blank">Socialite Providers</a></span> - <span class="project-tagline">Contributed single sign on for Mixer and GameWisp to Laravel's Socialite package.</span>
    </div><!--//item-->
    <div class="item">
        <span class="project-title">Fusion (closed source)</span> - <span class="project-tagline">An ''OAuth of OAuths'' single sign-on platform used to provide global identity functionality across all GameWisp products using third-party social sign on (e.g., Twitch, Google, Mixer).</span>
    </div><!--//item-->
    <div class="item">
        <span class="project-title">Pulsar (closed source)</span> - <span class="project-tagline">A parallelized worker system utilized by all GameWisp products to perform offline functions, such as email sending and image processing.</span>
    </div><!--//item-->
</section><!--//section-->

<section class="skills-section section">
    <h2 class="section-title"><i data-feather="book-open"></i> Skills &amp; Proficiency</h2>
    <div class="skillset">
        <div class="item">
            <h3 class="level-title">Product Development</h3>
            <div class="level-bar">
                <div class="level-bar-inner" data-level="100%">
                </div>                                      
            </div><!--//level-bar-->                                 
        </div><!--//item-->
        <div class="item">
            <h3 class="level-title">Management &amp; Strategy</h3>
            <div class="level-bar">
                <div class="level-bar-inner" data-level="95%">
                </div>                                      
            </div><!--//level-bar-->                                 
        </div><!--//item-->
        <div class="item">
            <h3 class="level-title">PHP &amp; Laravel 5</h3>
            <div class="level-bar">
                <div class="level-bar-inner" data-level="85%">
                </div>                                      
            </div><!--//level-bar-->                                 
        </div><!--//item-->

        <div class="item">
            <h3 class="level-title">Docker &amp; DevOps</h3>
            <div class="level-bar">
                <div class="level-bar-inner" data-level="80%">
                </div>                                      
            </div><!--//level-bar-->                                 
        </div><!--//item-->


        <div class="item">
            <h3 class="level-title">AWS, GCP, &amp; Azure</h3>
            <div class="level-bar">
                <div class="level-bar-inner" data-level="70%">
                </div>                                      
            </div><!--//level-bar-->                                 
        </div><!--//item-->

        <div class="item">
            <h3 class="level-title">VueJS</h3>
            <div class="level-bar">
                <div class="level-bar-inner" data-level="70%">
                </div>                                      
            </div><!--//level-bar-->                                 
        </div><!--//item-->
        <div class="item">
            <h3 class="level-title">Python</h3>
            <div class="level-bar">
                <div class="level-bar-inner" data-level="60%">
                </div>                                      
            </div><!--//level-bar-->                                 
        </div><!--//item-->
        <div class="item">
            <h3 class="level-title">Javascript, HTML, SASS</h3>
            <div class="level-bar">
                <div class="level-bar-inner" data-level="60%">
                </div>                                      
            </div><!--//level-bar-->                                 
        </div><!--//item-->        
    </div>  
</section><!--//skills-section-->
@endsection
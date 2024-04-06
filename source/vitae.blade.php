@extends('_layouts.master')
@section('page-title')
Eli Hooten -- Curriculum Vitae
@endsection
@section('page-style')

<style>
    body {
        background: #ededed;
    }
</style> 

@endsection

@section('body')
<div class="row" style="padding-bottom: 20px; padding-top: 10px">
    {{--<a class="btn btn-lrg btn-success" href="https://www.dropbox.com/s/rhh31mb72y6mp7k/vitae.pdf" target="_blank">View as PDF</a> --}}
</div>
<div class="row cv-container" style="margin-bottom: 50px; padding-bottom: 60px; padding-top: 60px">
    <div class="col-md-10 offset-md-1" style="text-align: right; border-bottom: 1px solid">
        <h1 class="cv-header">Eli R Hooten, Ph D - Curriculum Vitae</h1>
    </div>
    <div class="col-md-10 offset-md-1 mt-2">
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Contact</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <ul class="contact-info" style="padding-inline-start: 0px">
                    <li>Site: <a href="http://elihooten.com" target="_blank">http://elihooten.com</a></li>
                    <li>Email: <a href="mailto:
                        &#101;&#108;&#105;&#114;&#046;&#104;&#111;&#111;&#116;&#101;&#110;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">
                        &#101;&#108;&#105;&#114;&#046;&#104;&#111;&#111;&#116;&#101;&#110;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;
                    </a> </li>
                </ul>
            </div>
        </section>
        <section class="row">
                <div class="col-md-2 col-sm-12 head">
                    <p class="head-text">Executive Summary</p>
                </div>
                <div class="col-md-10 col-sm-12 head">
                    <p>While obtaining my Ph D in Computer Science, I developed a deep knowledge of experimental design, human factors, statistical analysis, software development, and team management. 
                    </p>
                    <p>
                    Since graduating in 2014 I have applied these skills in startups. First serving as the CTO and Co-Founder of GameWisp until 2018, then as the CTO and Co-Founder of Codecov from 2018 to 2022, finally as Director of Engineering for Codecov at Sentry from 2022 to the present day.
                    </p>
                    <p> At GameWisp I grew the software team from myself to a team of ten individuals comprised of developers, designers, data scientists, and project managers. Additionally, I 
                        led the overall technical design of GameWisp's products and shipped production-quality code on a daily basis. While at GameWisp our Annual Recurring Revenue
                        grew from $0 to $4M, we gained hundreds of thousands active users, and shipped numerous successful products and features.
                    </p>
                    <p>
                    While at Codecov I scaled the technical team from 2 to 15+ engineers, support staff, and product developers.
                        I also led the overall technical direction of the business, and helped turn Codecov into a world class, industry leading developer tool.
                        My efforts grew Codecov's revenue and user base many times over, and as of 2022 Codecov has been used by over a million software developers worldwide.
                        Codecov was acquired by Sentry in 2022.
                    </p>
                    <p>
                        I enjoy applying my skills as an executive leader, software developer, and scientist to SaaS companies of all sizes. I'm passionate about managing product and engineering teams, solving complex technical problems, and providing executive-level oversight to software businesses.
                    </p>
                </div>
            </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Citizenship</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <p>USA</p>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Technical Expertise</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <p>Executive leadership; Management; Leading product and engineering teams; Designing, scoping, and building high scale web-based applications; Organizational process development and implementation.</p>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Education</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <h6> Vanderbilt University, Nashville, TN USA </h6>
                <p> Ph D, Computer Science, May 2014 </p>
                <ul>
                    <li>Dissertation: <a href="http://etd.library.vanderbilt.edu/available/etd-03242014-105111/" target="_blank"> Information Context in Geocollaborative Interfaces </a></li>
                    <li>Advisor: Professor Julie A. Adams</li>
                    <li>Areas of Study: Data Visualization, Human Factors </li>
                </ul>
                <p> M. Sc., Computer Science, May 2013 </p>
                <ul>
                    <li>Advisor: Professor Julie A. Adams</li>
                    <li>GPA: 3.91/4.0 </li>
                </ul>
                <p> M. Sc., Electrical Engineering, December 2010 </p>
                <ul>
                    <li>Thesis: <a href="http://etd.library.vanderbilt.edu/available/etd-12012010-140120/unrestricted/thesis.pdf" target="_blank">A Mobile, Map-Based Tasking Interface for Human-Robot Interaction</a></li>
                    <li>Advisor: Professor Julie A. Adams</li>
                    <li>Area of Study: Human-Robot Interaction</li>
                    <li>GPA: 3.86/4.0 </li>
                </ul>

                <h6> Murray State University, Murray, KY USA </h6>
                <p> B. Sc., Engineering Physics, May 2009 </p>
                <ul>
                    <li>Summa Cum Laude with Honors Diploma</li>
                    <li>Honors Thesis: Development of a Reinforcement Learning Agent to Play Ms. Pac Man</li>
                    <li>Minor in Mathematics and Statistics</li>
                    <li>GPA: 3.87/4.0</li>
                </ul>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Academic and Professional Experience</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <h6>Director of Engineering, Codecov
                    <span style="float:right"> 2022 to Present</span></h6>
                <p>Sentry</p>
                <ul>
                    <li> Devised and led Codecov's transition from a single-purpose code coverage tool to a robust code quality platform.</li>
                    <li> Scaled the Engineering, Design, and Product functions across multiple product areas, hiring both individual contributors and managers.</li>
                    <li> Successfully transitioned a team of 30 to the principles, culture, and working practices of Sentry with minimal attrition.</li>
                    <li> Led coordination efforts between Sentry and Codecov teams to launch key product integrations and new features. </li>
                    <li> Moved Codecov from closed source to a fully open source company by making all source code and product planning publicly available. </li>
                </ul>
                <h6>Chief Technology Officer, Co-Founder
                    <span style="float:right"> 2018 to 2022</span></h6>
                <p>Codecov</p>
                <ul>
                    <li> Helped scale our team from 3 to 15+ employees and contractors.</li>
                    <li> Worked alongside our Vice President of Engineering to shape Codecov's engineering processes and best practices.</li>
                    <li> Directly led and the solutions engineering, technical support, and product teams. </li>
                    <li> Served as the technical point of contact for stakeholders from many of the world's largest companies.</li>
                    <li> Worked directly with Codecov's CEO to set product roadmap and long-term technical direction. </li>
                </ul>
                <h6>Chief Technology Officer, Co-Founder <span style="float:right"> 2012 to 2018</span></h6>
                <p>GameWisp, Inc.</p>
                <ul>
                    <li> Grew and managed a diverse team from 1 to 10 employees and contractors.</li>
                    <li> Developed production quality software responsible for over $4M in Annual Recurring Revenue.</li>
                    <li> Designed performant and cost-effective video upload, encoding, and delivery systems utilized by thousands of active users. </li>
                    <li> Designed, developed, and maintained production quality REST and WebSocket APIs used by hundreds of third-party developers.</li>
                    <li> Routinely developed features and products and shipped production-quality code. </li>
                    <li> Successfully assisted GameWisp's CEO with multiple rounds of venture capital fund-raising</li>
                    <li> Performed wireframing, A/B testing, data analysis, and user interviews for GameWisp products. </li>
                </ul>
                <h6>Research Assistant <span style="float:right"> 2009 to 2014</span></h6>
                <p>Department of Electrical Engineer and Computer Science; Vanderbilt University</p>
                <ul>
                    <li> Implemented internal development processes for all laboratory software projects using C++/Qt, Ruby on Rails, R, and Git.</li>
                    <li> Independently designed, sourced, assembled, and flight tested unmanned aerial vehicles and balloons for archaeological field use in the Andes of South America.</li>
                    <li> Supported archaeological survey teams in remote areas of Peru by providing on-site hardware and software development. </li>
                    <li> Provided a production quality implementation of the <a href="http://ieeexplore.ieee.org/document/5512678/">General Visualization Abstraction Algorithm</a> in C++ </li>              
                </ul>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Refereed Publications</p>
            </div>
            <div class="col-md-10 col-sm-12">
                <div class="pub mb-2">
                    <span class="pub-title"><a href="https://azaidman.github.io/publications/dziugaiteAST2024.pdf" target="_blank">Running a Red Light: An Investigation into Why Software Engineers (Occasionally) Ignore Coverage Checks</a></span> <br>
                    <span class="pub-author">Alexander Sterk, Mairieli Wessel, Eli Hooten, Andy Zaidman</span> <br>
                    <span class="pub-pub">Proceedings of the International Conference on Automation of Software Test (AST), 2024</span><br>
                </div>
                <div class="pub mb-2">
                    <span class="pub-title"><a href="http://ieeexplore.ieee.org/abstract/document/6973982/" target="_blank">Of Drones and Deep Maps: Archaeological Placemaking with Aerial Robots, Photogrammetry, and GIS.</a></span> <br>
                    <span class="pub-author">Wernke, Steven A., Julie Adams, A., Eli Hooten, Gabriela Oré, Carla Hernández and Aurelio Rodríguez</span> <br>
                    <span class="pub-pub">Paper presented at the Invited talk for THATCamp (The Humanities and Technology) conference, 2014.</span><br>                
                </div>
                <div class="pub mb-2">
                    <span class="pub-title"><a href="http://ieeexplore.ieee.org/abstract/document/6973982/" target="_blank">Cancerous tweets: socially sharing sensitive health information</a></span> <br>
                    <span class="pub-author">MD Anderson, JA Adams, ER Hooten</span> <br>
                    <span class="pub-pub">Systems, Man and Cybernetics (SMC), 2014 IEEE International Conference on</span><br>                
                </div>
                <div class="pub mb-2">
                    <span class="pub-title"><a href="http://journals.sagepub.com/doi/abs/10.1177/1541931214581090" target="_blank">Tablet Interaction Accuracy and Precision: Seated vs. Walking</a></span> <br>
                    <span class="pub-author">ST Hayes, ER Hooten, JA Adams</span> <br>
                    <span class="pub-pub">Proceedings of the Human Factors and Ergonomics Society Annual Meeting, 2014</span><br>
                    <span class="pub-pub"> *Winner Best Student Paper </span><br>               
                </div>
                <div class="pub mb-2">
                    <span class="pub-title"><a href="http://vanderbilt.edu/wernke/images/Wernke_etal_Advances_Arch_Practice_2014.pdf" target="_blank">Capturing Complexity: Toward an Integrated Low-Altitude Photogrammetry and Mobile Geographic Information System Archaeological Registry System</a></span> <br>
                    <span class="pub-author">Steven A Wernke, Julie A Adams, Eli R Hooten</span> <br>
                    <span class="pub-pub">Advances in Archaeological Practice</span><br>
                </div>
                <div class="pub mb-2">
                    <span class="pub-title"><a href="http://www.sciencedirect.com/science/article/pii/S1071581913000633" target="_blank">Communicative modalities for mobile device interaction</a></span> <br>
                    <span class="pub-author">Eli R Hooten, Sean T Hayes, Julie A Adams</span> <br>
                    <span class="pub-pub">International Journal of Human-Computer Studies, 2013</span><br>
                </div>
                <div class="pub mb-2">
                    <span class="pub-title"><a href="http://ieeexplore.ieee.org/abstract/document/6084114/" target="_blank">Comparing input error for mouse and touch input</a></span> <br>
                    <span class="pub-author">Eli R Hooten, Julie A Adams</span> <br>
                    <span class="pub-pub">Systems, Man, and Cybernetics (SMC), 2011 IEEE International Conference on</span><br>
                </div>
                <div class="pub mb-2">
                    <span class="pub-title"><a href="http://journals.sagepub.com/doi/abs/10.1177/1071181311551231" target="_blank">Visually-Cued Touch Gestures for Accurate Mobile Interaction</a></span> <br>
                    <span class="pub-author">Sean T Hayes, Eli R Hooten, Julie A Adams</span> <br>
                    <span class="pub-pub">Proceedings of the Human Factors and Ergonomics Society Annual Meeting, 2011</span><br>
                </div>
                <div class="pub mb-2">
                    <span class="pub-title"><a href="http://journals.sagepub.com/doi/abs/10.1177/1071181311551104" target="_blank">A Comparison of Communicative Modes for Map-Based Tasking</a></span> <br>
                    <span class="pub-author">Eli R Hooten, Sean T Hayes, Julie A Adams</span> <br>
                    <span class="pub-pub">Proceedings of the Human Factors and Ergonomics Society Annual Meeting, 2011</span><br>
                </div>
                <div class="pub mb-2">
                    <span class="pub-title"><a href="https://dl.acm.org/citation.cfm?id=1734490" target="_blank">Multi-touch interaction for tasking robots</a></span> <br>
                    <span class="pub-author">Sean Timothy Hayes, Eli R Hooten, Julie A Adams</span> <br>
                    <span class="pub-pub">Human-Robot Interaction (HRI), 2010 5th ACM/IEEE International Conference on</span><br>
                </div>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Presentations</p>
            </div>
            <div class="col-md-10 col-sm-12">
                <div class="pub mb-2">
                    <span class="pub-title"><a href="https://uwm.edu/mobilizing-the-past/program/beyond-the-basemap-site-and-landscape-survey-through-low-altitude-aerial-photogrammetry-and-mobile-gis-in-the-andes/" target="_blank">Beyond the Basemap: Site and Landscape Survey through Low Altitude Aerial Photogrammetry and Mobile GIS in the Andes</a></span> <br>
                    <span class="pub-author">Steven A. Wernke (Vanderbilt University), Julie A. Adams (Vanderbilt University), Eli Hooten (Vanderbilt University), Gabriela Oré (Vanderbilt University), Carla Hernández (Vanderbilt University), Aurelio Rodríguez (Independent Scholar), and Giancarlo Marcone (Proyecto Qhapaq Ñan, Ministry of Culture of Peru)</span> <br>
                    <span class="pub-pub">MOBILIZING THE PAST FOR A DIGITAL FUTURE: The Potential of Digital Archaeology, 2015.</span><br>                
                </div>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Committee Appointments</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <p>GameWisp, Inc., Board Member - 2016 to present</p>
                <p>20th IEEE International Symposium on Robot and Human Interactive Communication, 2011 - Associate Editor</p>
                <p>8th IEEE International Workshop on Safety, Security, and Rescue Robotics, 2010 - Program Committee Member</p>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Awards and Honors</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <h6>Human Factors and Ergonomics Society</h6>
                <ul>
                    <li> Winner, Best Student Paper, 2014</li>
                </ul>
                <h6>American Society for Engineering Education</h6>
                <ul>
                    <li>National Defense Science and Engineering Graduate Fellowship, 2009 - 2012</li>
                </ul>
                <h6>National Science Foundation</h6>
                <ul>
                    <li> Graduate Research Fellowship Honorable Mention, 2010.</li>
                    <li> Graduate Research Fellowship Honorable Mention, 2009.</li>
                </ul>
                <h6>Murray State University</h6>
                <ul>
                    <li>Alumni Association Top 22 under 40, 2019.</li>
                    <li>Presidential Fellowship, 2004 - 2009</li>
                    <li>Dean's List for Academic Excellence, 2004 - 2008</li>
                    <li>Undergraduate Research and Scholarly Activity Grant, 2009</li>
                    <li>Honors Program Outstanding Senior Graduate, 2009</li>
                    <li>Engineering and Physics Oustanding Senior Graduate, 2009</li>
                    <li>Starick Scholarship Recipient, 2008</li>
                    <li>Student Organization President of the Year Nominee, 2008</li>
                    <li> Honor Society Inductions: Society of Automotive Engineers, Sigma Pi Sigma Physics Honors Society, Pi Mu Epsilon Mathematics Honors Society, Omicron Delta Kappa Honors Society (all 2007)</li>
                </ul>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Service</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <h6>Honors Program</h6>
                <p>Murray State University, Murray, KY USA</p>
                <p>President of Student Council <span style="float:right"> 2007 - 2008</span></p>
                <ul>
                    <li>Successfully proposed the addition of an Honors Math course to the Honors Program curriculum.</li>
                    <li>Oversaw council activities across all philanthropy, outreach, academic, social and service activities.</li>
                    <li>Acted as a liaison between the Honors Program and all other campus organizations.</li>
                </ul>

                <p>Philanthropy Committee Chair <span style="float:right"> 2007 - 2009</span></p>
                <ul>
                    <li>Oversaw the planning and execution of all philanthropic activities.</li>
                    <li>Raised thousands of dollars for the Waterfield Library annually.</li>
                    <li>Personally participated in all program fund raising events.</li>
                </ul>

                <h6>Department of Engineering and Physics</h6>
                <p>Murray State University, Murray, KY USA</p>
                <p>Moonbuggy Team Co-Captain <span style="float:right"> 2007 - 2009</span></p>
                <ul>
                    <li>Participated in NASAs annual Great Moonbuggy Race.</li>
                    <li>Worked with a team to design a race vehicle from scratch.</li>
                    <li>Winner of 2007 Unique Design Award</li>
                    <li>2008 Second Place Finish</li>
                    <li>2009 Fouth Place Finish</li>
                </ul>

                <p>Baja SAE Team Co-Captain <span style="float:right"> 2007 - 2008</span></p>
                <ul>
                    <li>Designed with a student team MSUs inagural Baja car: a single seat, motorized, off-road vehicle.</li>
                    <li>Personally designed and fabricated the vehicle's suspension system.</li>
                    <li>Responsible for acquiring and managing corporate sponsorships.</li>
                </ul>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">Technical Skills</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <p> The following is a subset of skills I've acquired over the last 15 years or so. It is by no means exhaustive.</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Skill</th>
                            <th>Last Used</th>
                            <th>Time Used (yrs)</th>
                            <th>Experience Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">PHP / Laravel</th>
                            <td>present</td>
                            <td>4</td>
                            <td>Advanced</td>
                        </tr>
                        <tr>
                            <th scope="row">Vue / JavaScript</th>
                            <td>present</td>
                            <td>3</td>
                            <td>Intermediate</td>
                        </tr>
                        <tr>
                            <th scope="row">Docker / Kubernetes</th>
                            <td>present</td>
                            <td>4</td>
                            <td>Intermediate</td>
                        </tr>
                        <tr>
                            <th scope="row">AWS / GCP</th>
                            <td>present</td>
                            <td>4</td>
                            <td>Intermediate</td>
                        </tr>
                        <tr>
                            <th scope="row">SVN / Git</th>
                            <td>present</td>
                            <td>8</td>
                            <td>Intermediate</td>
                        </tr>
                        <tr>
                            <th scope="row">NodeJS</th>
                            <td>2016</td>
                            <td>2</td>
                            <td>Intermediate</td>
                        </tr>
                        <tr>
                            <th scope="row">C++ / Qt</th>
                            <td>2014</td>
                            <td>10</td>
                            <td>Advanced</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="row">
            <div class="col-md-2 col-sm-12 head">
                <p class="head-text">References</p>
            </div>
            <div class="col-md-10 col-sm-12 head">
                <p> References available upon request</p>
            </div>
        </section>
    </div>
</div>
@endsection
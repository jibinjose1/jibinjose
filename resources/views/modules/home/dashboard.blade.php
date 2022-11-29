@extends('default.app')
@section('title','Jibin Jose - Home')

@section('content')
@include('modules.header.header')

<div class="container profile-section">
    <div class="row">
        <div class="col-sm-12">
            <img src="{{'assets/images/profile.jpeg'}}" alt="JIBIN">
            <h1 class="h1">JIBIN JOSE</h1>
            <h1 class="h3">PHP - LARAVEL DEVELOPER</h1>
        </div>
    </div>
</div>

<div class="container expert-section">
    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center text-danger">Areas Of Expertise</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Domain - PHP</li>
                        <li>Framework - Laravel</li>
                        <li>Web Technologies - Html,Css,Bootstrap,React Js</li>
                        <li>Database - MySQL</li>
                        <li>Version Control - Git,GitHub</li>
                        <li>Web Hosting - AWS, FileZilla</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 contact-section">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center text-danger">Get In Touch</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Mobile - 9633504157</li>
                        <li>E-mail - jibinjose173@gmail.com</li>
                        <li>LinkedIn - linkedin.com/in/jibinjose173</li>
                        <li>GitHub - github.com/jibinjose1</li>
                        <li>Facebook - Jibin Jose</li>
                        <li>Instagram - Jibin Jose</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container myself-section">
    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center text-danger">Myself</h4>
                </div>
                <div class="card-body">
                    <p>My Name is Jibin Jose. I am from Sulthan Bathery, Wayanad. I Completed my Graduation Of Degree in Bachelors of Computer
                        Applications at Alphonsa Arts and Science College, Sulthan Bathery. I Have 2 Year of Experience in PHP(Laravel).My Family
                        Consist of 5 members Including me. My Hobbies are Traveling, wild Life Photography and Sudoku.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 executive-rofile">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center text-danger">Executive Profile</h4>
                </div>
                <div class="card-body">
                    <p>Results-oriented software engineer with a focus on the design and implementation of relational database systems. 
                        2+ years of experience in developing cutting-edge engineering solutions with a wide range of eCommerce and
                         technology features. Skilled in agile processes, backend and frontend development, and creating eCommerce 
                         websites.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid work-section">
    <div class="row">
        <div class="col-sm-12 mb-5">
            <h4 class="text-center text-danger">Work Experience</h4>
        </div>
        <div class="col-sm-3">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="text-center text-primary">Freelance Laravel Developer</h5>
                </div>
                <div class="card-body">
                    <p>Freelancer.com, Fiverr</p>
                    <p>Location : Wayanad</p>
                    <p>1 October, 2020 - present</p>
                </div>
            </div>
        </div>    
        <div class="col-sm-3">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="text-center text-primary">Junior PHP Developer</h5>
                </div>
                <div class="card-body">
                    <p>Syntrio Technologies Pvt Ltd, Technopark</p>
                    <p>Location : Trivandrum</p>
                    <span>21 February, 2022 – 21 July, 2022</span>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="text-center text-primary">Associate Software Engineer</h5>
                </div>
                <div class="card-body">
                    <p>Axel Technologies Pvt Ltd, Govt. Cyberpark</p>
                    <p>Location : Kozhikode</p>
                    <span>15 July, 2021 – 7 February, 2022</span>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="text-center text-primary">Junior Software Engineer</h5>
                </div>
                <div class="card-body">
                    <p>Zewia Software Solutions Pvt Ltd</p>
                    <p>Location : Trivandrum</p>
                    <p>1 October, 2020 – 11 June, 2021</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid education-section">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-center text-danger">Education History</h4>
            
            <ul class="mt-5">
                <li>
                    Successfully Completed Graduation from University Of
                    Calicut in BCA (Bachelor Of Computer Applications) at
                    Alphonsa Arts And Science College Sulthan Bathery,
                    Wayanad.
                    <p>2017 - 2020</p>
                </li>
                <li>
                    Successfully Completed 12th From Govt.Vocational
                    Higher Secondery School, Sulthan Bathery, Wayanad.
                    <p>2015 - 2017</p>
                </li>
                <li>
                    Successfully Completed 10th From Govt.MHSS
                    Cheeral, Wayanad.
                    <p>2015</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container other-section">
    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center text-danger">Other Skills</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Hard Worker and Good Team Player</li>
                        <li>Disciplined and Positive Thinker</li>
                        <li>Optimistic, Truthful and Honest</li>
                        <li>Adaptable for any kind of Environment</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 hobbies-section">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center text-danger">Hobbies</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Travelling</li>
                        <li>Wild Life Photography</li>
                        <li>Chess And Sudoku</li>
                        <li>Photoshop & Video Editing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container language-section">
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center text-danger">Languages Known</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>English</li>
                        <li>Malayalam</li>
                        <li>Tamil</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('modules.footer.footer')
@endsection
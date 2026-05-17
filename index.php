<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="thumbnail_new.png">
<meta property="og:title" content="Alfy George - PHP Developer">
<meta property="og:description" content="Laravel, CodeIgniter, MySQL and Web Application Developer">

<title>Alfy George | Portfolio</title>
<link rel="icon" type="image/png" href="favicon_64x64.ico">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    scroll-behavior:smooth;
}

body{
    font-family:Arial, sans-serif;
    background:#0a192f;
    color:#ccd6f6;
    display:flex;
}

/* SIDEBAR */

.sidebar{
    width:35%;
    height:100vh;
    position:fixed;
    padding:80px 60px;
    background:#081423;
    border-right:1px solid rgba(255,255,255,0.05);
}

.sidebar h1{
    font-size:52px;
    margin-bottom:10px;
}

.typing{
    color:#64ffda;
    font-size:22px;
    margin-bottom:25px;
    overflow:hidden;
    white-space:nowrap;
    border-right:3px solid #64ffda;
    width:0;
    animation:typing 5s steps(40,end) infinite alternate;
}

@keyframes typing{
    from{
        width:0;
    }
    to{
        width:100%;
    }
}

.sidebar p{
    color:#8892b0;
    line-height:1.8;
    margin-bottom:35px;
}

.menu a{
    display:block;
    color:#8892b0;
    text-decoration:none;
    margin:18px 0;
    font-size:18px;
    transition:0.3s;
}

.menu a:hover{
    color:#64ffda;
    transform:translateX(10px);
}

.social{
    margin-top:40px;
}

.social a{
    margin-right:20px;
    color:#ccd6f6;
    font-size:28px;
    transition:0.3s;
}

.social a:hover{
    color:#64ffda;
    transform:translateY(-5px);
}

/* CONTENT */

.content{
    margin-left:35%;
    width:65%;
    padding:80px 60px;
}

section{
    margin-bottom:120px;
}

section h2{
    color:#64ffda;
    margin-bottom:25px;
    font-size:32px;
    position:relative;
}

section h2::after{
    content:"";
    width:70px;
    height:3px;
    background:#64ffda;
    position:absolute;
    left:0;
    bottom:-10px;
}

.about p{
    line-height:1.9;
    color:#8892b0;
    font-size:17px;
}

/* SKILLS */

.skills ul{
    padding-left:20px;
}

.skills li{
    margin-bottom:12px;
    color:#ccd6f6;
}

/* CARD DESIGN */

.job,
.project,
.subproject{
    background:rgba(17,34,64,0.8);
    border:1px solid rgba(255,255,255,0.05);
    backdrop-filter:blur(10px);
    padding:30px;
    border-radius:18px;
    margin-bottom:25px;
    transition:0.4s;
}

.job:hover,
.project:hover,
.subproject:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.job h3,
.project h3{
    margin-bottom:12px;
    color:#ffffff;
}

.job span{
    color:#64ffda;
    font-size:14px;
}

.job p,
.project p,
.subproject p{
    color:#8892b0;
    line-height:1.8;
}

/* BUTTON */

.btn{
    display:inline-block;
    margin-top:20px;
    background:#64ffda;
    color:#0a192f;
    padding:12px 24px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
}

.btn:hover{
    background:white;
    transform:translateY(-3px);
}

/* TAGS */

.tags{
    margin-top:20px;
}

.tags span{
    display:inline-block;
    background:#233554;
    color:#64ffda;
    padding:8px 15px;
    border-radius:30px;
    margin-right:10px;
    margin-top:10px;
    font-size:13px;
}

/* CONTACT */

.contact a{
    color:#64ffda;
    text-decoration:none;
    font-size:18px;
}

footer{
    margin-top:80px;
    color:#8892b0;
    font-size:14px;
}

/* MOBILE */

@media(max-width:900px){

    body{
        display:block;
    }

    .sidebar{
        width:100%;
        position:relative;
        height:auto;
        padding:50px 30px;
        border:none;
    }

    .content{
        width:100%;
        margin-left:0;
        padding:50px 25px;
    }

    .sidebar h1{
        font-size:40px;
    }

    .typing{
        font-size:18px;
    }

    section h2{
        font-size:28px;
    }

}

</style>

</head>

<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <h1>Alfy George</h1>

    <div class="typing">
        AI-Assisted Software Developer
    </div>

    <p>
        I build websites, AI-powered solutions,
        and data-driven applications.
    </p>

    <div class="menu">
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#experience">Experience</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="social">

        <a href="https://github.com/alfygeorge03" target="_blank">
            <i class="fa-brands fa-github"></i>
        </a>

        <a href="https://www.linkedin.com/in/alfy-george-04531793/" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
        </a>

    </div>

</div>

<!-- CONTENT -->

<div class="content">

<!-- ABOUT -->

<section id="about" class="about">

    <h2>About</h2>

    <p>
        I am a passionate Software Developer specializing in PHP development using Laravel and CodeIgniter frameworks.
        I build data-driven web applications, admin dashboards, automation systems, and AI-powered solutions with strong focus on performance and user experience.
        I also work with AI-powered tools to improve productivity, automate workflows, generate insights, and accelerate software development. My skills include web development, database management, MS Office solutions, Excel analytics, and AI-assisted development. I enjoy learning modern technologies and creating practical digital solutions that solve real-world problems. I am particularly interested in combining Artificial Intelligence with web applications and business automation to build smarter systems. 
    </p>

</section>

<!-- SKILLS -->

<section id="skills" class="skills">

    <h2>Skills</h2>

    <ul>
        <li>PHP Development</li>
        <li>Laravel & CodeIgniter</li>
        <li>MySQL Database</li>
        <li>HTML, CSS & JavaScript</li>
        <li>MS Office & Excel Automation</li>
        <li>AI Tools & Productivity Solutions</li>
        <li>Dashboard & Reporting Systems</li>
        <li>Data-Driven Applications</li>
    </ul>

</section>

<!-- EXPERIENCE -->

<section id="experience">

    <h2>Experience</h2>

    <div class="job">

        <span>2026 — Present</span>

        <h3>Freelance Web Developer</h3>

        <p>
            Building responsive websites, dashboards,
            and AI-assisted business solutions.
        </p>

    </div>

    <div class="job">

        <span>Previous Experience</span>

        <h3>PHP Developer</h3>

        <p>
            Worked with Laravel and CodeIgniter
            for web applications and admin systems.
        </p>

    </div>

    <a href="Alfy_George_Resume.pdf"
    class="btn"
    target="_blank">
        View Resume
    </a>

</section>

<!-- PROJECTS -->

<section id="projects">

    <h2>Projects</h2>

    <!-- <div class="project">

        <h3>Data Analysis Projects</h3>

        <p>
            Interactive dashboards and business analysis
            projects using Microsoft Excel.
        </p>

    </div>
 -->
    <!-- PROJECT 1 -->

    <div class="subproject">

        <h3>Sales Analysis</h3>

        <p>
            Developed a dynamic sales analysis dashboard
            using Microsoft Excel to analyze trends,
            KPIs, reports, and business performance.
        </p>

        <div class="tags">
            <span>Excel</span>
            <span>Dashboard</span>
            <span>Analytics</span>
        </div>

        <a href="https://github.com/alfygeorge03/sales_data_analysias.git"
        class="btn"  target="_blank">
            View Project
        </a>

    </div>

    <!-- PROJECT 2 -->

    <div class="subproject">

        <h3>Students Mark Analysis</h3>

        <p>
            Created a student performance dashboard
            using Pivot Tables, charts,
            formulas, and conditional formatting
            for academic analysis.
        </p>

        <div class="tags">
            <span>Ms Word</span>
            <span>MsExcel</span>
            <span>Ms PowerPoint</span>
            <span>Reports</span>
            <span>Visualization</span>
        </div>

        <a href="https://github.com/alfygeorge03/students_mark_analysis.git"
        class="btn" target="_blank">
            View Project
        </a>

    </div>

</section>

<!-- Next Projects -->

<section id="projects">

    <!-- <h2>Projects</h2> -->

    <!-- <div class="project">

        <h3>Data Analysis Projects</h3>

        <p>
            Interactive dashboards and business analysis
            projects using Microsoft Excel.
        </p>

    </div>
 -->
    <!-- PROJECT 3 -->

    <!-- <div class="subproject">

        <h3>Sales Analysis Dashboard</h3>

        <p>
            Developed a dynamic sales analysis dashboard
            using Microsoft Excel to analyze trends,
            KPIs, reports, and business performance.
        </p>

        <div class="tags">
            <span>Excel</span>
            <span>Dashboard</span>
            <span>Analytics</span>
        </div>

        <a href="https://github.com/alfygeorge03/sales_data_analysias.git"
        class="btn"  target="_blank">
            View Project
        </a>
 -->
    <!-- </div> -->

    <!-- PROJECT 2 -->

    <div class="subproject">

        <h3>Employment Management System (CodeIgniter)</h3>

        <p>
            This project includes a secure login system with session management, ensuring authenticated access for administrators. After login, users are directed to a responsive dashboard that provides an overview of employee records and system activities.

            
        </p>

        <div class="tags">
            <span>CodeIgniter</span>
            <span>PHP</span>
            <span>My SQL</span>
            <span>DataTable</span>
            <span>Reports in Pdf And Excel</span>
            <span>Visualization</span>
        </div>

        <a href="https://github.com/alfygeorge03/employment_management_system"
        class="btn" target="_blank">
            View Project
        </a>

    </div>

</section>

<!-- CONTACT -->

<section id="contact" class="contact">

    <h2>Contact</h2>

    <p>
        Feel free to contact me for freelance work,
        business solutions, or collaborations.
    </p>

    <br>

    <a href="mailto:alfygeorge03@gmail.com">
        alfygeorge03@gmail.com
    </a>

</section>

<footer>
    Designed & Developed by Alfy George
</footer>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="Alfy George Portfolio">
<meta property="og:description" content="AI Assisted PHP Developer | Laravel | CodeIgniter | MySQL | Data Analysis">
<meta property="og:image" content="https://alfygeorge-production.up.railway.app/thumbnail_new.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/png">
<meta property="og:type" content="website">
<meta property="og:url" content="https://alfygeorge-production.up.railway.app">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Alfy George Portfolio">
<meta name="twitter:description" content="AI Assisted PHP Developer | Laravel | CodeIgniter | MySQL | Data Analysis">
<meta name="twitter:image" content="https://alfygeorge-production.up.railway.app/thumbnail_new.png">
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
/* AI CHAT SECTION */

.ai-chat-section{
    margin-top:120px;
}

.ai-chat-wrapper{
    display:grid;
    grid-template-columns:1fr 1.2fr;
    gap:40px;
    align-items:center;
}

/* LEFT SIDE */

.chat-intro h3{
    font-size:38px;
    margin-bottom:20px;
    color:#ffffff;
    line-height:1.3;
}

.chat-intro p{
    color:#8892b0;
    line-height:1.9;
    font-size:17px;
    margin-bottom:35px;
}

.chat-features{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.feature-card{
    background:rgba(17,34,64,0.75);
    border:1px solid rgba(255,255,255,0.05);
    padding:18px 22px;
    border-radius:16px;
    display:flex;
    align-items:center;
    gap:18px;
    transition:0.3s;
    backdrop-filter:blur(10px);
}

.feature-card:hover{
    transform:translateX(8px);
    border-color:#64ffda;
}

.feature-card i{
    color:#64ffda;
    font-size:22px;
}

.feature-card span{
    color:#ccd6f6;
    font-size:16px;
}

/* CHATBOX */

.chatbox-container{
    background:rgba(17,34,64,0.85);
    border:1px solid rgba(255,255,255,0.06);
    border-radius:24px;
    overflow:hidden;
    backdrop-filter:blur(18px);
    box-shadow:0 15px 40px rgba(0,0,0,0.35);
}

/* HEADER */

.chatbox-header{
    padding:22px;
    background:linear-gradient(
        135deg,
        #64ffda,
        #3dd9c5
    );
}

.chat-user{
    display:flex;
    align-items:center;
    gap:15px;
}

.chat-avatar{
    width:55px;
    height:55px;
    border-radius:50%;
    background:white;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#0a192f;
    font-size:24px;
}

.chat-user h4{
    color:#081423;
    margin-bottom:4px;
}

.chat-user span{
    color:#133040;
    font-size:14px;
}

/* BODY */

.chatbox-body{
    height:420px;
    overflow-y:auto;
    padding:25px;
    display:flex;
    flex-direction:column;
    gap:18px;
    background:#0f1f38;
}

.bot-message,
.user-message{
    max-width:80%;
    padding:16px 18px;
    border-radius:18px;
    line-height:1.7;
    animation:fadeIn 0.3s ease;
}

.bot-message{
    background:#233554;
    color:#ccd6f6;
    align-self:flex-start;
}

.user-message{
    background:#64ffda;
    color:#081423;
    align-self:flex-end;
}

/* FOOTER */

.chatbox-footer{
    padding:20px;
    background:#112240;
    display:flex;
    align-items:center;
    gap:15px;
}

.chatbox-footer textarea{
    flex:1;
    resize:none;
    height:58px;
    border:none;
    outline:none;
    border-radius:16px;
    padding:16px;
    background:#233554;
    color:#ffffff;
    font-size:15px;
    font-family:Arial;
}

.chatbox-footer textarea::placeholder{
    color:#8892b0;
}

.chatbox-footer button{
    width:60px;
    height:58px;
    border:none;
    border-radius:16px;
    background:#64ffda;
    color:#081423;
    font-size:20px;
    cursor:pointer;
    transition:0.3s;
}

.chatbox-footer button:hover{
    transform:scale(1.05);
    background:white;
}

/* SCROLLBAR */

.chatbox-body::-webkit-scrollbar{
    width:6px;
}

.chatbox-body::-webkit-scrollbar-thumb{
    background:#64ffda;
    border-radius:20px;
}

/* ANIMATION */

@keyframes fadeIn{

    from{
        opacity:0;
        transform:translateY(10px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}

/* MOBILE */

@media(max-width:900px){

    .ai-chat-wrapper{
        grid-template-columns:1fr;
    }

    .chat-intro h3{
        font-size:30px;
    }

    .chatbox-body{
        height:350px;
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
<!-- AI CHATBOT SECTION -->

<section class="ai-chat-section">

    <h2>AI Assistant</h2>

    <div class="ai-chat-wrapper">

        <!-- CHAT LEFT -->

        <div class="chat-intro">

            <h3>
                Ask My AI Assistant
            </h3>

            <p>
                Learn more about my projects, skills,
                services, technologies, and development work
                using this AI-powered assistant.
            </p>

            <div class="chat-features">

                <div class="feature-card">
                    <i class="fa-solid fa-code"></i>
                    <span>Web Development</span>
                </div>

                <div class="feature-card">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Data Analysis</span>
                </div>

                <div class="feature-card">
                    <i class="fa-solid fa-robot"></i>
                    <span>AI Solutions</span>
                </div>

            </div>

        </div>

        <!-- CHAT RIGHT -->

        <div class="chatbox-container">

            <div class="chatbox-header">

                <div class="chat-user">

                    <div class="chat-avatar">
                        <i class="fa-solid fa-robot"></i>
                    </div>

                    <div>
                        <h4>Alfy AI Assistant</h4>
                        <span>Online</span>
                    </div>

                </div>

            </div>

            <div class="chatbox-body" id="chatBody">

                <div class="bot-message">
                    Hello 👋 <br><br>
                    I can help you explore Alfy George's
                    portfolio, projects, technical skills,
                    and development services.
                </div>

            </div>

            <div class="chatbox-footer">

                <textarea
                    id="userMessage"
                    placeholder="Ask something about my work..."
                ></textarea>

                <button onclick="sendMessage()">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>

            </div>

        </div>

    </div>

</section>

<footer>
    Designed & Developed by Alfy George
</footer>

</div>
<script>

async function sendMessage(){

    let textarea = document.getElementById("userMessage");

    let message = textarea.value.trim();

    if(message === ""){
        return;
    }

    let chatBody = document.getElementById("chatBody");

    // USER MESSAGE

    chatBody.innerHTML += `
        <div class="user-message">
            ${message}
        </div>
    `;

    textarea.value = "";

    // BOT TYPING

    let typingId = "typing-" + Date.now();

    chatBody.innerHTML += `
        <div class="bot-message" id="${typingId}">
            Typing...
        </div>
    `;

    chatBody.scrollTop = chatBody.scrollHeight;

    try{

        let response = await fetch("chat.php", {

            method:"POST",

            headers:{
                "Content-Type":"application/x-www-form-urlencoded"
            },

            body:"message=" + encodeURIComponent(message)

        });

        let data = await response.text();

        document.getElementById(typingId).innerHTML = data;

    }catch(error){

        document.getElementById(typingId).innerHTML =
            "Unable to connect to AI assistant.";

    }

    chatBody.scrollTop = chatBody.scrollHeight;

}

</script>

</body>
</html>
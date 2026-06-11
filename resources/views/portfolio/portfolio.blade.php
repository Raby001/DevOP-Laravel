<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raby Han | DevOps & Full-Stack Developer</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        header {
            background: #0f172a;
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        header h1 {
            font-size: 3rem;
        }

        header p {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #cbd5e1;
        }

        section {
            padding: 70px 0;
        }

        h2 {
            margin-bottom: 20px;
            color: #0f172a;
        }

        .about p {
            max-width: 800px;
        }

        .skills {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .skill-card,
        .project-card {
            background: #f8fafc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,.08);
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .project-card h3 {
            margin-bottom: 10px;
        }

        footer {
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 30px;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background: #1d4ed8;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1>Raby Han</h1>
        <p>DevOps Engineer | Full-Stack Developer | Cloud Enthusiast</p>
        <a href="https://www.hanraby.com" class="btn">View My Real Portfolio</a>
    </div>
</header>

<section class="about">
    <div class="container">
        <h2>About Me</h2>
        <p>
            I am a passionate developer focused on DevOps, cloud infrastructure,
            automation, and modern web development. I enjoy building scalable
            applications, automating deployments, and creating efficient workflows
            using technologies such as Laravel, Ansible, Docker, Linux, and AWS.
        </p>
    </div>
</section>

<section>
    <div class="container">
        <h2>Technical Skills</h2>

        <div class="skills">
            <div class="skill-card">
                <h3>Backend</h3>
                <p>PHP, Laravel, Node.js, REST APIs</p>
            </div>

            <div class="skill-card">
                <h3>Frontend</h3>
                <p>HTML, CSS, JavaScript, React</p>
            </div>

            <div class="skill-card">
                <h3>DevOps</h3>
                <p>Ansible, Docker, CI/CD, Linux</p>
            </div>

            <div class="skill-card">
                <h3>Cloud</h3>
                <p>AWS, DigitalOcean, Nginx, Apache</p>
            </div>
        </div>
    </div>
</section>

<section id="projects">
    <div class="container">
        <h2>Featured Projects</h2>

        <div class="projects">

            <div class="project-card">
                <h3>Laravel Deployment Automation</h3>
                <p>
                    Automated Laravel deployments using Ansible, GitHub,
                    Apache, and Linux servers.
                </p>
            </div>

            <div class="project-card">
                <h3>Task Management System</h3>
                <p>
                    Full-stack productivity application with authentication,
                    role-based access control, and dashboard analytics.
                </p>
            </div>

            <div class="project-card">
                <h3>Cloud Infrastructure Setup</h3>
                <p>
                    Provisioned and managed cloud servers with automated
                    monitoring and deployment pipelines.
                </p>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2>Contact</h2>

        <p>Email: raby@example.com</p>
        <p>GitHub: github.com/rabyhan</p>
        <p>LinkedIn: linkedin.com/in/rabyhan</p>
    </div>
</section>

<footer>
    <p>© 2026 Raby Han. All Rights Reserved.</p>
</footer>

</body>
</html>
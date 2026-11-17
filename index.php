<?php
$nickname = "Trisha";
$course = "Bachelor of Science in Information Technology";

$about = "I am a curious and creative student who loves discovering new things. I enjoy writing, exploring technology, and challenging myself to become better every day. I believe that growth comes from every experience, every mistake, and every new beginning.";

$education = [
    ["01", "College", "Mater Dei College", "BS Information Technology • 2nd Year"],
    ["02", "Senior High School", "San Agustin National High School", "HUMSS Strand"],
    ["03", "Elementary", "Cabog Clarin Elementary School", "Elementary Education"]
];

$skills = [
    ["</>", "HTML & CSS", "Creating and styling web pages.", "01"],
    ["JS", "JavaScript", "Learning to make websites interactive.", "02"],
    ["01", "Java", "Building logic through programming.", "03"],
    ["✎", "Creative Writing", "Expressing ideas through words.", "04"],
    ["✧", "Communication", "Sharing ideas and connecting with others.", "05"],
    ["⌘", "Problem Solving", "Finding solutions through logical thinking.", "06"]
];

$hobbies = [
    ["✍", "Writing", "Turning thoughts into words."],
    ["🏸", "Badminton", "Playing and staying active."],
    ["♫", "Singing", "Expressing myself through music."],
    ["📖", "Reading", "Exploring stories and ideas."]
];

$email = "trishaponte10@gmail.com";
$phone = "0955 065 6715";
$location = "Clarin, Bohol, Philippines";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Trisha | Personal Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

<style>
:root {
    --navy: #101e3a;
    --blue: #4169a8;
    --light: #e9f1ff;
    --white: #ffffff;
    --muted: #8291aa;
    --accent: #a7c8ff;
    --background: #f5f7fc;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

body {
    background: var(--background);
    color: var(--navy);
    font-family: 'DM Sans', sans-serif;
    line-height: 1.7;
}

.container {
    width: 88%;
    max-width: 1150px;
    margin: auto;
}

/* NAVIGATION */

nav {
    background: rgba(255,255,255,.95);
    padding: 20px 0;
    position: sticky;
    top: 0;
    z-index: 100;
    border-bottom: 1px solid #e8edf5;
}

.nav-content {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.nav-links {
    display: flex;
    gap: 30px;
    list-style: none;
}

.nav-links a {
    text-decoration: none;
    color: var(--navy);
    font-size: 13px;
    font-weight: 600;
    transition: .3s;
}

.nav-links a:hover {
    color: var(--blue);
}

/* HERO */

.hero {
    padding: 90px 0;
    background: linear-gradient(120deg, #f5f7fc, #e9f1ff);
}

.hero-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 50px;
}

.hero-text {
    flex: 1;
}

.small-title {
    color: var(--blue);
    font-size: 12px;
    letter-spacing: 4px;
    font-weight: 700;
    margin-bottom: 18px;
}

.hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(38px, 5vw, 58px);
    line-height: 1.2;
    font-weight: 400;
    margin-bottom: 20px;
}

.hero h1 span {
    color: var(--blue);
    font-weight: 400;
}

.hero-description {
    color: #68758b;
    font-size: 15px;
    max-width: 520px;
    margin-bottom: 30px;
}

.course-label {
    display: inline-block;
    background: var(--white);
    color: var(--blue);
    padding: 10px 18px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 600;
}

.hero-image {
    flex-shrink: 0;
}

.photo-frame {
    width: 250px;
    height: 310px;
    padding: 10px;
    background: var(--white);
    border: 1px solid #dce6f5;
    box-shadow: 15px 15px 0 var(--accent);
}

.photo-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* GENERAL SECTION */

section {
    padding: 85px 0;
}

.section-heading {
    margin-bottom: 40px;
}

.section-heading p {
    color: var(--blue);
    font-size: 11px;
    letter-spacing: 4px;
    font-weight: 700;
    margin-bottom: 8px;
}

.section-heading h2 {
    font-family: 'Playfair Display', serif;
    font-size: 38px;
    font-weight: 500;
}

/* ABOUT */

.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 65px;
    align-items: center;
}

.about-card {
    background: var(--navy);
    color: var(--white);
    min-height: 290px;
    padding: 45px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    box-shadow: 12px 12px 0 var(--light);
}

.about-card .slogan {
    font-family: 'Playfair Display', serif;
    font-size: 25px;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

.about-card p {
    font-size: 12px;
    color: var(--accent);
    letter-spacing: 3px;
}

.about-text h3 {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    margin-bottom: 15px;
}

.about-text p {
    color: var(--muted);
    font-size: 14px;
}

/* EDUCATION */

.education {
    background: var(--light);
}

.education-list {
    display: grid;
    gap: 18px;
}

.education-item {
    display: flex;
    align-items: center;
    gap: 25px;
    background: var(--white);
    padding: 25px;
    border-left: 4px solid var(--blue);
    transition: .3s;
}

.education-item:hover {
    transform: translateX(6px);
}

.education-number {
    font-family: 'Playfair Display', serif;
    font-size: 30px;
    color: var(--accent);
}

.education-item h3 {
    font-size: 17px;
    margin-bottom: 3px;
}

.education-item p {
    color: var(--muted);
    font-size: 13px;
}

/* SKILLS */

.skills-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.skill-card {
    background: var(--white);
    border: 1px solid #e5ebf4;
    padding: 28px;
    transition: .3s;
}

.skill-card:hover {
    background: var(--light);
    transform: translateY(-7px);
    box-shadow: 0 12px 25px rgba(16,30,58,0.08);
}

.skill-icon {
    width: 48px;
    height: 48px;
    background: var(--light);
    color: var(--blue);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 17px;
    font-weight: 700;
    margin-bottom: 20px;
}

.skill-number {
    color: var(--accent);
    font-size: 11px;
    letter-spacing: 2px;
}

.skill-card h3 {
    font-size: 17px;
    margin: 7px 0;
}

.skill-card p {
    color: var(--muted);
    font-size: 13px;
}

/* HOBBIES */

.hobbies {
    background: var(--light);
}

.hobbies-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}

.hobby-card {
    background: var(--white);
    text-align: center;
    padding: 30px 15px;
    border: 1px solid #e3eaf5;
    transition: .3s;
}

.hobby-card:hover {
    background: var(--navy);
    color: var(--white);
    transform: translateY(-5px);
}

.hobby-icon {
    font-size: 30px;
    margin-bottom: 10px;
}

.hobby-card h3 {
    font-size: 15px;
}

/* QUOTE */

.quote-section {
    background: var(--navy);
    color: var(--white);
    text-align: center;
    padding: 75px 20px;
}

.quote-section h2 {
    font-family: 'Playfair Display', serif;
    font-size: 30px;
    font-weight: 400;
    max-width: 700px;
    margin: auto;
}

.quote-section p {
    color: var(--accent);
    font-size: 12px;
    letter-spacing: 3px;
    margin-top: 18px;
}

/* CONTACT */

.contact-content {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.contact-card {
    padding: 28px;
    background: var(--white);
    border: 1px solid #e5ebf4;
}

.contact-card span {
    color: var(--blue);
    font-size: 12px;
    letter-spacing: 2px;
    font-weight: 700;
}

.contact-card h3 {
    font-size: 16px;
    margin-top: 10px;
    overflow-wrap: anywhere;
}

.contact-card a {
    color: var(--navy);
    text-decoration: none;
}

/* FOOTER */

footer {
    background: var(--navy);
    color: var(--white);
    padding: 25px;
    text-align: center;
    font-size: 12px;
}

footer span {
    color: var(--accent);
}

/* RESPONSIVE */

@media (max-width: 768px) {
    .container {
        width: 90%;
    }

    .nav-content {
        justify-content: center;
    }

    .nav-links {
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .nav-links a {
        font-size: 11px;
    }

    .hero {
        padding: 60px 0;
    }

    .hero-content {
        flex-direction: column-reverse;
        text-align: center;
    }

    .hero-description {
        margin-left: auto;
        margin-right: auto;
    }

    .photo-frame {
        width: 210px;
        height: 260px;
    }

    .about-content {
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .skills-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .hobbies-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .contact-content {
        grid-template-columns: 1fr;
    }

    section {
        padding: 65px 0;
    }
}

@media (max-width: 420px) {
    .skills-grid {
        grid-template-columns: 1fr;
    }

    .section-heading h2 {
        font-size: 32px;
    }

    .about-card {
        padding: 30px;
    }
}
</style>
</head>

<body>

<!-- NAVIGATION -->

<nav>
    <div class="container nav-content">
        <ul class="nav-links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#education">EDUCATION</a></li>
            <li><a href="#skills">SKILLS</a></li>
            <li><a href="#hobbies">HOBBIES</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </div>
</nav>

<!-- HERO -->

<header class="hero" id="home">
    <div class="container hero-content">

        <div class="hero-text">
            <p class="small-title">WELCOME TO MY PORTFOLIO</p>

            <h1>Hello, I'm <span>Trisha Ann P. Dullen.</span></h1>

            <p class="hero-description">
                A student, a dreamer, and a continuous learner.
                Exploring creativity and technology one step at a time.
            </p>

            <div class="course-label">
                <?php echo htmlspecialchars($course); ?>
            </div>
        </div>

        <div class="hero-image">
            <div class="photo-frame">
                <img src="photo.jpg" alt="Trisha's Profile Picture">
            </div>
        </div>

    </div>
</header>

<!-- ABOUT -->

<section id="about">
    <div class="container">

        <div class="section-heading">
            <p>GET TO KNOW ME</p>
            <h2>About Me</h2>
        </div>

        <div class="about-content">

            <div class="about-card">
                <div class="slogan">LEARN • GROW • CREATE</div>
                <p>A LITTLE PROGRESS EVERY DAY</p>
            </div>

            <div class="about-text">
                <h3>Every journey starts somewhere.</h3>
                <p><?php echo htmlspecialchars($about); ?></p>
            </div>

        </div>
    </div>
</section>

<!-- EDUCATION -->

<section class="education" id="education">
    <div class="container">

        <div class="section-heading">
            <p>MY ACADEMIC JOURNEY</p>
            <h2>Education</h2>
        </div>

        <div class="education-list">

            <?php foreach ($education as $school): ?>
                <div class="education-item">

                    <div class="education-number">
                        <?php echo htmlspecialchars($school[0]); ?>
                    </div>

                    <div>
                        <p><?php echo htmlspecialchars($school[1]); ?></p>
                        <h3><?php echo htmlspecialchars($school[2]); ?></h3>
                        <p><?php echo htmlspecialchars($school[3]); ?></p>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- SKILLS -->

<section id="skills">
    <div class="container">

        <div class="section-heading">
            <p>WHAT I CAN DO</p>
            <h2>My Skills</h2>
        </div>

        <div class="skills-grid">

            <?php foreach ($skills as $skill): ?>
                <div class="skill-card">

                    <div class="skill-icon">
                        <?php echo htmlspecialchars($skill[0]); ?>
                    </div>

                    <span class="skill-number">
                        <?php echo htmlspecialchars($skill[3]); ?>
                    </span>

                    <h3><?php echo htmlspecialchars($skill[1]); ?></h3>

                    <p><?php echo htmlspecialchars($skill[2]); ?></p>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- HOBBIES -->

<section class="hobbies" id="hobbies">
    <div class="container">

        <div class="section-heading">
            <p>THINGS I ENJOY</p>
            <h2>My Hobbies</h2>
        </div>

        <div class="hobbies-grid">

            <?php foreach ($hobbies as $hobby): ?>
                <div class="hobby-card">

                    <div class="hobby-icon">
                        <?php echo $hobby[0]; ?>
                    </div>

                    <h3><?php echo htmlspecialchars($hobby[1]); ?></h3>
                    <p><?php echo htmlspecialchars($hobby[2]); ?></p>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- QUOTE -->

<div class="quote-section">
    <h2>
        "Small steps every day lead to beautiful destinations."
    </h2>

    <p>KEEP LEARNING. KEEP BECOMING.</p>
</div>

<!-- CONTACT -->

<section id="contact">
    <div class="container">

        <div class="section-heading">
            <p>LET'S CONNECT</p>
            <h2>Contact Me</h2>
        </div>

        <div class="contact-content">

            <div class="contact-card">
                <span>EMAIL</span>
                <h3>
                    <a href="mailto:<?php echo htmlspecialchars($email); ?>">
                        <?php echo htmlspecialchars($email); ?>
                    </a>
                </h3>
            </div>

            <div class="contact-card">
                <span>PHONE</span>
                <h3><?php echo htmlspecialchars($phone); ?></h3>
            </div>

            <div class="contact-card">
                <span>LOCATION</span>
                <h3><?php echo htmlspecialchars($location); ?></h3>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->

<footer>
    <p>
        © <?php echo date("Y"); ?>
        <span><?php echo htmlspecialchars($nickname); ?></span>.
        All Rights Reserved.
    </p>
</footer>

</body>
</html>

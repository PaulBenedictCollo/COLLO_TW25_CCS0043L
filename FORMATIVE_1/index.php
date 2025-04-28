<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Benedict Collo Resume</title>
</head>
<body>
    <?php
    $fullName = "Paul Benedict V. Collo";
    $Program = "BSIT- Web and Mobile Applications";
    $Address = "Sta. Cruz Laguna";
    $Email = "Email: paulbenedictcollo@gmail.com";
    $Number = "Mobile: 09192064481";
    $aboutMeheading = "About Me";
    $aboutMe = "A programming student specializing in web and mobile applications. 
        An enthusiastic and collaborative individual with a strong ability to communicate and work effectively in group settings. 
        I actively participated in organizations to foster personal growth and enhance my interpersonal skills.";

    $academicBackgroundheading = "Academic Background";
    $jhs = "Pedro Guevara Memorial National High School (2017 -2021)";
    $shs = "Laguna Senior High School (2021-2023)";
    $college = "FEU Institute of Technology (2023 - Present)";

    $skillsHeading = "Skills";
    $skill1 = "C++";
    $skill2 = "Java";
    $skill3 = "Python";
    $skill4 = "HTML";
    $skill5 = "CSS";
    $skill6 = "Javascript";
    $skill7 = "Adobe Photoshop";
    $skill8 = "People Skills";
    $skill9 = "Communication Skills";
    ?>
    <div class="resume-container">
        <button type="button" onclick="changeColor()">Change Color</button>
        <header class="top">  
            <div class="info">
                <h1><?= $fullName; ?></h1>
                <hr> 
                <p><?= $Program; ?></p>
                <p><?= $Address; ?></p>
                <p><?= $Email; ?></p>
                <p><?= $Number; ?></p>
            </div>
            <div class="profile-picture">
                <img src="assets/ColloPicture.png" alt="Profile Picture" />
            </div>
        </header>

        <section class="about-me">
            <h2><?= $aboutMeheading; ?></h2>
            <p><?= $aboutMe; ?></p>
        </section>

        <div class="content">
            <section class="left-section">
                <h2><?= $academicBackgroundheading; ?></h2>
                <p><strong><?= $jhs; ?></strong></p>
                <p><strong><?= $shs; ?></strong></p>
                <p><strong><?= $college; ?></strong></p>
            </section>

            <section class="right-section">
                <h2>Skills</h2>
                <ul>
                    <li><?= $skill1; ?></li>
                    <li><?= $skill2; ?></li>
                    <li><?= $skill3; ?></li>
                    <li><?= $skill4; ?></li>
                    <li><?= $skill5; ?></li>
                    <li><?= $skill6; ?></li>
                    <li><?= $skill7; ?></li>
                    <li><?= $skill8; ?></li>
                    <li><?= $skill9; ?></li>
                </ul>
            </section>
        </div>

    </div>
    
    <script>
        function changeColor() {
            let resumeContainer = document.querySelector('.resume-container');
            let isColorDark = resumeContainer.classList.toggle('dark-theme');
            
            if (isColorDark) {
                resumeContainer.style.backgroundColor = '#f8c8dc';  
                resumeContainer.style.color = '#330f14';  
            } else {
                resumeContainer.style.backgroundColor = 'white'; 
                resumeContainer.style.color = 'black';  
            }
        }
        
    </script>
</body>
</html>
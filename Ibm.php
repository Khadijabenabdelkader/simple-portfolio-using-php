<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Styled Name Example</title>
<link rel="stylesheet" href="style.css"> 

</head>

<body>
<?php
include "cnx.php"; ?>
        <form action="insert.php" method="GET">
    <nav>
        <div class="titre">jane Doe</div>
            <ul>
                <li><a class="Aboutme">About Me</a></li>
                <li><a class="Skills">Skills</a></li>
                <li><a class="Projects">Projects</a></li>
                <li><a class="Recommendations">Recommendations</a></li>
             </ul>
             <img src="C:\xampp1\htdocs\test\Ibm\photos\482138.png" alt="mail">jdoe@jeemail.com</br><img src="C:\xampp1\htdocs\test\Ibm\photos\159832.png" alt="telephone">+13456764598   
    </nav>
    <main>
        <section>
            <div class="profile">
                <div class="profile_Img">
                    <img src="C:\xampp1\htdocs\test\Ibm\photos\téléchargement.png" alt="Jane Doe">
                </div>
                 <div class="Aboutme">
                    <h2 class="greeting">Hi, I'm Jane Doe!<img src="C:\xampp1\htdocs\test\Ibm\photos\th.jpeg"></h1>
                    <p class="desc">I am a full stack developper with 2 year of experience in both application  
                    and presentation layers. I have worked on applications and microservices
                    deployed on IBM Cloud. I am an avid user of IBM Watson Services and have
                    worked on Watson Asssistant NLU, Sentiment analyser to name a few.</p>
                </div>
            </div>
        </section>
        <section>
            <div><h1 >Skills</h1></div>
            <div class="Skill">
                <div class="box">
                    <img src="C:\xampp1\htdocs\test\Ibm\photos\téléchargement (1).png">
                    <h3>HTML></h3>
                    <h3>2 years experience</h3>
                 </div>
                <div class="box">
                    <img src="C:\xampp1\htdocs\test\Ibm\photos\script.js">
                    <h3>JavaScript</h3>
                    <h3>1.5 years experience</h3>
                </div>
                <div class="box">
                    <img src="C:\xampp1\htdocs\test\Ibm\photos\téléchargement (3).png">
                    <h3>Java></h3>
                    <h3>5 years experience</h3>
                </div>
                <div class="box">
                    <img src="C:\xampp1\htdocs\test\Ibm\photos\images.png">
                    <h3>React></h3>
                    <h3>1 years experience</h3>
                </div>
                <div class="box">
                    <img src="C:\xampp1\htdocs\test\Ibm\photos\téléchargement (4).png">
                    <h3>Node.js></h3>
                    <h3>1 years experience</h3>
                </div>
                <div class="box">
                    <img src="C:\xampp1\htdocs\test\Ibm\photos\téléchargement (5).png">
                    <h3>css></h3>
                    <h3>2 years experience</h3>
                </div>
            </div>
            <div class="Projects">
                <h1>Projects</h1>
                <h3>chatbot</h3>
                <p> Developed a secure website integrated with chatbot for an automobile client using HTML, CSS, JavaScript and IBM Watson Asssistant.</p>
                <h3>Sentiment Analyzer</h3>
                <p>Developed and deployed a sentiment analyzer for the box review section of an eCommerce platform using IBM NLU.</p>
                <h3>Fashion website</h3>
                <p>Created a styled multi-page website for a new player in the fashion industry and integrated it with a shopping cart, using stripe for payement gateway.</p>
            </div>
            <div><h1>Recommendations</h1></div>
            <div id="Recommendation"   name="Recommendation">
                <div id="box">
                    <p>"Jane is a very quik learner and quickly grasps key concepts of web development.She got a great attitude and she is an excellent team player. she has a curious mind and asks the right question. She takes initiative within a team and has potentials to lead the team."</p>
                </div>
                <div id="box">
                    <p>"Working with Jane has been an awesome experience.She is highly knowledgable and always goes the extra step to make sure everything is right. For any future projects that need her expertise i would definitely want to work with her again."</p>
                </div>
                <div id="box">
                    <p>"I had worked wlong with Jane during the initial phase of our venture which needed Web development. She is a committed ressource who has in depth knowledge about the domaine. She will be an asset for any organisation!"</p>
                </div>
                
                <?php
                
                $req=mysqli_query($link,"SELECT * FROM user");

                while($resultat=mysqli_fetch_array($req))
                {?>
                <div id="box">
                    <p><?php  echo $resultat["message"];?>  </p>
                <?php 
                }  ?>

            </div>
            
        </section>
    </main>
    <footer>
        <div class="container">
            <h2>leave a Recommendation</h2>
            <form>
                <div class="input1">
                    <input type="text"  name="nom" placeholder="Name (optional)">
                </div>
                <div class="input2">
                    <input type="text"  name="message" placeholder="Message">
                </div>
                <button id="CLICK">CLICK</button>
            </form>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>







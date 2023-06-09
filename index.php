<?php
$title="portfolio";
include ("header.php");
?>
<?php
include "config.php";
$pdo = new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BDD,
    config::UTILISATEUR, config::MOTDEPASSE);

?>

    <div class="main-content">
        <!--Home-->
        <main>
            <section class="section sec1 heard-t active" id="home">
                <div class="header-content">
                    <div class="left-header">
                        <div class="text-hello">
                            <span class="bg-text" style="font-weight: 900" >BONJOUR</span>
                        </div>
                        <div class="image">
                            <img src="img/Mathéo-DELAUNAY-Étudiant-Informatique-portfolio-photo-profil.svg" alt="Profils Picture">
                        </div>
                    </div>
                    <div class="right-header">
                        <h1 class="name">
                            Salut, je suis <span>Mathéo Delaunay</span>.
                            Un étudiant français en développement web.
                        </h1>
                        <p>
                            Je suis un développeur web et j'adore créer de beaux sites web.
                        <div class="btn-con">
                            <a href="docs/CV.pdf" class="main-btn" target="_blank">
                                <span class="btn-text">Download CV</span>
                                <span class="btn-icon"><i class="fas fa-download"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section sec2 about-t" id="about">
                <div class="main-title">
                    <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
                </div>
                <div class="about-container">
                    <div class="left-about">
                        <h4>Information About me</h4>
                        <p>
                            Je suis Mathéo DELAUNAY, étudiant en ingénierie informatique à l'EPSI Nantes.
                            Passionné par la programmation et l'informatique en général, j'ai acquis des compétences en HTML, CSS, PHP, MySQL et dans les suites Adobe.
                            J'aime également pratiquer le sport en montagne et les jeux vidéo.
                            Découvrez mon portfolio pour en savoir plus sur mes compétences et réalisations.
                        </p>
                        <div class="btn-con">
                            <a href="docs/CV.pdf" class="main-btn" target="_blank">
                                <span class="btn-text">Download CV</span>
                                <span class="btn-icon"><i class="fas fa-download"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="right-about">
                        <div class="about-item">
                            <div class="abt-text">
                                <p class="large-text">500+</p>
                                <p class="small-text">Satisfied<br\> Customer</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="abt-text">
                                <p class="large-text">560+</p>
                                <p class="small-text">Projects<br\> Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-stats">
                    <h4 class="stat-title">My skills</h4>
                    <div class="progress-bars">
                        <div class="progress-bar">
                            <p class="prog-title">html5</p>
                            <div class="progress-con">
                                <p class="prog text">80%</p>
                                <div class="progress">
                                    <span class="html"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">CSS3</p>
                            <div class="progress-con">
                                <p class="prog text">80%</p>
                                <div class="progress">
                                    <span class="css3"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">JAVASCRIPT</p>
                            <div class="progress-con">
                                <p class="prog text">20%</p>
                                <div class="progress">
                                    <span class="javascript"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">PYTHON</p>
                            <div class="progress-con">
                                <p class="prog text">50%</p>
                                <div class="progress">
                                    <span class="python"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">C</p>
                            <div class="progress-con">
                                <p class="prog text">0%</p>
                                <div class="progress">
                                    <span class="c"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">c++</p>
                            <div class="progress-con">
                                <p class="prog text">60%</p>
                                <div class="progress">
                                    <span class="cplusplus"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="stat-title">My Timeline</h4>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="tl-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <p class="tl-duration">2022 - present</p>
                        <h5>Étudiant<span> - EPSI - Nantes</span></h5>
                        <p>
                            Je suis actuellement en train de suivre cette formation du BTS SIO - Services Informatiques aux Organisations, dans l'école EPSI/WIS de Nantes, où j'ai la chance de bénéficier d'un enseignement de qualité et d'infrastructures modernes. En plus de suivre cette formation, je suis également membre du Bureau des Étudiants (BDE), ce qui me permet de m'impliquer dans la vie étudiante et de participer à l'organisation d'événements pour les étudiants de l'école. Je suis convaincu(e) que cette formation et mon engagement dans le BDE me permettront d'acquérir les compétences nécessaires pour réussir dans ma future carrière.

                        </p>
                    </div>
                    <div class="timeline-item">
                        <div class="tl-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <p class="tl-duration">2020 - 2022</p>
                        <h5>Apprentice<span> - La Mennais - Ploermel</span></h5>
                        <p>
                           Le lycée La Mennais à Ploërmel est l'entreprise où j'ai travaillé pendant 2 ans en tant qu'apprenti technicien informatique. Avec mon superviseur, M. ECHELARD, j'ai aidé les employés et les élèves à résoudre tous les problèmes liés au numérique. Pendant cette période, j'ai travaillé avec mon superviseur, M. ECHELARD.

                        </p>
                    </div>
                    <div class="timeline-item">
                        <div class="tl-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <p class="tl-duration">2019 - 2022</p>
                        <h5>Étudiant<span> - St Felix la salle - Nantes</span></h5>
                        <p>
                            De 2019 à 2022, j'ai suivi avec passion le Baccalauréat professionnel en Systèmes Numériques OPTION C RÉSEAUX INFORMATIQUES ET SYSTÈMES COMMUNICANTS. Cette formation m'a permis d'apprendre à concevoir, installer et maintenir des réseaux informatiques ainsi que des systèmes de communication.
                        </p>

                    </div>

                </div>
            </section>
            <section class="section sec3 portfolio-t" id="portfolio">
                <div class="main-title">
                    <h2>RECENT <span>WORKS</span><span class="bg-text">Recent Works</span></h2>
                </div>
                <p class="port-text">
                    Voici quelques-unes de mes réalisations que j'ai effectuées dans différents langages de programmation.
                </p>
                <div class="portfolios">
                    <!--Items 1-->
                    <div class="portfolios-item">
                        <div class="image">
                            <img src="img/port-lbr.png" alt="Live Bloc Reservation">
                        </div>
                        <div class="hover-items">
                            <h3>Live Bloc Reservation</h3>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nemo ipsam sequi illum quasi suscipit vero dolore numquam quidem natus mollitia nulla quisquam inventore, deleniti, sed quo voluptate at repellendus.
                            </p>
                        </div>
                    </div>
                    <!--Items 2-->
                    <div class="portfolios-item">
                        <div class="image">
                            <img src="img/port1.jpg" alt="">
                        </div>
                        <div class="hover-items">
                            <h3>Fake Project</h3>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nemo ipsam sequi illum quasi suscipit vero dolore numquam quidem natus mollitia nulla quisquam inventore, deleniti, sed quo voluptate at repellendus.
                            </p>
                        </div>
                    </div>
                    <!--Items 3-->
                    <div class="portfolios-item">
                        <div class="image">
                            <img src="img/port7.jpg" alt="">
                        </div>
                        <div class="hover-items">
                            <h3>Fake Project</h3>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nemo ipsam sequi illum quasi suscipit vero dolore numquam quidem natus mollitia nulla quisquam inventore, deleniti, sed quo voluptate at repellendus.
                            </p>
                        </div>
                    </div>
                    <!--Items 4-->
                    <div class="portfolios-item">
                        <div class="image">
                            <img src="img/port5.jpg" alt="">
                        </div>
                        <div class="hover-items">
                            <h3>Fake Project</h3>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nemo ipsam sequi illum quasi suscipit vero dolore numquam quidem natus mollitia nulla quisquam inventore, deleniti, sed quo voluptate at repellendus.
                            </p>
                        </div>
                    </div>
                    <!--Items 5-->
                    <div class="portfolios-item">
                        <div class="image">
                            <img src="img/port2.jpg" alt="">
                        </div>
                        <div class="hover-items">
                            <h3>Fake Project</h3>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nemo ipsam sequi illum quasi suscipit vero dolore numquam quidem natus mollitia nulla quisquam inventore, deleniti, sed quo voluptate at repellendus.
                            </p>
                        </div>
                    </div>
                    <!--Items 6-->
                    <div class="portfolios-item">
                        <div class="image">
                            <img src="img/port4.jpg" alt="">
                        </div>
                        <div class="hover-items">
                            <h3>Fake Project</h3>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nemo ipsam sequi illum quasi suscipit vero dolore numquam quidem natus mollitia nulla quisquam inventore, deleniti, sed quo voluptate at repellendus.
                            </p>
                        </div>
                    </div>
                    <!--Items 7-->
                    <div class="portfolios-item">
                        <div class="image">
                            <img src="img/port6.jpg" alt="">
                        </div>
                        <div class="hover-items">
                            <h3>Fake Project</h3>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nemo ipsam sequi illum quasi suscipit vero dolore numquam quidem natus mollitia nulla quisquam inventore, deleniti, sed quo voluptate at repellendus.
                            </p>
                        </div>
                    </div>

                </div>
            </section>
            <section class="section sec4 contact" id="contact">
                <div class="contact-container">
                    <div class="main-title">
                        <h2>Conctact <span>Me</span><span class="bg-text">Conct</span></h2>
                    </div>
                    <div class="contact-content-con">
                        <div class="left-contact">
                            <h4 class="stat-title">INFORMATIONS</h4>
                            <h4>Contactez-moi ici.</h4>
                            <p>
                                N'hésitez pas à me contacter si vous avez des questions ou si vous souhaitez discuter de projets web passionnants ! Je suis impatient de discuter avec vous.
                            </p>
<div class="contact-info">
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="contact-labels">Localisation</span>
                                    </div>
                                    <p>
                                        : Nantes, France
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                        <span class="contact-labels">Email</span>
                                    </div>
                                    <p>
                                        <span>: contact@seonay.eu</span>
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-user-graduate"></i>
                                        <span class="contact-labels">Formation</span>
                                    </div>
                                    <p>
                                        <span>: EPSI, Nantes</span>
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                        <span class="contact-labels">Numéro</span>
                                    </div>
                                    <p>
                                        <span>: 07 82 19 97 54</span>
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-globe-europe"></i>
                                        <span class="contact-labels">Langues</span>
                                    </div>
                                    <p>
                                        <span>: Français, Anglais</span>
                                    </p>
                                </div>
                            </div>                            <div class="contact-icons">
                                <div class="contact-icon">
                                    <a href="https://www.facebook.com/matheo.delaunay.35/" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://github.com/D-Seonay/D-Seonay.git" target="_blank">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/math%C3%A9o-delaunay-71561921a/" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="right-contact">
                            <h4 class="stat-title">Formulaire</h4>
                            <form action=""  method="post" class="contact-form">
                                <div class="input-control i-c-2">
                                    <input type="text" required placeholder="YOUR FIRST NAME" name="first_name" value="<?php if(isset($_POST['first_name'])) { echo $_POST['first_name']; }?>">
                                    <input type="text" required placeholder="YOUR NAME" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; }?>">
                                </div>
                                <div class="input-control">
                                    <input type="email" required placeholder="YOUR EMAIL" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; }?>">
                                </div>
                                <div class="input-control">
                                    <textarea name="message" id="" cols="15" rows="8" placeholder="Message Here..." ><?php if(isset($_POST['message'])) { echo $_POST['message']; }?></textarea>
                                </div>
                                <div class="btn-conctact">
                                    <div class=" btn-con">
                                        <button href="" class="main-btn" style="height: 52px">
                                            <span class="btn-icon"><i class="fas fa-rocket"></i></span>
                                            <input type="submit" class="btn-submit"  value="Submit" name="mailform">
                                        </button>

                                    </div>

                                    <div class="btn-con">
                                        <a href="docs/CV.pdf" class="main-btn" target="_blank">
                                            <span class="btn-text">Download CV</span>
                                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if(isset($msg))
                                {
                                    echo $msg;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

        </main>

<?php
include ("footer.php");

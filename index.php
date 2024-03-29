<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mustafa Nab</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/myAvatar.png" />
        <!-- Font Awesome icons (free version)-->
        <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jua&family=Press+Start+2P&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/css.css" rel="stylesheet" />
        
    </head>

  <body >
      <div id="loader">

      </div>
      <video autoplay muted loop id="home-bg-video">
        <source src="assets/backvideo.mp4" type="video/mp4">
      </video>
            
        <div id="home-overlay">
            <div class="container">
                <div id="home-content">
                    <div id="home-content-inner" class="text-left">
                        <div id="home-heading">
                            <h3 id="home-heading-1">Hey, This is</h3>
                            <h1 id="home-heading-2"><span>Mustafa Nab</span></h1>
                        </div>
                        <div id="home-text">
                            <p>I am a </p><p style="color: #f4c613" class="typing"></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social">
          <nav >
            <br>
            <br>
            <br>
            <br>
            <ul>
                <li><a class="social-link" href="https://www.instagram.com/hadid.mustafa/"><i class="fab fa-instagram"></i></a></li>
                <li><a class="social-link" href="https://www.facebook.com/M07898"><i class="fab fa-facebook"></i></a></li>
                <li><a class="social-link" href="https://www.linkedin.com/in/mustafa-nab"><i class="fab fa-linkedin"></i></a></li>
                <li><a class="social-link" href="https://github.com/mustafahadid"><i class="fab fa-github"></i></a></li>
            </ul>
          </nav>
        </div>
    
        <!-- navbar -->
        
        <section id="container-nav">
        
          <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="#">MUSTAFA NAB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto topnav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about-me-section">ABOUT ME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#myskills">SKILLS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#achievements">ACHIEVMENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    
                </ul>
            </div>
            <div class="line" id="scrollIndicator"></div>
          </nav>
        
        </section>
  <!-- about me -->
        <section id="about-me-section">
          <div class="about-me-content">
            
            <div class="about-me-left">
              <h1>About Me</h1>
              <p>Innovative, creative and a good team member player, I possess bachelor of computer science and I am doing my master degree at Gazi Unisersity of Turkey.<br> I have a comprehensive orientation with the basic of computer science and programming languages such as C++, C#, VB and java and python. Beside I gained excellent experience of web developing and website managing and application.	In addition, I have a huge familiarity with database management systems like Oracle, SQL server, My SQL, mango db. A part from this I have knowledge of computer networking in terms of routing and switching and security. 
                I look forward to boost my career knowledge by getting involved at all levels where possibly with in this particular framework.
              </p>
            </div>
            <div class="about-me-right">
              <img id="mypic" src="assets/mypic.png" style="max-width:100%;height:auto;">
            </div>
          </div>
        </section>

  <!-- project section -->
        <section id="projects" class="background-image"> 
          <img class="responsiveproject" src="assets/projectsimg.png">
              <!-- project slide show -->
              <div id="project-slide-show">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="600" height="400" src="https://www.youtube.com/embed/i4QIYl0YkRk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                        <div class="slide-caption">
                        <h5>Book Review</h5>
                        <p>The application developed in flask framework using python and sql query.<br><a href="https://github.com/mustafahadid/bookreview">Source Code</a><br>
                          <a href="">Demo</a></p>
                      </div>
                    </div> 
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
        </section>


            <section id="myskills" class="background-image">
              <img src="assets/myskillimg.png" class="responsiveproject">
                
                  <div class="headerskill">
                    <small>1. basic</small> <small>2. novic</small> <small>3. intermediate</small> 
                    <br><small>4. Advanced</small><small> 5. Expert</small>
                  </div>
                  <div class="skill-content">
                   
                    <div class="left">
                      <img src="assets/programming.png"><br>
                      <h4>Web Development</h4>
                      <ul>
                        <li class="html">Html5/Css3-5</li>
                        <li class="javascript">Java Script/php-2</li>
                        <li class="flask">Flask /django framework-4</li>
                        <li class="database">database-5</li>
                      </ul>
                    </div>
                    
                    <div class="main">
                      <img src="assets/brain.png"><br>
                      <h4>Programming</h4>
                      <ul>
                        <li class="python">python-4</li>
                        <li class="c">c/c++-4</li>
                        <li class="vb">C#/vb-3</li>
                        <li class="sql">SQL-4</li>
                      </ul>
                    </div>
                    
                    <div class="right">
                      <img src="assets/coordination.png"><br>
                      <h4>Others</h4>
                      <ul>
                        <li class="cloud">cloud computing/networking-3</li>
                        <li class="photoshop">photoshop/illustrator-4</li>
                        <li class="git">Git-4</li>
                        <li class="linux">Linux-2</li>
                      </ul>
                    </div>
                  </div>
           
                      
            </section>
            
            <!-- achievments -->
            <section id="achievements" class="background-image">
              <img class="responsiveproject" src="assets/achivementspic.png">
              <div class="container" >
                <!-- Grid row -->
                <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <img class="embed-responsive-item" src="certificates/python.PNG">
                            </div>

                          </div>

                          <!--Footer-->
                          <div class="modal-footer justify-content-center">
                            <span class="mr-4">Programming essential in python from python Institute</span>
                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="certificates/python.PNG" 
                        data-toggle="modal" data-target="#modal1"></a>

                              </div>
                              <!-- Grid column -->
                              
                              

                                <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-4">

                            <!--Modal: Name-->
                            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <img class="embed-responsive-item" src="certificates/cs50x.png">
                            </div>

                          </div>

                          <!--Footer-->
                          <div class="modal-footer justify-content-center">
                            <span class="mr-4">CS50x Introduction to computer science form Harvard University</span>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="certificates/cs50x.png" 
                        data-toggle="modal" data-target="#modal6"></a>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-6 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <img class="embed-responsive-item" src="certificates/cisco.PNG">
                            </div>

                          </div>

                          <!--Footer-->
                          <div class="modal-footer justify-content-center">
                            <span class="mr-4">Cisco certified entry network technician form Cisco</span>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="certificates/cisco.PNG"
                        data-toggle="modal" data-target="#modal4"></a>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">
                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <img class="embed-responsive-item" src="certificates/codecamp.PNG">
                            </div>

                          </div>

                          <!--Footer-->
                          <div class="modal-footer justify-content-center">
                            <span class="mr-4">Responsive web design from freecodecamp</span>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="certificates/codecamp.PNG" 
                        data-toggle="modal" data-target="#modal11"></a>

                              </div>
                
                  <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <img class="embed-responsive-item" src="certificates/turkish.PNG">
                            </div>

                          </div>

                          <!--Footer-->
                          <div class="modal-footer justify-content-center">
                            <span class="mr-4">C1 Turkish language certificate from Gazi University!</span>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="certificates/turkish.PNG" 
                        data-toggle="modal" data-target="#modal10"></a>

                  </div>

                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <img class="embed-responsive-item" src="certificates/cloud.PNG">
                            </div>

                          </div>

                          <!--Footer-->
                          <div class="modal-footer justify-content-center">
                            <span class="mr-4">Introduction to cloud from Coursera!</span>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="certificates/cloud.PNG"
                        data-toggle="modal" data-target="#modal2"></a>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-6 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <img class="embed-responsive-item" src="certificates/google.PNG">
                            </div>

                          </div>

                          <!--Footer-->
                          <div class="modal-footer justify-content-center">
                            <span class="mr-4">Introduction to Google cloud identity from Coursera</span>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="certificates/google.PNG" 
                        data-toggle="modal" data-target="#modal5"></a>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-6 mb-4">
                    
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <img class="embed-responsive-item" src="certificates/begginer.jpg">
                            </div>

                          </div>

                          <!--Footer-->
                          <div class="modal-footer d-block d-md-flex justify-content-center">
                            <span class="mr-4">Javascript & php for begginer from Udemy</span>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="certificates/begginer.jpg"
                        data-toggle="modal" data-target="#modal3"></a>

                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-6 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <img class="embed-responsive-item" src="certificates/english.jpg">
                            </div>

                          </div>

                          <!--Footer-->
                          <div class="modal-footer justify-content-center">
                            <span class="mr-4">Toefle iBT preparation from ELCS</span>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="certificates/english.jpg"
                        data-toggle="modal" data-target="#modal9"></a>

                  </div>
                  
                  
                </div>
                <!-- Grid row -->

                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-12 mb-4">
  
                      <!--Modal: Name-->
                      <div class="modal fade" id="modal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
  
                          <!--Content-->
                          <div class="modal-content">
  
                            <!--Body-->
                            <div class="modal-body mb-0 p-0">
  
                              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <img class="embed-responsive-item" src="certificates/hackerrank.png">
                              </div>
  
                            </div>
  
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                              <span class="mr-4">certificate python Basic from HackerRank</span>
  
                              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
                            </div>
  
                          </div>
                          <!--/.Content-->
  
                        </div>
                      </div>
                      <!--Modal: Name-->
  
                      <a><img class="img-fluid z-depth-1" src="certificates/hackerrank.png" 
                          data-toggle="modal" data-target="#modal15"></a>
  
                                </div>
                                <!-- Grid column -->
                                
                                
  
                                  <!-- Grid column -->
                              <div class="col-lg-4 col-md-6 mb-4">
  
                              <!--Modal: Name-->
                              <div class="modal fade" id="modal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
  
                          <!--Content-->
                          <div class="modal-content">
  
                            <!--Body-->
                            <div class="modal-body mb-0 p-0">
  
                              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <img class="embed-responsive-item" src="certificates/jpmorgan.PNG">
                              </div>
  
                            </div>
  
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                              <span class="mr-4">JpMorgan software engineering virtual internship </span>  
                              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
                            </div>
  
                          </div>
                          <!--/.Content-->
  
                        </div>
                      </div>
                      <!--Modal: Name-->
  
                      <a><img class="img-fluid z-depth-1" src="certificates/jpmorgan.PNG" 
                          data-toggle="modal" data-target="#modal16"></a>
  
                    </div>
                    <!-- Grid column -->
                    
                                  <!-- Grid column -->
                                  <div class="col-lg-4 col-md-6 mb-4">
  
                                    <!--Modal: Name-->
                                    <div class="modal fade" id="modal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg" role="document">
        
                                <!--Content-->
                                <div class="modal-content">
        
                                  <!--Body-->
                                  <div class="modal-body mb-0 p-0">
        
                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                      <img class="embed-responsive-item" src="certificates/microsoft.PNG">
                                    </div>
        
                                  </div>
        
                                  <!--Footer-->
                                  <div class="modal-footer justify-content-center">
                                    <span class="mr-4">microsoft Engineering virtual internship</span>  
                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
        
                                  </div>
        
                                </div>
                                <!--/.Content-->
        
                              </div>
                            </div>
                            <!--Modal: Name-->
        
                            <a><img class="img-fluid z-depth-1" src="certificates/microsoft.PNG" 
                                data-toggle="modal" data-target="#modal17"></a>
        
                          </div>
                          <!-- Grid column -->
                  </div>
                  <!-- grid row -->
                
              </div>
            </section>

            <!--contact -->
            <section id="contact" class="background-image">
              <img class="responsiveproject" src="assets/contactimg.png">
              <div class="contact-container">
                <div class="uper-text">
                  <h1>Don't hesitate to</h1><br>
                  <h2>just say hello...</h2>
                  <p>mustafahadid40@gmail.com</p>
                </div>
                <div class="inputcontact">
                  <form  id="myform" method="POST" action="contact.php" >

                    <input type="text" id="name" name="name" maxlength="50" placeholder="Your name.." required>
                
                    <input type="email" id="email" name="email" maxlength="50" placeholder="Your email.." required>
                
                    <textarea id="message" name="message" maxlength="500" minlength="2" placeholder="Your message.." style="height:100px"></textarea>
                
                    <input type="submit" value="submit"><br>
                    <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                  </form>

                </div>

              </div>
              
            </section>
            <footer>
              <div id="footer">
                <P>© 2020 Mustafa Nab.  All rights reserved.</P>
                <P>developed by Mustafa Nab.</P>
              </div>
            </footer>
          
        <!-- Footer-->
     
        <script src="js/overflow.js"></script>
        <script src="js/loader.js"></script>
        <script src="js/nav-progress.js"></script>
        <script src="js/scroll.js"></script>
        <script src="js/typer.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

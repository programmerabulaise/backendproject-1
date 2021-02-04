 <!DOCTYPE html>
 <html lang="en">
   <head>
     <title>Abu Laise</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- font-awesome link    -->
   <script src="https://kit.fontawesome.com/78e73b37a7.js" crossorigin="anonymous"></script>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
   </head>
   <body>
       <!-- nav bar start here -->
       <nav class="navbar navbar-expand-lg navbar-light bg-danger text-white position-relative">
         <div class="container">
            <a class="navbar-brand float-left h3 text-white"  href="">Abu Laise</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse container  " id="navbarSupportedContent">
              <ul class="navbar-nav    ">
                <li class="nav-item active">
                  <a class="nav-link text-white " href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#aboutme">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#what-i_know">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Reuse</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">blog</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Website
                  </a>
                  <div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-white" href="#">Facebook</a>
                    <a class="dropdown-item text-white" href="#">Google</a>
                    <a class="dropdown-item text-white" href="#">Whatsapp</a>
                    <a class="dropdown-item text-white" href="#">You Tube</a>
                     
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#contactsection">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" data-toggle="modal" data-target="#login" data-whatever="@mdo"  href="#">Log In</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="sinup.html" data-toggle="modal" data-target="#sinin" data-whatever="@mdo"  href="#" >Sin Up</a>
                </li>
              </ul>
               
         </div>
        </div>
      </nav>

      <!-- log In with bootstrap popup modul start here -->

      <div class="modal fade " id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content modulbg">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="index.html">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Emali:</label>
                  <input type="email" class="form-control"  placeholder=" Enter Your Emalil"id="recipient-name" required>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Password:</label>
                  <input type="password" class="form-control" id="recipient-name" placeholder="Enter Your password" required>
                </div>
                 <input type="submit" class="btn btn-outline-danger float-right w-30%" value="Log In">
              </form>
            </div>
             
          </div>
        </div>
      </div>
      <!-- log In with bootstrap popup modul  end here-->

      <!-- Sin in In with bootstrap popup modul  start  here-->
       
    <div class="modal fade " id="sinin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registion form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="index.html">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Fname</label>
                <input type="email" class="form-control"  placeholder=" Enter Your fname"id="recipient-name" required>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Lname</label>
                <input type="text" class="form-control"  placeholder=" Enter Your lname"id="recipient-name" required>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Username</label>
                <input type="text" class="form-control"  placeholder=" Enter Your Emalil"id="recipient-name" required>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Emali:</label>
                <input type="email" class="form-control"  placeholder=" Enter Your Emalil"id="recipient-name" required>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="recipient-name" placeholder="Enter Your password" required>
              </div>
               <input type="submit" class="btn btn-outline-danger float-right w-30%" value="Sin Up">
            </form>
          </div>
           
        </div>
      </div>
    </div>
      <!-- sin In with bootstrap popup modul  end here-->

       <!-- nav bar end here -->
       <!-- start slider section -->
       <div id="carouselExampleIndicators" style="position:relative;" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" src="https://i.ibb.co/QFsjxFQ/slide1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block text-white">
                <h5>first slider</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure consequuntur magnam iste provident. Dicta voluptatum vitae natus illo excepturi unde eveniet. Temporibus perspiciatis nemo amet quo quia neque similique quisquam?

                </p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="https://i.ibb.co/BLH50xB/main-banner2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block text-dark abutext">
                 <h1 class="pb-3"> I'am Abu Laise</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi perferendis provident doloribus minima hic rerum, et temporibus unde numquam nulla animi sunt excepturi eveniet ratione nisi a autem facere architecto nemo aliquid minus debitis totam consequatur repellendus. Vitae dolorum voluptatem sed, non expedita asperiores aliquid saepe recusandae incidunt voluptas animi magni sint illo at maiores qui nam tenetur quae quo!
                </p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid"   src="https://i.ibb.co/QFsjxFQ/slide1.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block text-light ">
                <h5>first slider</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure consequuntur magnam iste provident. Dicta voluptatum vitae natus illo excepturi unde eveniet. Temporibus perspiciatis nemo amet quo quia neque similique quisquam?
                    
                </p>
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
       <!-- end slider section -->
       
       <!-- tex content start here -->
       <section id="aboutme"class="py-5">
           <div class="container">
               <div class="row">
                  
                   <div class="col-md-8">
                       <div class="secondcontent">
                           <h1 class="pb-2"> About me</h1>
                           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum aperiam cumque laboriosam odit eum numquam molestias velit possimus dignissimos! Vitae praesentium voluptatum sapiente omnis atque quis sequi, enim esse eveniet. Labore repellendus adipisci velit necessitatibus nostrum ullam, id laboriosam molestiae veritatis incidunt sapiente ex provident, at, inventore nemo corrupti! Eos fugiat ipsa officiis ducimus ab ipsum consequuntur reprehenderit dolor similique modi dicta, dignissimos voluptate iste consectetur, unde vero sequi autem cupiditate deleniti eaque. Dicta deserunt obcaecati maxime soluta, delectus quia cum numquam accusantium accusamus, voluptates excepturi alias aliquam totam officia distinctio. Eaque cum vitae exercitationem deleniti quisquam, consequuntur sequi ipsum?</p>
                       </div>

                   </div>
                   <div class="col-md-4">
                    <div class="firstcontent">
                        <img src="https://i.ibb.co/nRPg4dB/me.jpg" class="img-fluid rounded" alt="">
                    </div>
                </div>
               </div>
           </div>
       </section>
       <!-- tex content end here -->

       <!-- what id do start here -->
       <section id="what-i_know" class="bg-dark py-5">
           <div class="container">
               <div class="whitido  text-center py-5 text-white"  ><h1>What I Know</h1></div>
               <div class="row">
                   <div class="col-sm-12 col-md-6 col-lg-4">
                       <div class="first-box text-center ">
                        
                           <p class="text-center pb-2 pt-4 h1">HTML</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa natus laudantium dicta doloribus corporis quisquam sapiente, temporibus recusandae consectetur impedit! Vero, iste tempora? Hic numquam aut odio suscipit totam <a href="#">learn more..</a></p>
                       </div>
                   </div>
                   <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="first-box text-center ">
                        <p class="text-center pb-2 pt-4 h1">CSS</p>
                         
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa natus laudantium dicta doloribus corporis quisquam sapiente, temporibus recusandae consectetur impedit! Vero, iste tempora? Hic numquam aut odio suscipit totam <a href="#">learn more..</a></p>
                    </div>
                </div><div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="first-box text-center ">
                        <p class="text-center pb-2 pt-4 h1">BOOTSTRAP</p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa natus laudantium dicta doloribus corporis quisquam sapiente, temporibus recusandae consectetur impedit! Vero, iste tempora? Hic numquam aut odio suscipit totam <a href="#">learn more..</a></p>
                    </div>
                </div><div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="first-box text-center ">
                        <p class="text-center pb-2 pt-4 h1">JAVA SCRIPT</p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa natus laudantium dicta doloribus corporis quisquam sapiente, temporibus recusandae consectetur impedit! Vero, iste tempora? Hic numquam aut odio suscipit totam <a href="#">learn more..</a></p>
                    </div>
                </div><div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="first-box text-center ">
                        <h1 class="text-center pb-2 pt-4">JQUERY</h1>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa natus laudantium dicta doloribus corporis quisquam sapiente, temporibus recusandae consectetur impedit! Vero, iste tempora? Hic numquam aut odio suscipit totam <a href="#">learn more..</a></p>
                    </div>
                </div><div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="first-box text-center ">
                        <p class="text-center pb-2 pt-4 h1">WORDPRESS</p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa natus laudantium dicta doloribus corporis quisquam sapiente, temporibus recusandae consectetur impedit! Vero, iste tempora? Hic numquam aut odio suscipit totam <a href="#">learn more..</a></p>
                    </div>
                </div><div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="first-box text-center ">
                        <p class="text-center pb-2 pt-4 h1">PHP</p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa natus laudantium dicta doloribus corporis quisquam sapiente, temporibus recusandae consectetur impedit! Vero, iste tempora? Hic numquam aut odio suscipit totam <a href="#">learn more..</a></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="first-box text-center ">
                        <p class="text-center pb-2 pt-4 h1">MYSQL</p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa natus laudantium dicta doloribus corporis quisquam sapiente, temporibus recusandae consectetur impedit! Vero, iste tempora? Hic numquam aut odio suscipit totam <a href="#">learn more..</a></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="first-box text-center ">
                        <p class="text-center pb-2 pt-4 h1">PHPTOSHOP</p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa natus laudantium dicta doloribus corporis quisquam sapiente, temporibus recusandae consectetur impedit! Vero, iste tempora? Hic numquam aut odio suscipit totam <a href="#">learn more..</a></p>
                    </div>
                </div>
                 
               </div>
           </div>
       </section>
         <!-- what id do start here -->

         <!-- contact section start herer -->
         <section id="contactsection" class="py-5">
             <div class="container">
                <div class="whitidoD  text-center py-5 text-white"  ><h1>CONTACT US</h1></div>
                <div class="row">
                    <div class="col-sm-12 col-md-4  ">
                        <div class="contact1stbox my-2">
                            <i class="fas fa-map-marker-alt"></i><span>LOCATION</span>
                            <h3> Guwahati,assam</h3>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="contact1stbox my-2">
                            <i class="fas fa-envelope-open-text"></i><span>LOCATION</span>
                            <h3> Guwahati,assam</h3>
                        </div>
                    </div>
                     <div class="col-sm-12 col-md-4">
                        <div class="contact1stbox my-2">
                            <i class="fas fa-phone"></i><span>LOCATION</span>
                            <h3> Guwahati,assam</h3>
                        </div>
                    </div>
                    <div class="col-sm-12 py-5">
                        <!-- form start here -->
                       <div class="formarea">
                        <form>
                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <label for="validationDefault01"> </label>
                                <input type="text" class="form-control" id="validationDefault01" placeholder="First name"   required>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationDefault02"> </label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="Last name"   required>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label for="validationDefault02"> </label>
                                 <input type="email" class="form-control" id="validationDefault02" placeholder="Enter Your Email"   required>
                               </div>
 
                               <div class="col-sm-12">
                                 <label for="validationDefault02"> </label>
                                  <textarea name="" class="form-control"placeholder="Discribe you project discription and submit" id="" cols="6" rows="6" required></textarea>
                               </div>
                            </div>
                             
                              
                            </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input " type="checkbox" value="" id="invalidCheck2" required>
                                        <label class="form-check-label " for="invalidCheck2">
                                        Agree to terms and conditions
                                        </label>
                                    </div>
                                </div>
                                <div id="submitform"><button class="btn btn-danger float-right" type="submit">Submit form</button>
                                
                                </div>
                         </form>
                        </div>
                       </div>
                    </div>
                </div>
             </div>
         </section>
         <!-- contact section end herer -->
         <!-- footer section star here  -->
          <footer>
              <div class="container">
                  <ul id="medial-icon">
                      <li>
                          <a href="#"><i class="fab fa-facebook    "></i></a>
                          <a href="#"><i class="fab fa-whatsapp    "></i></a>
                          <a href="#"><i class="fab fa-twitter    "></i></a>
                          <a href="#"><i class="fab fa-instagram    "></i></a>
                      </li>
                  </ul>
              </div>
              <div class="text-center pb-3 " style="background:#f6f6f6;">
                  &copy; copywigth 2021 by programmer abu laise
              </div>
          </footer>
         <!-- footer section end here -->
       <!--  -->
       
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
<?php

require 'config.php';
if(!isset($_SESSION)){
  session_start(); 

} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/LOGO 1.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <!-- Remember to include jQuery :)  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <title>The Pampa Grill</title>
</head>
<body>
    <section class="section-header">

        <div class="navigation">
            
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
              <span class="navigation__icon">&nbsp;</span>
            </label>

          <div class="navigation__background">&nbsp;</div>
            <nav class="nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="#home" class="navigation__link">Home</a></li>
                    <li class="navigation__item"><a href="#order" class="navigation__link">Make your order</a></li>
                    <li class="navigation__item"><a href="#menu" class="navigation__link">Menu</a></li>
                    <li class="navigation__item"><a href="#contact" class="navigation__link">Contact</a></li>
                </ul>
            </nav>
<script>
    let checkbox = document.getElementById('navi-toggle')
    let links = document.getElementsByClassName('navigation__link')
   
    for(let i = 0; i <links.length; i++){
        links[i].addEventListener('click',function(){
            checkbox.checked = false;
        })
    }
      

</script>
        </div>
        <div class="header" id="home">
            <img src="./img/LOGO 1.png" alt="" class="header__logo">
            <img src="./img/dish-3-comp.png" alt="" class="header__img">
            <a href="#order" class="btn btn-order">Make your order</a>
        </div>      
    </section>
    <section class="section-bg">
            <section class="section-nosotros" id="nosotros">
            
                <div class="nosotros">
                    <div class="nosotros__texto" data-aos="fade-up">
                        <h2 class="heading-2 heading-2-nosotros" data-aos="fade-down">Our <span class="span-red">Story  </span> </h2>
                        We started our Argentinean restaurant because we are far from our land, and we wanted to feel close to our gastronomy.
                        That is why, by visiting The Pampa Grill you will feel at home if you are from Argentina, 
                        and if you're not, then it's a trip you can take without airplanes, or passports! 
                        Come try our acclaimed authentic Argentinean cuisine, paired with our traditional atmosphere, and exceptional service.
                    </div>
                    <div class="nosotros__photo">
    
                        <picture style="text-align:center">
                            <source srcset="./img/dish-5-mobile.png" media="(max-width:500px)" class="nosotros__photo--picture data-aos="fade-right">
                            <img src="./img/dish-5.png"  alt="" class="nosotros__photo--picture data-aos="fade-right">
                        </picture>
                    </div>
                </div>
            </section>

            <div class="intersection" id="order">
                   
                <h2 class="heading-2 heading-2-pedido" data-aos="fade-up"  data-aos-delay="250">
                    Make  Your Order 
                <span class="span-red">online</span> 
                </h2>
              
                <div class="pedido"> 
                        <a href="https://www.ubereats.com/miami/food-delivery/the-pampa-grill/Gl01AK5_SF2sYsAgUhcjpA" target="blank" class="pedidos pedidos--2" data-aos="fade-up"  data-aos-delay="750"> 
                           Uber eats
                        </a>
                        <a href="https://www.doordash.com/store/the-pampa-grill-boca-raton-1528452/en-US" target="blank" class="pedidos pedidos--2" data-aos="fade-up"  data-aos-delay="750"> 
                           Door Dash
                        </a>
                        <a href="#ex1" rel="modal:open"  target="blank" class="pedidos pedidos--2" data-aos="fade-up"  data-aos-delay="750" id="btn-modal">
                            Call now
                        </a>                
                </div>
    </section> 
    </div>
    <section class="section-menu" id="menu">
        <h2 class="heading-2 heading-2-menu" data-aos="fade-up"><span class="span-red">The</span> Menu</h2>
        <div class="menu">
            <div class="menu__item" data-aos="fade-left">
                <h3 class="heading-3">APPETIZERS</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Picada de la casa x2 $23.50</h4>
                        <span class="menu__content--name">Ham, Cheese, Salami, Matambre, Olives,
                            French Fries, Bread</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Picada Argenta x2 $27.50</h4>
                        <span class="menu__content--name">Breaded veal cutlet, breaded chicken cutlet,
                            sausage, red pepper, olives, french fries,
                            bread</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Matambre $17.90</h4>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Sweetbread $18.90</h4>
                        <span class="menu__content--name">With french fries</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Chinchulines $18.90</h4>
                        <span class="menu__content--name">Sausage and blood sausage with french
                            fries</span>
                    </li>
                </ul>
                <ul class="menu__list">
                    <h3 class="heading-3">Entrees</h3>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Cutlet $21.95</h4>
                        <span class="menu__content--name">Breaded chicken or beef</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Napolitana Cutlet $23.95</h4>
                        <span class="menu__content--name">Breaded chicken or beef, ham, cheese and
                            red sauce</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">“Ari” Mila $34.99</h4>
                        <span class="menu__content--name">Breaded beef cutlet over french fry
                            platter, tomato, ham, cheese, and fried egg</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Salmon $26.95</h4>
                        <span class="menu__content--name">With veggies and mashed potatoes</span>
                    </li>
                   
                </ul>
            </div>
            <div class="menu__photo" >
                <!-- <img srcset="./img/dish-7-comp-mobile.png 600w,
                             ./img/dish-7-comp.png 1000w" 
                    
                             alt="" class="menu__image menu__image--2" data-aos="fade-right"> -->

                             <picture>
                                <source srcset="./img/dish-7-comp-mobile.png" media="(max-width:500px)" class="menu__image menu__image--2" data-aos="fade-right">
                                <img src=" ./img/dish-7-comp.png "  alt="" class="menu__image menu__image--2" data-aos="fade-right">
                             </picture>
            </div>
        </div>
        <div class="menu">
              <div class="menu__item" data-aos="fade-left">
                <h3 class="heading-3">HAMBURGERS</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Simplicity $13.90</h4>
                        <span class="menu__content--name">Beef, lettuce, tomatos</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Cheeseburger $14.90</h4>
                        <span class="menu__content--name">$14.90
                            Lettuce and tomato</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">The Pampa Grill $18.90</h4>
                        <span class="menu__content--name">Lettuce, tomato, cheese, bacon,
                            and fried egg</span>
                    </li>
                    
                </ul>
                <div class="menu"></div>
                <h3 class="heading-3 u-margin-top-4">PIZZA</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Mozarella $16.00</h4>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Napolitana $21.90</h4>
                        <span class="menu__content--name">Mozarella and tomato red sauce</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Ham & Red pepper $23.50</h4>
                        
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Tomato & Eggs $23.90</h4>
                        
                    </li>
                    
                </ul>
            </div>
            <div class="menu__photo" >
                <picture>
                    <source srcset="./img/dish-header-comp-mobile.png" media="(max-width:500px)" class="menu__image menu__image--3" data-aos="fade-right">
                    <img src="./img/dish-header-comp.png "  alt="" class="menu__image menu__image--3" data-aos="fade-right">
                </picture>
            </div>
        
        </div>
        <div class="menu">
            <div class="menu__photo" >
                <picture>
                    <source srcset="./img/dish-9-mobile.png" media="(max-width:500px)" class="menu__image menu__image--4" data-aos="fade-right">
                    <img src="./img/dish-9.png "  alt="" class="menu__image menu__image--4" data-aos="fade-right">
                </picture>
            </div>
            <div class="menu__item" data-aos="fade-left">
                <h3 class="heading-3 u-margin-top-4">SANDWICHES</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Argentine Sausage $9.90</h4>
                        <span class="menu__content--name">With chimichurri</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Tuna $16.95</h4>
                        <span class="menu__content--name">With french fries or salad</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Cutlet $19.95</h4>
                        <span class="menu__content--name">Breaded chicken or beef with tomato
                            lettuce</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Tenderloin $20.99</h4>
                        <span class="menu__content--name">With ham, cheese and fries eggs</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Miga $2.50</h4>
                        <span class="menu__content--name">Ham & cheese (a la carte, or by the
                            dozen)</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Special Miga $3.00</h4>
                        <span class="menu__content--name">With tomato and egg (a la carte, or by
                            the dozen)</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Lomito $20.99</h4>
                        <span class="menu__content--name">Lettuce, tomato, beef, ham, cheese
                            and fried egg</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu">
            <div class="menu__item" data-aos="fade-left">
                <h3 class="heading-3 u-margin-top-4">GRILL platter</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">T-Bone $24.95</h4>
                        <h4 class="menu__content--title">New York Steak $24.00</h4>
                        <h4 class="menu__content--title">Flat Steak $23.90</h4>
                        <h4 class="menu__content--title">Skirt Steak $25.90</h4>
                        <h4 class="menu__content--title">Short Ribs $23.90</h4>
                        <h4 class="menu__content--title">Picaña $16.00</h4>
                        <h4 class="menu__content--title">Grilled Chicken $17.00</h4>
                        <h4 class="menu__content--title">Sausage $10.00</h4>
                        <h4 class="menu__content--title">Blood Sausage $10.00</h4>
                        <h4 class="menu__content--title">Chinchulin $6.95</h4>
                        <h4 class="menu__content--title">Sweetbread $6.95</h4>
                        <h4 class="menu__content--title">Argentine Sausage $4.00</h4>
                        <h4 class="menu__content--title">Griller platter for 1 $22.90</h4>
                        <h4 class="menu__content--title">Griller platter for 2 ppl $53.99</h4>
                        <span class="menu__content--name">Sausage, blood sausage, sweetbread,
                            sausage, flap steak, short ribs, chicken
                            breast, pork</span>
                    </li>    
                </ul>
            </div>
            <div class="menu__photo" >
                <picture>
                    <source srcset="./img/dish-1-comp-mobile.png" media="(max-width:500px)" class="menu__image menu__image--5" data-aos="fade-right">
                    <img src="./img/dish-1-comp.png"  alt="" class="menu__image menu__image--5" data-aos="fade-right">
                </picture>
            </div>
         
        </div>

        <div class="menu">
            <div class="menu__photo">
                <picture>
                    <source srcset="./img/Salad-mobile.png" media="(max-width:500px)" class="menu__image menu__image--6" data-aos="fade-right">
                    <img src="./img/Salad.png"  alt="" class="menu__image menu__image--6" data-aos="fade-right">
                </picture>
                
            </div>
            <div class="menu__item" data-aos="fade-right">
                <h3 class="heading-3">SALADS</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Mix $6.00</h4>
                        <span class="menu__content--name">Lettuce, tomato, onions</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">House $6.50</h4>
                        <span class="menu__content--name">Lettuce, tomato, carrots, eggs</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Russian $6.00</h4>
                        <span class="menu__content--name">Carrots, sweetbeans,
                            mayonnaise, potatoes</span>
                    </li>   
                    <li class="menu__content">
                        <h4 class="menu__content--title">Cesar $6.50</h4>
                        <span class="menu__content--name">Croutons, cesar dessing, lettuce</span>
                    </li>   
                    <li class="menu__content">
                        <h4 class="menu__content--title">Carrots $6.00</h4>
                        <span class="menu__content--name">Carrots, eggs</span>
                    </li>  
                    <li class="menu__content">
                        <h4 class="menu__content--title">Tomato $6.00</h4>
                        <span class="menu__content--name">Tomato with oregano</span>
                    </li>  
             
                </ul>
            </div>
        </div>
        <div class="menu">
            <div class="menu__item" data-aos="fade-right">
                <h3 class="heading-3">EMPANADAS</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Beef $3.00</h4>
                        
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Chicken $3.00</h4>
                      
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Ham & Cheese $3.00</h4>
                      
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Onion & Cheese $3.00</h4>
                       
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Spinach $3.00</h4>
                      
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Caprese $3.00 </h4>
                      
                    </li>
                    
                </ul>
                <h3 class="heading-3">PASTAS</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Spaguetti $16.00</h4>
                       
                        </span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Cheese Ravioli $16.99</h4>
                       
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Spinach Ravioli $16.99</h4>
                       
                    </li>   
                    <li class="menu__content">
                        <h4 class="menu__content--title">Gnocchi $16.99</h4>
                       
                    </li>   
                    <li class="menu__content">
                        <h4 class="menu__content--title">Canelonis $17.00</h4>
                       
                    </li>  
                    <li class="menu__content">
                        <h4 class="menu__content--title">Sauces</h4>
                        <span class="menu__content--name">Tomato sauce / Bolognesa sauce
                            Pink sauce / Alfreds / Pesto sauce</span>
                    </li>   
                </ul>
            </div>
            <div class="menu__photo" >
                <picture>
                    <source srcset="./img/dish-8-mobile.png" media="(max-width:500px)" class="menu__image menu__image--8" data-aos="fade-right">
                    <img src="./img/dish-8.png"  alt="" class="menu__image menu__image--8" data-aos="fade-right">
                </picture
            </div>
        </div>
    </div>


    <div class="menu menu--children">
      
        <div class="menu__item menu__item--children " data-aos="fade-up">
            <h3 class="heading-3">children's menu</h3>
            <ul class="menu__list">
                <li class="menu__content">
                    <h4 class="menu__content--title">Mini breaded beef $6.99</h4>
                    
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Mini breaded
                        chicken $6.99</h4>
                  
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Spaguetti $6.99</h4>
                   
                </li>   
               
            </ul>
       
        </div>
    
    </div>
   
    <div class="menu menu--center">
        <div class="menu__item" data-aos="fade-left"> 
            <h3 class="heading-3">DESSERTS</h3>
            <ul class="menu__list">
                <li class="menu__content">
                    <h4 class="menu__content--title">Dulce de leche Crepe $7.00</h4>
                   
                    </span>
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Flan $7.00</h4>
                   
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Tiramisu $7.00</h4>
                   
                </li>   
                <li class="menu__content">
                    <h4 class="menu__content--title">Balcarce cake $7.00</h4>
                   
                </li>   
                <li class="menu__content">
                    <h4 class="menu__content--title">Dulce de leche cake $7.00</h4>
                   
                </li>  
            
            </ul>
        </div>
            <div class="menu__item" data-aos="fade-left"> 
                <h3 class="heading-3">BEVERAGES</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Coke/Diet Coke/Coke Zero</h4>
                    
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Sprite, Fanta</h4>
                    
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Orange or
                            Apple juice</h4>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Ice Tea (Sweet or
                            Unsweet) </h4>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Lemonade</h4>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Beer</h4>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Wine</h4>
                    </li>
                    
                </ul>
            </div>
      
    
    </div>
        
    </section>

    
    <div class="contact" id="contact">

            <h2 class="heading-2 heading-2-contacto">Contact <span class="span-red">Us</span></h2>

            <div class="contact__li">
                <ul class="contact__list">
                    <li class="contact__list__item"><span class="contact__list__info">Hours:</span></li>
                    <li class="contact__list__item"><span class="contact__list__info">Monday <span class="span-red">Closed</span></span></li>
                    <li class="contact__list__item"><span class="contact__list__info">Tuesday to Thursday<span class="span-red"> 11:30AM to 9:00PM</span></span></li>
                    <li class="contact__list__item"><span class="contact__list__info">Friday to Saturday <span class="span-red">11:30AM to 10:00PM</span></span></li>
                    <li class="contact__list__item"><span class="contact__list__info">Sunday <span class="span-red"> 11:30AM to 9:00PM</span> </span></li>
                </ul>
            </div>
         
             <?php if (isset($_SESSION['result'])): ?>

                <div class="show__message">
                <span class="mail_message"><?=$_SESSION['result']?></span>
                </div>
                
            <?php unset($_SESSION['result']);?>
            <?php endif; ?> 
            
    

                <div class="contact__form__iframe">
                    <form action="mail.php" method="POST" class="contact__form">

                        <label for="nombre"></label>
                        <input type="text" name="nombre" placeholder="Name" class="contact__input">
        
                        <label for="email"></label>
                        <input type="email" name="email" placeholder="Email" required class="contact__input">
        
                        <textarea name="mensaje" placeholder="Leave us your message" class="contact__textarea"></textarea>
        
                        <button name="submit" type="submit" class="btn btn__submit">Submit</button>
                    </form>
        
                    <iframe height="450" frameborder="0" style="border:0" 
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:Eik1MTUgTkUgMjB0aCBTdCwgQm9jYSBSYXRvbiwgRkwgMzM0MzEsIFVTQSIxEi8KFAoSCamJ-Ijy4diIEUvwRw1G4TZvEIMEKhQKEglVQkeK8eHYiBFWNKOZtDMtRQ&key=AIzaSyDYR7VX5uFmemV-8wyjNl5mEiXp-Oii6y4" 
                        allowfullscreen>
                    </iframe>
                </div>
      
    </div>
    <footer class="footer">
        <div class="footer__logo">
            <img src="./img/LOGO 2.png" alt="" class="footer__logo--img">
          
        </div>

        <div class="footer__mid">
            
            <div class="footer__socials">
             <a href="https://www.instagram.com/thepampagrill/" target="blank" class="footer__link"> <i class="footer__icons fab fa-instagram fa-2x"></i></a>
    

             <a href="https://www.facebook.com/thepampagrill" target="blank" class="footer__link"> <i class="footer__icons fab fa-facebook-square fa-2x"></i></a>
    
            </div>
          
            <ul class="footer__list">
              <li class="footer__item"><a href="#home" class="footer__link">Home</a></li>
              <li class="footer__item"><a href="#order" class="footer__link">Make your order</a></li>
              <li class="footer__item"><a href="#menu" class="footer__link">Menu</a></li>
              <li class="footer__item"><a href="#contact" class="footer__link">Contact</a></li>
          </ul>
        </div>
    
      <div class="footer__emfes">
        <a href="https://emfesmarketing.com/" class="footer__emfes--link">Built by &copy; emfes marketing</a> 
      </div>
      </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- <div class="modal">
        <div class="heading">
            <h2 class="heading-modal">Call us now</h2>
        </div>
   
        <div class="modal-cta">
            <span class="modal-phone">
                121212123
            </span>
        </div>
    </div> -->

    <div id="ex1" class="modal">
        <div class="modal-info">
            <h2 class="heading-modal">Call now</h2>
            <span class="modal-cta">561 430 3796</span>
        </div>
       
    </div>
      
<script>
   $('#btn-modal').click(function(event) {
    $('#ex1').modal({
      fadeDuration: 250
    });
    return false;
  });
</script>

</body>
</html>
<?php
$lifetime = strtotime('+2 minutes', 0);

session_set_cookie_params($lifetime); 
session_start();
include('connection.php');
include('functions.php');
$user_data=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <a href="#" class="logo">crackers</a>
        <ul class="nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#games">Games</a></li>
            <li><a href="#tournaments">tournaments</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="update.php">update</a></li>
            



        </ul>
        <div class="action">
            <div class="search">
                <a href="#"><i class='bx bx-search'></i></a>
                <input type="text" placeholder="search for games">
            </div>
        </div>
        <div class="Tmenu" onclick="Tmenu();"></div>
    </header>
    <!-- my home-->
    <div class="banner" id="home">
        <div class="bg">
         <div class="content">
            <h2>Gamers Home <br>
            Welcom <?php echo $user_data['user_name'];?></h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae ratione voluptatum</p>
            <a href="" class="join">Join Now</a>
         </div>
         <!--<img src="" alt="hellblade"-->    
        </div>
    </div>
    <!-- about us-->
    <div class="about" id="about">
    <div class="contentbx">
        <h2>abouts us</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima dolorum culpa pariatur voluptatem fugiat quisquam! Corporis iste officia delectus facilis alias, debitis atque qui consequatur, dolores nobis beatae, et cumque!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eum mollitia omnis maxime ad magnam corporis nam laudantium officiis minus at, neque culpa quasi consectetur eveniet animi quod totam facilis?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis eveniet autem voluptatem in obcaecati numquam dolore beatae voluptates mollitia officia voluptas nam quae possimus, corrupti eum eius. Quaerat, architecto.
        </p>
        <a href="#">read more</a>
    </div>
    <img src="img/hellblade1.jpg" alt="joystick picture">
    </div>
    <!--games cards-->
    <div class="games" id="games"> 
     <h2>popular game</h2>
        <ul>
        <li class="list active" data-filter="all">all</li>
        <li class="list" data-filter="pc">pc games</li>
        <li class="list" data-filter="ps">ps games</li>
     </ul>
   
         <div class="cardbox" >
            <div class="card" data-item="pc">
                <img src="img/rdr2_steam.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>

                </div>
            </div>

            <div class="card" data-item="pc">
                <img src="img/rdr2_steam.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>

                </div>
            </div>

            <div class="card" data-item="pc">
                <img src="img/rdr2_steam.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>

                </div>
            </div>

            <div class="card" data-item="pc">
                <img src="img/rdr2_steam.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>

                </div>
            </div>
            <div class="card" data-item="pc">
                <img src="img/rdr2_steam.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>

                </div>
                </div>

                
            <div class="card" data-item="pc">
                <img src="img/rdr2_steam.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>

                </div>
                </div>

                
            <div class="card" data-item="pc">
                <img src="img/rdr2_steam.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>

                </div>
                </div>

                
            <div class="card" data-item="pc">
                <img src="img/rdr2_steam.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>

                </div>
                </div>

                
            <div class="card" data-item="pc">
                <img src="img/rdr2_steam.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>
                </div>
                </div>

                
            <div class="card" data-item="ps">
                <img src="img/686756.jpg" alt="game photo">
                <div class="content">
                    <h4>Game Name</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>pricing <br><span>10$</span></p>
                        <a href="#">play now</a>
                    </div>
                </div>
                </div>

                <div class="card" data-item="ps">
                    <img src="img/686756.jpg" alt="game photo">
                    <div class="content">
                        <h4>Game Name</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>pricing <br><span>10$</span></p>
                            <a href="#">play now</a>
                        </div>
                    </div>
                    </div>
    



            </div>
        </div>
   
    <!-- Tournaments-->
    <div class='tournaments' id="tournaments">
        <h2>Live Eventents</h2>
        <div class="boxbx">
            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/686756.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="img/rdr2_steam.jpg" alt="">
                <div class="content">
                    <h4><span>50</span>match in progess</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iusto dolores 
                        ducimus numquam atque doloremque quae error dolor
                    </p>
                    <div class="btn">
                        <a href="#" class="watch">watch</a>
                        <a href="#" class="join"> join now</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- contact us-->
    <div class="contact" id="contact">
        <img src="img/device_task_2.svg" alt="">
        <div class="form">
            <h1>contact us</h1>
            <div class="inputbox">
                <p>Enter name</p>
                <input type="text" placeholder="fullname">
            </div>

            <div class="inputbox">
                <p>message</p>
                <textarea placeholder="type here...."></textarea>
            </div>

            <div class="inputbox">
                <p>email</p>
                <input type="email" placeholder="email">
            </div>

            <div class="inputbox">
                <p>Enter name</p>
                <input type="submit" value="send">
            </div>


        </div>
    </div>

    <!-- footer-->
    
    
    <footer>
    <div class="info">
        <a href="#" class="logo">Crackers</a>
        <p><i class='bx bxs-copyright'></i>2023 All rights belong to Melhi</p>
        <ul>
            <li><a href=""><i class='bx bxl-facebook-circle' ></i></i></a></li>
            <li><a href=""><i class='bx bxl-instagram-alt' ></i></i></a></li>
            <li><a href=""><i class='bx bxl-twitter' ></i></a></li>
            <li><a href=""><i class='bx bxl-youtube' ></i></a></i></li>
        </ul>
    </div>
   </div>
</footer>

    <script>
        /* make header fix */
        window.addEventListener('scroll',function(){
            var header = document.querySelector('header');
            header.classList.toggle('sticky',window.scrollY > 0);
        });
        /* responsive behavior */
        function Tmenu(){
            const Tmenu = document.querySelectorAll('.Tmenu');
            const nav = document.toggle('active');
            nav.classList.toggle('active');
        }
    

        /* filtered cards */
        
        let list = document.querySelectorAll('.list');
        let card = document.querySelectorAll('.card');
        
        for(let i=0; i<list.length; i++){
           list[i].addEventListener('click',function(){
            for(let j=0;j<list.length;j++){
                list[j].classList.remove('active');
            }
            this.classList.add('active');
            let datafilter = this.getAttribute('data-filter');
            for(let k=0; k<card.length;k++){
                card[k].classList.remove('active');
                card[k].classlist.add('hide');
                if(card[k].getAttribute('data-item') == datafilter || datafilter == 'all'){
                    card[k].classList.remove('hide');
                    card[k].classlist.add('active');
                }

            }
           }) 
        }
        
    </script>
</body>
</html>
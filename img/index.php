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
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="update.php">update</a></li>
            <li><a href="">contact</a></li>
            <li><a href="destroy.php">logout</a></li>

        </ul>
        <div class="action">
            <div class="search">
                <a href="#"><i class='bx bx-search'></i></a>
                <input type="text" placeholder="search for games">
            </div>
        </div>
        <div class="Tmenu"></div>
    </header>
    <!-- my home-->
    <div class="banner">
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
    <div class="about" >
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
    <div class="games"> 
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
    </div>
    <!-- Tournaments-->
    <div class='tournaments'>
        <h2>Live Eventents</h2>
    </div>
     
    <script>
        /* make header fix */
        window.addEventListener('scroll',function(){
            var header = document.querySelector('header');
            header.classList.toggle('sticky',window.scrollY > 0);
        });

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
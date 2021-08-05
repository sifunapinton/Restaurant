<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Restaurant</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="home.css" rel="stylesheet">
        <script src="login.js"></script>
    </head>
    <body>
        <img class="logo1" src="logo1.png">
        <img class="logo2" src="logo2.png">

        <nav>
           <p id="motto">Sample Restaurant : yummy and delicious delicacies</p>
        </nav>
        
        <div id="display" data-component="slideshow">
            <div role="list">
                <div class="slide">
                    <img class="display" src="display\p1.jpg">
                </div>
                <div class="slide">
                    <img class="display" src="display\p2.jpg">
                </div>
                <div class="slide">
                    <img class="display" src="display\p3.jpg">
                </div>
                <div class="slide">
                    <img class="display" src="display\p4.jpg">
                </div>
                <div class="slide">
                    <img class="display" src="display\p5.jpg">
                </div>
                <div class="slide">
                    <img class="display" src="display\p6.jpg">
                </div>
                <div class="slide">
                    <img class="display" src="display\p7.jpg">
                </div>
                <div class="slide">
                    <img class="display" src="display\p8.jpg">
                </div>
                <div class="slide">
                    <img class="display" src="display\p9.jpg">
                </div>
            </div>
        </div>
        <script src="slideshow.js"></script>

        <?php if (isset($_SESSION["Uname"])): ?>
            <div id="details">
                <p class="wait"><b>Begin Order Session</b></p><br>
                <p><b><p style="">YOU WILL BE SERVED WITH</p>
                    <i style="color:#2b5a35; font-size: 25px"><?php echo $_SESSION['Uname'];?></i>
                    <br><br> FROM <br></b></p>      
                <p><b style="color:#033952ba; font-size: 25px"><?php include('zone.php'); ?> </b></p>
            </div>
            <?php endif ?>
        </div>
        <div id="place">
            <div class="pos">
                <div class="sort">          
                     <div class="items">
                        <div>
                            <img class="tile" src="breakfast.jpeg">
                            <div id="mySidepanel" class="sidepanel">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >×</a>
                                <a href="#">Tea</a>
                                <a href="#">Bread</a>
                                <a href="#">Eggs</a>
                                <a href="#">Porridge</a>
                            </div> 
                            <button class="openbtn" onclick="openNav()">☰</button> 
                            <p class="day">Breakfast</p>
                        </div>
                    </div>          
                     <div class="items">
                        <img class="tile" src="brunch.jfif">
                        <div id="mySidenav1" class="sidenav1">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNavBrunch()">&times;</a>
                            <div class="dropdown">
                                <a href="#">Juice</a>
                                <div class="dropdown-content">
                                    <p id="subp1">Mango</p>
                                    <div id="subm1" class="subMenus">
                                        <div class="subMen">
                                            <span class="closeMen">&times;</span>
                                            <form action="product.php" method="post">
                                                <input name="amount" type="text" maxlength="3" size="3">
                                                <button type="submit" name="ok">OK</button>
                                            </form>  
                                        </div>
                                                                            
                                    </div>
                                    <p id="subp2">Lemon</p>
                                    <div id="subm1" class="subMenus">
                                        <div class="subMen">
                                            <span class="closeMen">&times;</span>
                                            <input type="text" maxlength="3" size="3">
                                            <button type="submit">OK</button>
                                        </div>
                                        
                                    </div>

                                    <p id="subp3">Passion</p>
                                    <div id="subm1" class="subMenus">
                                        <div class="subMen">
                                            <span class="closeMen">&times;</span>
                                            <input type="text" maxlength="3" size="3">
                                            <button type="submit">OK</button>
                                        </div>
                                    </div>
                                    <script src="modal.js"></script>
                                </div>
                                
                            </div>
                            <a href="#">Soda</a>
                            <a href="#">Yoghurt</a>
                            <a href="#">Milk Shake</a>
                        </div>
                        <span class="open1" onclick="openNavBrunch()">&#9776;</span>
                        <p class="day">Brunch</p>
                     </div>
                     <div class="items">
                            <img class="tile" src="lunch.jpg">
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNavLunch()">&times;</a>
                                <a href="#">Chips</a>
                                <a href="#">Fish</a>
                                <a href="#">Rice</a>
                                <a href="#">Pork</a>
                            </div>
                            <span class="open" onclick="openNavLunch()">&#9776;</span>
                            <p class="day">Lunch</p>
                     </div>            
                 </div>   
                 <div class="sort">          
                     <div class="items">
                        <img class="tile" src="Afternoon.jpg">
                        <div id="mySidenav2" class="sidenav2">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNavAfter()">&times;</a>
                            <a href="#">Cookie</a>
                            <a href="#">Cake</a>
                            <a href="#">Choco</a>
                            <a href="#">Biscuit</a>
                        </div>
                        <span class="open2" onclick="openNavAfter()">&#9776;</span>
                        <p class="evening">Tea</p>
                     </div>          
                     <div class="items">
                        <img class="tile" src="evening.jpg"></a> 
                        <div id="mySidenav3" class="sidenav3">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNavEve()">&times;</a>
                            <a href="#">Prinjos</a>
                            <a href="#">Choco</a>
                            <a href="#">Peanut</a>
                            <a href="#">Lemonade</a>
                        </div>
                        <span class="open3" onclick="openNavEve()">&#9776;</span>
                        <p class="evening">Evening Snack</p>
                     </div>
                     <div class="items">
                        <img class="tile" src="dinner.jpg">
                        <div id="mySidenav4" class="sidenav4">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNavDin()">&times;</a>
                            <a href="#">Pilau</a>
                            <a href="#">Ugali</a>
                            <a href="#">Githeri</a>
                            <a href="#">Chapati</a>
                        </div>
                        <span class="open4" onclick="openNavDin()">&#9776;</span>
                        <p class="evening">Dinner</p>
                     </div>
                 </div> 
             </div>
        </div>

    </body>
</html>
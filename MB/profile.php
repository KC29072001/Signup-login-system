<?php

session_start();
print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social</title>
    <link rel="stylesheet" href="style.css"> <!--applicable to all html-->
    <script src="https://kit.fontawesome.com/5b88bc9dc3.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="nav-left">
        <img src="images/ssproject.png" alt="Site logo" class="logo">
        <ul>
            <li><img src="images/notification.png" alt=""></li>
            <li><img src="images/inbox.png" alt=""></li>
            <li><img src="images/video.png" ></li>
        </ul>    
        </div><!--end of nav left-->
        <div class="nav-right"><!--start of nav right-->
            <div class="searchbox">
                <img src="images/search.png" alt="search logo">
                <input type="text" placeholder="search"><!--input window after search icon-->
            </div>
            <div class="nav-user-icon online">
                <img src="images/ssprofile-pic.png" alt="profile img">
            </div>
        </div><!--end of nav right-->
    </nav>
 <div class="container">
 <div class="left-side">
 <div class="links">
     <a href="#"><img src="images/ssnews.png" >news</a>
     <a href="#"><img src="images/ssfriends.png">friends</a>
     <a href="#"><img src="images/2ssgroups.png">group</a>
     <a href="#"><img src="images/2ssmarketplace.png">marketplace</a>
     <a href="#"><img src="images/2sswatch.png">watch</a>
     <a href="#"> See more</a><!--shifted inside of links div-->
    </div>
     
</div>
 <div class="main-content">
     <div class="story-gallery">
         <div class="story s1">
             <img src="images/upload.png">
             <p>Post story</p>
         </div>
         <div class="story s2">
            <img src="images/member-1.png">
            <p>Andrea</p>
        </div>
        <div class="story s3">
            <img src="images/member-2.png">
            <p>Peter</p>
        </div>
        <div class="story s4">
            <img src="images/member-3.png">
            <p>Nancy</p>
        </div>
        <div class="story s5">
            <img src="images/member-4.png">
            <p>Albert</p>
        </div>
     </div>


     <div class="writepost-container">
         <div class="user-profile">
             
             <img src="images/ssprofile-pic.png">
             <div>
               <p>John</p>
               <small>Public <i class="fa-solid fa-angle-down"></i> </small> 
             </div>
            
         </div>
         <div class="post-input-container">
             <textarea rows="3" placeholder=" Write here "></textarea>
         </div>
     </div>
 </div>
 <div class="right-side">
     <div class="rside-title">
         <h4>Events</h4>
         <a href="#">See all</a>
     </div>
     <div class="event">
         <div class="levent">
             <h3>28</h3>
             <span>Feb</span>
         </div>
         <div class="revent">
             <h4>Social Media</h4>
             <p><i class="fa-solid fa-location-pin"></i> Rajesh Park</p>
             <a href="#" >More Info</a>
         </div>
     </div>
     <div class="event">
        <div class="levent">
            <h3>4</h3>
            <span>March</span>
        </div>
        <div class="revent">
            <h4>Mobile Marketing</h4>
            <p><i class="fa-solid fa-location-pin"></i> Arbindo Park</p>
            <a href="#" >More Info</a>
        </div>
    </div><!--end of event-->
    <div class="rside-title"><!--2nd title-->
        <h4>Ad</h4>
        <a href="#">Close</a>
    </div>
    <img src="images/advertisement.png" class="rside-ads">
    <div class="rside-title"><!--3rd title-->
        <h4>Conversation</h4>
        <a href="#">Hide</a>
    </div>
    <div class="online-list">
        <div class="online">
            <img src="images/member-5.png" >
        </div>
        <p>Kevin</p>
    </div> 
    <div class="online-list">
        <div class="online">
            <img src="images/member-2.png" >
        </div>
        <p>Andrew</p>
    </div> 
    <div class="online-list">
        <div class="online">
            <img src="images/member-3.png" >
        </div>
        <p>Nancy</p>
    </div>   
 </div>   
</div>
</body>
</html>

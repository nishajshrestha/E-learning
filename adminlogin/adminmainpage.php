<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: adminlogin.php');
    exit; // It's a good practice to exit after a redirect
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    *,*::after,*::before{
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%
    }

    a {
        text-decoration: none;
        font: inherit;
        font-weight: 500;
    }

    ul,ol [role="list"] {
        list-style: none;
    }

    .flex {
        display: flex;
    }

    .justify-between {
        justify-content: space-between;
    }

    .align-center {
        align-items: center;
    }

    nav {
    width: 20%;
    height: 100vh;
    border: 1px solid black;
    }
 
   nav ul > *:not(:last-child) {
    margin-bottom: 8px;
    }

    nav ul li a:hover{
        background-color: blue;
        width: 100%;
    }

    main {
    width: 80%;
    border: 1px solid red;
    }

    /* tabs */

    .tab-content .tab {
        display: none;
    }

    .tab-content .active {
        display: block;
    }
    /* tabs */


    .details{
        border: 1px solid blue;
        text-align: center;
      
    }

    .details > * {
        border: 1px solid black;
        width: 33.33%;
        text-transform: capitalize;
    }

    .course-orders__container h3{
        text-align: center;
        background-color: black;
        color: white;
        padding-block: 8px;
    }


  
</style>
<body class="flex">

    <nav >
        <div class="container">
            <ul role="list" class="tab-links">
                <li><a href="#tab1">Dashboard</a></li>
                <li><a href="admincourseview.php">Courses</a></li>
                <li><a href="#tab3">Lessons</a></li>
                <li><a href="#tab4">Students</a></li>
                <li><a href="#tab5">Sell Report</a></li>
                <li><a href="#tab6">Payment Status</a></li>
                <li><a href="#tab7">Feedback</a></li>
                <li><a href="#tab8">Change Password</a></li>
                <li><a href="#tab9">Logout</a></li>
            </ul>
        </div>
    </nav>

    <main>

        <div class="tab-content active">
            <!-- tab1 -->
            <div id="tab1" class="tab">
            <h1>Dashbord</h1>
                 <!-- details  -->
                 <div class="flex space-between details">
        <!-- courses -->
        <div>
            <h3>Courses</h3>
            <span id="courses-count"></span>
            <h4>details</h4>
        </div>
        <!-- courses -->

        <!-- students -->
        <div>
            <h3>Courses</h3>
            <span id="students-view-count"></span>
            <h4>details</h4>
            
        </div>
        <!-- students -->

        <!-- sold -->
        <div>
            <h3>Courses</h3>
            <span id="sold-view-count"></span>
            <h4>details</h4>
        </div>
        <!-- sold -->
                 </div>
                     <!-- details -->
            </div>
            <!-- tab1 -->
            <!-- tab2 -->

            <div id="tab2" class="tab">
                <h2>Courses</h2>
  

            </div>
            <!-- tab2 -->
            <!-- tab3 -->

            <div id="tab3" class="tab">
                <h2>Lessons</h2>
            </div>
            <!-- tab3 -->
            <!-- tab4 -->

            <div id="tab4" class="tab">
                <h2>Students</h2>
            </div>
            <!-- tab4 -->
            <!-- tab5 -->

            <div id="tab5" class="tab">
                <h2>Sell Report</h2>
            </div>
            <!-- tab5 -->
<!-- tab6 -->
            <div id="tab6" class="tab">
                <h2>Payment Status</h2>
            </div>
<!-- tab6 -->
<!-- tab7 -->
            <div id="tab7" class="tab">
                <h2>Feedback</h2>
            </div>
<!-- tab7 -->
<!-- tab8 -->
            <div id="tab8" class="tab">
                <h2>Change Password</h2>
            </div>
<!-- tab8 -->

<!-- tab9  -->
            <div id="tab9" class="tab">
            <button><a href="logout.php">Logout</a></button>
                
            </div>
            <!-- tab9 -->
        </div>
   

    </main>
    
    
</body>
<!-- 
<script>
    const tabLinks = document.querySelectorAll(".tab-links a")
    const tabs = document.querySelectorAll(".tab")

    tabLinks.forEach((link) => link.addEventListener(("click"),(e) => {
         e.preventDefault();
        //  removing the classlist of active from all tablinks as default
        tabLinks.forEach((link)=>link.classList.remove("active"))

        //  setting current linktab to have the classlist active
        link.classList.add("active")

        //  if tab id and current links matches then its display is styled to `block` else it is set to `none`
         tabs.forEach((tab) => {

          const currentAtrrValue =  link.getAttribute("href")

            if(tab.id === currentAtrrValue.slice(1)){
                tab.style.display = 'block';
            }
            else{
                tab.style.display= "none"
            }
         })
    }))
</script> -->



</html>










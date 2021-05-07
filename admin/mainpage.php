
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to TechNetics</title>

        <meta name="viewport" coantent="width=device-width, initial-scale=1" />
        <script src="scripts/script.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato"
            rel="stylesheet">
        <style>
            .container{
                margin-top: 10rem;
                justify-content: center;
            }

.dropdown {
  position:relative;
  display: inline-block;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  border-radius: 20px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
  border-radius: 20px;
}

.dropdown:hover .dropbtn {
  border-radius: 20px;
  background-color: #3e8e41;
}
     </style>
    </head>
    <body>
        <header class="site-header">
            <div style="background-color: #fafafa; width: 100%; height: 20px"></div>
            <nav>
                <div class="logo">
                    <h1>
                        <span style="font-size: 35px">T</span>ech<span
                            style="font-size: 35px">N</span>etics
                    </h1>
                </div>
                <div class="menu" >
          <ul>
            <a href="../includes/logout.php">
              <li>Logout</li>
            </a>
          </ul>
        </div>
            </nav>
        </header>
    <section>
     <div class="container">
     <div class="dropdown">
  <button class="btn">Users</button>
  <div class="dropdown-content">
  <a href="users.php">View </a>
  <a href="#">Delete</a>
  </div>
</div>

  </div>
  <div class="container">
  <div class="dropdown">
  <button class="btn">Quiz</button>
  <div class="dropdown-content">
  <a href="#">Add Quiz</a>
  <a href="#">Results</a>
  </div>
</div>
  </div>
<div class="container">
<div class="dropdown">
  <button class="btn">Review</button>
  <div class="dropdown-content">
  <a href="#">View Reviews</a>
  </div>
</div>
</div>
    </section> 
    <?php
include('../includes/footer.php');
?>
    </body>
</html>
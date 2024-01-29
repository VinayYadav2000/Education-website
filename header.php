<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/all.min.css">
     <link rel="stylesheet" href="sass/style.css">
</head>
<body>
     <nav>
          <div id="logo"><img src="images/4.png" alt=""></div>
  
          <label for="drop" class="toggle">Menu</label>
          <input type="checkbox" id="drop" />
              <ul class="menu">
                  <li><a href="#">Home</a></li>
                  <li>
                      <!-- First Tier Drop Down -->
                      <label for="drop-1" class="toggle">WordPress +</label>
                      <a href="#">About Us</a>
                      <input type="checkbox" id="drop-1"/>
                      <ul>
                          <li><a href="#">Themes and stuff</a></li>
                          <li><a href="#">Plugins</a></li>
                          <li><a href="#">Tutorials</a></li>
                      </ul> 
  
                  </li>
                  <li>
  
                  <!-- First Tier Drop Down -->
                  <label for="drop-2" class="toggle">Web Design +</label>
                  <a href="#">Coures</a>
                  <input type="checkbox" id="drop-2"/>
                  <ul>
                      <li><a href="#">Resources</a></li>
                      <li><a href="#">Links</a></li>
                      <li>
                         
                      <!-- Second Tier Drop Down -->        
                      <label for="drop-3" class="toggle">Tutorials +</label>
                      <a href="#">Tutorials</a>         
                      <input type="checkbox" id="drop-3"/>
  
                      <ul>
                          <li><a href="#">HTML/CSS</a></li>
                          <li><a href="#">jQuery</a></li>
                          <li><a href="#">Other</a></li>
                      </ul>
                      </li>
                  </ul>
                  </li>
                  <li><a href="#">Graphic Design</a></li>
                  <li><a href="#">Inspiration</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">About</a></li>
              </ul>
          </nav>
  
  
         
  

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
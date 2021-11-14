<!DOCTYPE html>

<html lang="">
<head>
  @yield('title')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{asset ('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ##<img src="images/demo/IMG-20210806-WA0000.jpg" class="img_logo">############################################################################################## -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">LARAVELBLOG</a></h1>
    </div>
    
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Placerat:</strong><br>
          +00 (123) 456 7890</li>
        <li><strong>Lobortis:</strong><br>
          +00 (123) 456 7890</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>

<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="{{route('post.index')}}">Home</a></li>
      <li><a class="drop" href="{{route('category.index')}}">Categorias</a>
        <ul>
          @foreach ($categories as $category)
          <li><a href="index_categoria_articles.html">{{$category->title}}</a></li>
          
          @endforeach
        </ul>
      </li>
      
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
@yield('content')


<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Leo nullam vitae</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Feugiat turpis phasellus</h6>
      <ul class="nospace linklist">
        <li><a href="#">Ullamcorper erat id suscipit</a></li>
        <li><a href="#">Felis quam id dui donec</a></li>
        <li><a href="#">Posuere nulla id congue</a></li>
        <li><a href="#">Bibendum nulla vestibulum</a></li>
        <li><a href="#">Urna ac ipsum iaculis</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Nec hendrerit sem</h6>
      <ul class="nospace linklist">
        <li><a href="#">Pharetra curabitur quis</a></li>
        <li><a href="#">Nisi nec odio tincidunt</a></li>
        <li><a href="#">Tempor vitae at metus</a></li>
        <li><a href="#">Sed at ante et est</a></li>
        <li><a href="#">Dapibus hendrerit aenean</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Fusce euismod urna</h6>
      <p class="nospace btmspace-15">Non fringilla laoreet phasellus volutpat arcu eget posuere euismod arcu purus.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
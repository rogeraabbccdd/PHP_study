<head>
  <meta charset="UTF-8">
  <title>error 404 Page</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="style.css">

<style>
@import url(https://fonts.googleapis.com/css?family=Gilda+Display);
html {
  background: radial-gradient(#000, #111);
  color: white;
  overflow: hidden;
  height: 100%;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.static {
  width: 100%;
  height: 100%;
  position: relative;
  margin: 0;
  padding: 0;
  top: -100px;
  opacity: 0.05;
  z-index: 230;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  user-drag: none;
}

.error {
  text-align: center;
  font-family: 'Gilda Display', serif;
  font-size: 95px;
  font-style: italic;
  text-align: center;
  width: 100px;
  height: 60px;
  line-height: 60px;
  margin: auto;
  position: absolute;
  top: 0;
  bottom: 0;
  left: -60px;
  right: 0;
  -webkit-animation: noise 2s linear infinite;
          animation: noise 2s linear infinite;
  overflow: default;
}

.error:after {
  content: '404';
  font-family: 'Gilda Display', serif;
  font-size: 100px;
  font-style: italic;
  text-align: center;
  width: 150px;
  height: 60px;
  line-height: 60px;
  margin: auto;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0;
  color: blue;
  -webkit-animation: noise-1 .2s linear infinite;
          animation: noise-1 .2s linear infinite;
}

.info {
  text-align: center;
  font-family: 'Gilda Display', serif;
  font-size: 15px;
  font-style: italic;
  text-align: center;
  width: 200px;
  height: 60px;
  line-height: 60px;
  margin: auto;
  position: absolute;
  top: 140px;
  bottom: 0;
  left: 0;
  right: 0;
  -webkit-animation: noise-3 1s linear infinite;
          animation: noise-3 1s linear infinite;
}

.error:before {
  content: '404';
  font-family: 'Gilda Display', serif;
  font-size: 100px;
  font-style: italic;
  text-align: center;
  width: 100px;
  height: 60px;
  line-height: 60px;
  margin: auto;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0;
  color: red;
  -webkit-animation: noise-2 .2s linear infinite;
          animation: noise-2 .2s linear infinite;
}

@-webkit-keyframes noise-1 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: -6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: 2px;}
}

@keyframes noise-1 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: -6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: 2px;}
}

@-webkit-keyframes noise-2 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: 6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: -2px;}
}

@keyframes noise-2 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: 6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: -2px;}
}

@-webkit-keyframes noise {
  0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}  
  4.3% {opacity: 1; -webkit-transform: scaleY(1.7); transform: scaleY(1.7);}
  43% {opacity: 1; -webkit-transform: scaleX(1.5); transform: scaleX(1.5);}
}

@keyframes noise {
  0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}  
  4.3% {opacity: 1; -webkit-transform: scaleY(1.7); transform: scaleY(1.7);}
  43% {opacity: 1; -webkit-transform: scaleX(1.5); transform: scaleX(1.5);}
}

@-webkit-keyframes noise-3 {
  0%,3%,5%,42%,44%,100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
  4.3% {opacity: 1; -webkit-transform: scaleY(4); transform: scaleY(4);}
  43% {opacity: 1; -webkit-transform: scaleX(10) rotate(60deg); transform: scaleX(10) rotate(60deg);}
}

@keyframes noise-3 {
  0%,3%,5%,42%,44%,100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
  4.3% {opacity: 1; -webkit-transform: scaleY(4); transform: scaleY(4);}
  43% {opacity: 1; -webkit-transform: scaleX(10) rotate(60deg); transform: scaleX(10) rotate(60deg);}
}


</style>
  
</head>

<body>
<div class="container">
	<a href="admin.php"><button class="btn btn-danger">後台登入</button></a>
</div>
<div class="error">404</div>
<br /><br />
<span class="info">File not found</span>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

</body>

</html>

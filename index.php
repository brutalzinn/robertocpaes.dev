<?php
session_start();

// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

// Include Language file
if(isset($_SESSION['lang'])){
 include "langs/lang_".$_SESSION['lang'].".php";
}else{
 include "langs/lang_en.php";
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Roberto Paes - portfólio</title>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<link rel="stylesheet" href="css/styles.css">

</head>

<body>
<script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 </script>
<form method='get' action='' id='form_lang' >
   Language: <select name='lang' onchange='changeLang();' >
   <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
   <option value='pt' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'pt'){ echo "selected"; } ?> >Portuguese</option>
  </select>
 </form>
<div class="header">
  <h1 class="title">Roberto <span class="sobrenome"> Paes </span></h1>
  <h4 class="blue"><?= _TITLE_MESSAGE ?></h4>
<p class="description">
<?= _DESCRIPTION ?>

</p>

</div>

<div class="container">
<main>
<div class="grid skills">

  <div class="column">
    <p class="blue"><?= COLUMN_LANGUAGES ?></p>
    <ul>
    <li>PHP</li>
    <li>C#</li>
  <li>JAVA</li>
    <li>JAVASCRIPT</li>
    <li>C++</li>
    <li>NodeJs</li>
    <li>LUA</li>
</ul>
  </div>
  
  <div class="column">
  <p class="blue"><?= COLUMN_INFRA ?></p>
  <ul>
    <li>Docker</li>
    <li>Google Servers</li>
</ul>
  </div>
  
  <div class="column">
  <p class="blue"><?= COLUMN_DB ?></p>
  <ul>
    <li>MySql</li>
</ul>
</div>

</div>

<div class="grid skills">

  <div class="column">
    <p class="blue boxTitle"><?= COLUMN_ENERGY ?></p>
    <p>
    <?= COLUMN_ENERGY_RESPONSE ?>
</p>
</div>
  
  <div class="column">
  <p class="blue boxTitle"><?= COLUMN_COMMUNICATION ?></p>
  <p>
  <?= COLUMN_COMMUNICATION_RESPONSE ?> 
</p>
  </div>
  
  <div class="column">
  <p class="blue boxTitle">  <?= COLUMN_COUCH ?></p>
  
  <p>
  <?= COLUMN_COUCH_RESPONSE ?></p>

</div>

</div>

<div class="grid skills">

  <div class="column">
    <p class="blue boxTitle"> <?= COLUMN_SOCIAL_NETWORK ?></p>
    <ul>
<span class="listStyleHome">></span> <a href="https://github.com/brutalzinn" ><i style="font-size:24px" class="fa">&#xf09b;</i> Github</a><br>
<span class="listStyleHome">></span> <a href="https://www.facebook.com/brutalzinn.roberto/" ><i style="font-size:24px" class="fa">&#xf09a;</i> Facebook</a><br>
<span class="listStyleHome">></span><i style="font-size:24px" class="fa">&#xf0e0;</i> contato@robertocpaes.dev</p>

</ul>
</div>
  

  


</div>




</div>
</div>
</main>
</div>

</body>

<p class="footer">  </p>
</html>

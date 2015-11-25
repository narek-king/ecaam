<?php
   include('classSimpleImage.php');
   $image = new SimpleImage();
   $image->load('img/1.jpg');
   $image->resize(150, 100);
   $image->save('img/1.jpg');

   $image->load('img/2.jpg');
   $image->resize(150, 100);
   $image->save('img/2.jpg');

   $image->load('img/3.jpg');
   $image->resize(150, 100);
   $image->save('img/3.jpg');

   $image->load('img/4.jpg');
   $image->resize(150, 100);
   $image->save('img/4.jpg');
   
   $image->load('img/5.jpg');
   $image->resize(150, 100);
   $image->save('img/5.jpg');

   $image->load('img/6.jpg');
   $image->resize(150, 100);
   $image->save('img/6.jpg');

   $image->load('img/7.jpg');
   $image->resize(150, 100);
   $image->save('img/7.jpg');

   $image->load('img/8.jpg');
   $image->resize(150, 100);
   $image->save('img/8.jpg');
?>
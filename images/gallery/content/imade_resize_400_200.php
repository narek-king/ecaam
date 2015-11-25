<?php
   include('classSimpleImage.php');
   $image = new SimpleImage();
   $image->load('1.jpg');
   $image->resize(300, 200);
   $image->save('1.jpg');

   $image->load('2.jpg');
   $image->resize(300, 460);
   $image->save('2.jpg');

   $image->load('3.jpg');
   $image->resize(300, 200);
   $image->save('3.jpg');

   $image->load('4.jpg');
   $image->resize(300, 200);
   $image->save('4.jpg');

   $image->load('5.jpg');
   $image->resize(300, 200);
   $image->save('5.jpg');

   $image->load('6.jpg');
   $image->resize(300, 200);
   $image->save('6.jpg');

   $image->load('7.jpg');
   $image->resize(300, 200);
   $image->save('7.jpg');

   $image->load('folder_bg.png');
   $image->resize(200, 200);
   $image->save('folder_bg.png');



?>
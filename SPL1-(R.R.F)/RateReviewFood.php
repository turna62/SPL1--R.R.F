<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rate Here</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>

  <style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Times New Roman', Times, serif;
}
html,body{
  display: grid;
  height: 100%;
  place-items: center;
  text-align: center;
  background:  rgb(17, 6, 4);
}
.container{
  position: relative;
  width: 400px;
  background:  rgb(239, 248, 152);
  padding: 20px 30px;
  border: 1px solid rgb(46, 16, 9);
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  bottom: 160px;
}
.container .post{
  display: none;
}
.container .text{
  font-size: 25px;
  color: rgb(46, 16, 9);
  font-weight: 500;
  font-family: 'Times New Roman', Times, serif;
}
.container .edit{
  position: absolute;
  right: 10px;
  top: 5px;
  font-size: 16px;
  color: rgb(46, 16, 9);
  font-weight: 500;
  cursor: pointer;
}
.container .edit:hover{
  text-decoration: underline;
}
.container .star-widget input{
  display: none;
}
/* .star-widget label{
  font-size: 40px;
  color: rgb(65, 31, 24);
  padding: 10px;
  float: right;
  transition: all 0.2s ease;
}
input:not(:checked) ~ label:hover,
input:not(:checked) ~ label:hover ~ label{
  color:rgb(236, 174, 39);
}
input:checked ~ label{
  color: rgb(236, 174, 39);
}
input#rate-5:checked ~ label{
  color: rgb(236, 174, 39);
  text-shadow: 0 0 20px rgb(236, 193, 75);
}
#rate-1:checked ~ form header:before{
  content: "I just hate it ";
}
#rate-2:checked ~ form header:before{
  content: "I don't like it ";
}
#rate-3:checked ~ form header:before{
  content: "It is awesome ";
}
#rate-4:checked ~ form header:before{
  content: "I just like it ";
}
#rate-5:checked ~ form header:before{
  content: "I just love it ";
}
.container form{
  display: none;
}
input:checked ~ form{
  display: block;
} */
form header{
  width: 100%;
  font-size: 25px;
  color: rgb(65, 31, 24);
  font-weight: 500;
  margin: 5px 0 20px 0;
  text-align: center;
  transition: all 0.2s ease;
  font-family: 'Times New Roman', Times, serif;
}
form .textarea{
  height: 100px;
  width: 100%;
  overflow: hidden;
}
form .textarea textarea{
  height: 100%;
  width: 100%;
  outline: none;
  color: rgb(239, 248, 152);
  border: 1px solid rgb(236, 247, 138);
  background: rgb(46, 16, 9);
  padding: 10px;
  font-size: 17px;
  resize: none;
}
.textarea textarea:focus{
  border-color: rgb(236, 247, 138);
}
form .btn{
  height: 45px;
  width: 100%;
  margin: 15px 0;
}
form .btn button{
  height: 100%;
  width: 100%;
  border: 1px solid rgb(236, 247, 138);
  outline: none;
  background: rgb(46, 16, 9);
  color: rgb(236, 247, 138);
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 0.3s ease;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
form .btn button:hover{
  background: rgb(65, 31, 24);
}

.intro{
    color: rgb(237, 247, 154);
    font-size: 25px;
    position: relative;
    top: 35px;
    font-family: 'Times New Roman', Times, serif;
}
::placeholder{
    color: rgb(239, 248, 152);
    opacity: 0.7;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

  </style>



  <body>
  <?php 
    require 'dbConfig.php';
    
    $query = "SELECT * FROM food_new";
    $query_run = mysqli_query($db, $query);
    $check_user = mysqli_num_rows($query_run) > 0;
    if($check_user){
      while($row = mysqli_fetch_assoc($query_run)){
        $sno2 = $row['foodid'];
      }
    }
    ?>
    
    <?php
echo '
    
  
     
      
    <form action="submitfoodreview.php?fid='. $sno2 .'" method="post" enctype="multipart/form-data">

    <label> 1
      <input type="radio" value = "1" name="rating">
      <span class="checkmark"></span>
    </label>
    <label> 2
      <input type="radio" value = "2" name="rating">
      <span class="checkmark"></span>
    </label>
    <label>3
      <input type="radio" value = "3"  name="rating">
      <span class="checkmark"></span>
    </label>
    
    <label> 4
      <input type="radio" value = "4" name="rating">
      <span class="checkmark"></span>
    </label>
    
    <label> 5
      <input type="radio" value = "5" name="rating">
      <span class="checkmark"></span>
    </label>

    <input type = "text" placeholder = "Review here" name = "review" > 
    <input type = "submit"  value = "Update cuisine" name="submitreview">
    </form>;
    
    <!-- <script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      } -->
    // </script
';
?>
  </body>
</html>
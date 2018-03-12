<?php require_once 'actions/db_connect.php'; ?>

 

<!DOCTYPE html>

<html>

<head>

    <title>PHP CRUD</title>

 

    <style type="text/css">
        body{
            background: url(img/event.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            padding-left: 15px;
            padding-right: 15px;


        }

        .manageUser {

            width: 50%;

            margin: auto;

        }

 

        table {

            width: 100%;

            margin-top: 20px;

        }
         
         /*.header1 {
            background: url(img/Alvaro_Soler.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 800px;
            width: 0px;
            float: left;

        }*/

        b{
            color: red;
        }

        /*h1{
            color: blue;
        }*/

/*NAVBAR start*/

        .outer{
            margin-top: 30px;
            margin-left: 115px;
            margin-bottom: 50px;
            


            width: 150px;
            height: 50px;
            overflow-x:hidden;
            position: relative;
            float: left;
            margin-right: 10px;
            border-radius:50px;
            }

        .inner{
            width: 300px;
            height: 50px;
            font:bold 16px/50px "arial";
            position: absolute; right: 0;
            color:white;
            text-align: right;
            text-decoration: none;
            white-space: pre;
            transition: width .7s, color .7s;}

        .inner:before{
            content:"";
            position: absolute;
            width: 139px;
            height: 39px;
            right: 5px;
            top: 5px;
            border-radius:50px;
            border:1px dashed #333;
        }
        .color1{background:linear-gradient(60deg, deepskyblue 150px,#333 180px, #333);}
        .color2{background:linear-gradient(60deg, papayawhip 150px,#333 180px, #333);}
        .color3{background:linear-gradient(60deg, orange 150px,#333 180px, #333);}
        .color4{background:linear-gradient(60deg, pink 150px,#333 180px, #333);}
            
        .inner:hover{
        width: 150px;
        color: black;}

        nav{
            float: left;
        }
/*NAVBAR ende*/



        .footer {
                  position: relative;
                  right: 0;
                  bottom: 0;
                  left: 0;
                  padding: 1rem;
                  background-color: black;
                  color: white;
                  text-align: center;
                  border-radius: 20px;
                  margin-top: 25px;

                }

        

        section{
            float: left;
        }

        div{
            float: left;
            width: 100%;
        }

    </style>

 

</head>

<body>

    
    <nav>
    
        <div class="outer"> 
            <a href="home.php" class="inner color1">   HOME   </a>
        </div>
        <div class="outer"> 
            <a href="login1.php" class="inner color2">   LOGIN1   </a>
        </div>
        <div class="outer"> 
            <a href="#" class="inner color3">   CONTACT   </a>
        </div>
        <div class="outer"> 
            <a href="index.php" class="inner color4">   ADMIN   </a>
        </div>

    </nav>


<!--#################################################
    #                                               #
    #   OUTPUT DATA FROM DATEBASE INTO WEBPAGE      #
    #                                               #
    #                                               #
    #################################################-->
    
   
        
    <section>
         
        <?php  
            $sql = "SELECT events_name, events_date_and_time, events_description, events_image, events_capacity, events_contact_e_mail, events_contact_phone_number, events_address, events_url, events_type      FROM events";
            $result = $connect->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo " <b>Event's name:</b> " . $row["events_name"] 
                        ." <br> <b>Event’s date and time:</b> " . $row["events_date_and_time"] 
                        ." <br> <b>Event’s description:</b> " . $row["events_description"]
                        ." <br> <b>Event’s image:</b> " . $row["events_image"]
                        ." <br> <b>Event’s capacity:</b> " . $row["events_capacity"]
                        ." <br> <b>Event’s contact e-mail:</b> " . $row["events_contact_e_mail"]
                        ." <br> <b>Event’s contact phone number:</b> " . $row["events_contact_phone_number"]
                        ." <br> <b>Event’s address:</b> " . $row["events_address"]
                        ." <br> <b>Event’s URL:</b> " . $row["events_url"]
                        ." <br> <b>Event’s Type:</b> " . $row["events_type"]
                        . "<br> <br> <hr>";
                    /*echo '<div class="header1"> <h1><i>Álvaro Soler</i></h1> </div>';*/
                }
            } else {
                echo "0 results";
            }
            $connect->close();
        ?>

    </section>


    <div align="justify">
            What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

        Why do we use it?
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


        Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

        Where can I get some?
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
    </div>

    <div class="footer">
        <strong>&copy</strong> Copyright 2018 Dragan Obradovity
    </div>

 </body>

</html>
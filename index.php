<?php 

    include_once 'controllers/Comment.php';
    $com = new Comment();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>forest GIRL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      
.box {
    border: 6px solid #999; 
    margin: 30px auto 0; 
    padding: 20px; 
    width: 1000px; 
    height: 250px;
    overflow: scroll;
}
.box ul {
    margin: 0; padding: 0; list-style: none;
}
.box li {
    display: block; 
    border-bottom: 1px dashed #ddd;
    margin-bottom: 5px;
    padding-bottom: 5px;
}
.box li:last-child {
    border-bottom: 0 dashed #ddd;
}
.box span {
    color: #888;
}
    </style>
</head>
<body style="width: 100%; height: 100%; position: relative; background: #F4ACB7">
    <div style="width: 1440px; height: 160px; left: 0px; top: 4267px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
        <div style="width: 1520px; height: 160px; left: 0px; top: 0px; position: absolute; background: #79DAFA"></div>
        <div style="width: 380.42px; height: 26px; left: 680px; top: 122px; position: absolute">
            <div style="width: 24.03px; height: 24px; left: 0px; top: 2px; position: absolute">
                <img style="width: 21.53px; height: 17.77px; left: 1.25px; top: 3.26px; position: absolute;" src="/picture/twitter.svg"></img>
            </div>
            <div style="width: 24.03px; height: 24px; left: 135.19px; top: 0px; position: absolute">
                <div style="width: 24.03px; height: 24px; left: 0px; top: 0px; position: absolute">
                    <div style="width: 24.03px; height: 24px; left: 0px; top: 0px; position: absolute"></div>
                    <img style="width: 20.03px; height: 20px; left: 2px; top: 2px; position: absolute;" src="/picture/facebook.svg"></img>
                </div>
            </div>
            <div style="width: 24.03px; height: 24px; left: 270.38px; top: 2px; position: absolute">
                <img style="width: 20.03px; height: 20px; left: 2px; top: 2px; position: absolute;" src="/picture/instagram.svg"></img>
            </div>
                <div style="left: 31.04px; top: 1px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 400; word-wrap: break-word">funshare</div>
                <div style="left: 166.23px; top: 1px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 400; word-wrap: break-word">funshare</div>
                <div style="left: 301.42px; top: 1px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 400; word-wrap: break-word">funshare</div>
            </div>
            <img style="width: 200.28px; height: 112px; left: 770px; top: 10px; position: absolute;" src="/picture/LG.svg" />
        </div>
        <div style="width: 373px; height: 1024px; left: 127px; top: 127px; position: absolute; "></div>
        <div style="width: 1230px; height: 4218px; left: 280px; top: 18px; position: absolute; background: #FDED88; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 36px"></div>
        <div style="width: 1090px; height: 762px; left: 350px; top: 204px; position: absolute">
            <div class="box">
                <ul>
                    <?php 
                        if($result = $com->index()) {
                        while ($data = $result->fetch_assoc()) {
                    ?>
                        <li>
                            <b><?php echo $data['name']; ?></b> - <?php echo $data['comment']; ?> - <?php echo $com->dateFormat($data['comment_time']); ?>
                        </li>
                        <?php } ?>
                    <?php }?>
                </ul>
            </div>
        
            <br><br>
        
            <center>
            <?php 
            
                if(isset($_GET['msg'])) {
                    $msg = $_GET['msg'];
                    echo "<span style='color: green; font-size: 20px'>".$msg."</span>";
                }
        
            ?>
        
            <form action="post_comment.php" method="post">
                <table>
                    <tr>
                        <td>Your Name:</td>
                        <td><input type="text" name="name" placeholder="Please enter your name" style="width: 230px; height: 30px;"></td>
                    </tr>
                    <tr>
                        <td>Comment:</td>
                        <td>
                            <textarea name="comment" cols="30" rows="10" placeholder="Please enter your comment"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Post" style="width: 235px; height: 40px;"></td>
                    </tr>
                </table>
            </form>
            </center>
            <div style="left: 21px; top: -71px; position: absolute; color: black; font-size: 40px; font-family: Cherry Bomb; font-weight: 400; word-wrap: break-word">Review Me</div>
    
        </div>
        
        <div style="width: 1150px; height: 43px; left: 330px; top: 45px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
            <div style="width: 1101px; height: 43px; justify-content: center; align-items: center; display: inline-flex">
                <div style="flex: 1 1 0; align-self: stretch; justify-content: center; align-items: center; display: inline-flex">
                    <div style="width: 1101px; height: 43px; justify-content: center; align-items: center; display: inline-flex">
                        <div style="width: 1101px; height: 43px; position: relative; border-radius: 15px; flex-direction: column; justify-content: flex-end; align-items:flex-end; display: flex">

                            <div style="width: 182px; height: 23px; left: 25px; top: 0px; position: absolute">
                            <a href="summer.html"><button style="width: 25px; height: 25px; left: -40px; top: 10px; position: absolute; border-radius: 9999px; background-color:#fefefe"></button></a>
                            <div style="left: 0px; top: 0px; position: absolute; color: #79DAFA; font-size: 34px; font-family: Roboto; font-weight: 400; word-wrap: break-word; text-shadow: 1.5px 1px rgb(0, 0, 0); font-weight: bold;">Male</label>
                            <a href="summer.html"><button style="width: 25px; height: 25px; left: 100px; top: 10px; position: absolute; border-radius: 9999px; background-color:#ffffff"></button></a>
                            <div style="left: 146px; top: 0px; position: absolute; color: #79DAFA; font-size: 34px; font-family: Roboto; font-weight: 400; word-wrap: break-word; text-shadow: 1.5px 1px rgb(0, 0, 0); font-weight: bold;">Female</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav flex-column">

            <div style="width: 285px; height: 1002px; left: -22px; top: 38px; position: absolute">
              <img style="width: 250px; height: 250px; left: 18px; top: -60px; position: absolute" src="/picture/LOGO.png" />
              <div style="width: 139px; height: 40px; left: 46px; top: 192px; position: absolute">
                <div
                  style="left: 53px; top: 22px; position: absolute; color: rgb(0, 0, 0); font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">
                  Good</div>
                <div
                  style="left: 53px; top: 0px; position: absolute; color: black; font-size: 16px; font-family: Kanit; font-weight: 400; word-wrap: break-word">
                  anonymous</div>
                <div
                  style="width: 37px; height: 37px; left: 0px; top: 3px; position: absolute; background: #D9D9D9; border-radius: 9999px">
                </div>
                <div style="width: 24px; height: 24px; left: 6px; top: 10px; position: absolute">
                  <div style="width: 16px; height: 18px; position: absolute">
                    <img style="width: 24px; height: 24px; position: absolute; " src="/picture/account.svg">
        
                    </img>
                  </div>
                </div>
              </div>
              <div style="width: 127px; height: 38px; left: 81px; top: 331px; position: absolute; ">
                <button  type="button" style="width: 127px; height: 38px; left: 0px; top: 0px; position: absolute;border-radius: 15px"><a href="/fav.html"><img style="width: 127px; height: 38px; left: 0px; top: 0px; position: absolute;border-radius: 15px" src="/picture/fav.svg"/></a></button>
                <div style="width: 24px; height: 24px; left: 51px; top: 7px; position: absolute; ">
                </div>
              </div>
              <div
                style="width: 127px; height: 38px; left: 81px; top: 271px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border-radius: 10px">
                <button  type="button" style="width: 127px; height: 38px; left: 0px; top: 0px; position: absolute;border-radius: 15px">
                  <a href="/Home.html"><img style="width: 127px; height: 38px; left: 0px; top: 0px; position: absolute; background: #ffffff; border-radius: 15px"
                  src="/picture/rion_home.svg"/></img></a></button>
              </div>
              <div
                style="width: 233px; height: 38px; left: 35px; top: 426px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                <div style="width: 233px; height: 38px; background: #B890E8; border-radius: 10px; border: 1px #B890E8 solid">
                </div>
              </div>
              <div
                style="width: 233px; height: 38px; left: 35px; top: 729px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                <div style="width: 233px; height: 38px; background: #B890E8; border-radius: 10px; border: 1px #B890E8 solid">
                </div>
              </div>
              <div
                style="width: 233px; height: 38px; left: 35px; top: 964px; position: absolute; background: #FF0018; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                <div style="width: 233px; height: 38px; background: white; border-radius: 10px; border: 1px white solid"></div>
              </div>
              <div
                style="left: 112px; top: 430px; position: absolute; color: white; font-size: 20px; font-family: Kanit; font-weight: 700; text-transform: uppercase; word-wrap: break-word">
                ท่องเที่ยว</div>
              <div 
                style="left: 116px; top: 733px; position: absolute; color: white; font-size: 20px; font-family: Kanit; font-weight: 700; text-transform: uppercase; word-wrap: break-word">
                ทางการ</div>
              <div
                style="left: 55px; top: 968px; position: absolute; color: #FF0018; font-size: 20px; font-family: Kanit; font-weight: 700; text-transform: uppercase; word-wrap: break-word">
                <a href="trend.html" class="trend">TREND HOT/HIT</a></div>
              <div
                style="left: 80px; top: 485px; position: absolute; color: black; font-size: 16px; font-family: Kanit; font-weight: 700; text-decoration: underline; text-transform: uppercase; word-wrap: break-word">
                season</div>
              <div 
                style="left: 65px; top: 612px; position: absolute; color: black; font-size: 16px; font-family: Kanit; font-weight: 700; text-decoration: underline; text-transform: uppercase; word-wrap: break-word">
                <a href="/sea.html" class="textNav">sea/BEACH</a></div>
              <div
                style="left: 65px; top: 650px; position: absolute; color: black; font-size: 16px; font-family: Kanit; font-weight: 700; text-decoration: underline; text-transform: uppercase; word-wrap: break-word">
                <a href="/forest.html" class="textNav">forest/mountains</a></div>
              <div
                style="width: 200px; height: 0px; left: 54px; top: 666px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: black; border: 1px rgb(0, 0, 0) solid">
              </div>
              <div
                style="width: 19.03px; height: 0px; left: 54px; top: 499px; position: absolute; background: black; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border: 1px black solid">
              </div>
        
              <div
                style="width: 19.03px; height: 0px; left: 54px; top: 663px; position: absolute; background: black; border: 1px rgb(0, 0, 0) solid">
              </div>
              <div
                style="width: 19.03px; height: 0px; left: 54px; top: 625px; position: absolute; background: black; border: 1px black solid">
              </div>
              <div
                style="width: 19.03px; height: 0px; left: 93px; top: 589.92px; position: absolute; background: black; border: 1px black solid">
              </div>
              <div
                style="width: 19.03px; height: 0px; left: 93px; top: 561.92px; position: absolute; background: black; border: 1px black solid">
              </div>
              <div
                style="width: 84px; height: 0px; left: 93px; top: 590px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: black; border: 1px black solid">
              </div>
              <div
                style="left: 65px; top: 781px; position: absolute; color: black; font-size: 16px; font-family: Kanit; font-weight: 700; text-decoration: underline; text-transform: uppercase; word-wrap: break-word">
                <a href="job.html" class="textNav">ชุดทำงาน</a></div>
              <div
                style="width: 117px; height: 0px; left: 54px; top: 886px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: black; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border: 1px black solid">
              </div>
              <div
                style="width: 19.03px; height: 0px; left: 54px; top: 837px; position: absolute; background: black; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border: 1px black solid">
              </div>
              <div
                style="left: 65px; top: 871px; position: absolute; color: black; font-size: 16px; font-family: Kanit; font-weight: 700; text-decoration: underline; text-transform: uppercase; word-wrap: break-word">
              <a href="boon.html" class="textNav">forest / mountains</a></div>
              <div
                style="width: 19.03px; height: 0px; left: 54px; top: 796px; position: absolute; background: black; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border: 1px black solid">
              </div>
              <div
                style="left: 65px; top: 822px; position: absolute; color: black; font-size: 16px; font-family: Kanit; font-weight: 700; text-decoration: underline; text-transform: uppercase; word-wrap: break-word"><a href="prom.html" class="textNav">
                ชุดออกงาน/ชุดราตรี</a></div>
              <div
                style="width: 19.03px; height: 0px; left: 54px; top: 886px; position: absolute; background: black; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset; border: 1px black solid">
              </div>
              <div
                style="width: 19.03px; height: 0px; left: 93px; top: 530px; position: absolute; background: black; border: 1px black solid">
              </div>
              <div
                style="left: 102px; top: 520px; position: absolute; color: black; font-size: 16px; font-family: Hubballi; font-weight: 400; text-transform: uppercase; word-wrap: break-word">
                <a href="summer.html" class="textNav">SUMMER</a></div>
              <div
                style="left: 102px; top: 548px; position: absolute; color: black; font-size: 16px; font-family: Hubballi; font-weight: 400; text-transform: uppercase; word-wrap: break-word">
                <a href="/winter.html" class="textNav">WINTER</a></div>
              <div
                style="left: 102px; top: 575px; position: absolute; color: black; font-size: 16px; font-family: Hubballi; font-weight: 400; text-transform: uppercase; word-wrap: break-word">
                <a href="/rainy.html" class="textNav">RAINY</a></div>
            </div>
          </nav>
            <div style="width: 70px; height: 70px; left: 1380px; top: 4240px; position: absolute; border-radius: 100px">
                <button style="width: 70px; height: 70px; left: 20px; top: 30px; position: absolute; border-radius: 9999px; background-color:#F4ACB7"><a href="#" class="top" style="font-size: large; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color:#ffffff;">Top</button>
                </div>   
        </div>
        </div>
    </div>
</body>
</html>
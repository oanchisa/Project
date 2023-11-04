<?php 

    include_once 'controllers/Comment.php';
    $com = new Comment();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Review</title>
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
    

        <div style="width: 373px; height: 1024px; left: 127px; top: 127px; position: absolute; "></div>
        <div style="width: 1230px; height: 900px; left: 10%; top: 10px; position: absolute; background: #FDED88; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 36px"></div>
        <div style="width: 1090px; height: 762px; left: 15%; top: 204px; position: absolute">
            
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

            <div style="left: 21px; top: -60px; position: absolute; color: black; font-size: 40px; font-family: Cherry Bomb; font-weight: 400; word-wrap: break-word">Review website</div>
        </div>
        
    
</body>
</html>
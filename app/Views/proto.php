<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello World">
    <meta name="theme-color" content="black"/>
    <title>TODO &mdash; Mirai</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url('css/index.css');?>"> -->
    <style>
        .room{
    background-color: rgba(75, 75, 75, 0.2);
    text-align: center;
    font-family: 'Segoe UI';
    font-weight: bold;
    font-size: 12px;
}
.a{background-color: aqua;}
.b{background-color:darkcyan}
ul{padding: 0px;}
li{list-style-type: none;}
.box-list{
    width: 100%;
    background-color: bisque;
    border: black 2px;
    cursor: pointer;
}
.box-list:hover{
    background-color: white;
}
.ljudul{
    padding-left: 10px;
    font-size: 18px;
}
.lisi{
    padding-left: 10px;
    font-size: 12px;
}
textarea{
    resize: none;
    box-sizing: border-box;
}
.show{
    display: block;
}
.hide{
    display: none;
}
.row{
    height: 580px;
}
.inline li{
    display:inline;
}
.addlist{
    cursor:pointer;
}
.active{
    background-color:"#000000";
}
.setline{
    display:inline;
}
    </style>
</head>
<body>
    <div class="room">
        <div class="code-room ml-auto">Code Room : <?php echo $data[0]["id_room"];?></div>
        <div class="logout">
            <a href="/Todo/logout">Logout</a>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-4 a">
                <div>
                    <ul class="inline">
                        <li style="padding-right:115px;padding-left:130px">LIST</li>
                        <li class="addlist"><a href="/add">+ New</a></li>
                    </ul>
                </div>
                <ul>
                    <?php foreach($data as $i){?>
                    <li class="mb-1">
                        <div class="box-list">
                            <div class="ljudul id="<?php echo $i["id_judul"];?>" onclick="list('<?php echo $i['id_judul'];?>');">
                                <?php echo $i["judul"];?>
                            </div>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="col-8 b">
                <div class="text-center judul-show">JUDULNYA</div>
                <div class="row pl-1">
                    <div class="col-12 isi hide"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo base_url("js/proto.js");?>"></script>
</body>
</html>
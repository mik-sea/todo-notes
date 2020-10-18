<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello World">
    <meta name="theme-color" content="black"/>
    <title>TODO &mdash; Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  display: inline-flex;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
label{
	font-size: 11pt;
}
    </style>
</head>
<body>
    <div class="container text-center">
		<?php if(session()->getFlashdata('msg')):?>
        	<div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'Login')">Login/Register</button>
            <button class="tablinks" onclick="openTab(event, 'Room')">Join Room</button>
        </div>

        <!-- Tab content Login-->
        <div id="Login" class="tabcontent">
			<form action="/Home/login" method="post">
            <h3>Login</h3>
            <label for="Email">Email</label>
            <input type="email" name="email" class="form-control text-center" id="email" placeholder="Enter Email">
            <br/>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control text-center" id="pass" placeholder="Enter Password">
            <br/>
            <a href="#">Reset Password</a>
            <br/>
            <br/>
            <button class="btn btn-outline-success" style="width: 100%;">Login</button>
            <br/>
            <br/>
			</form>
			<button class="btn btn-outline-secondary" style="width: 100%;" onclick="openTab(event, 'Daftar')">Daftar</button>
        </div>
		<!-- End content Login -->

		<!-- Tabb Room -->
        <div id="Room" class="tabcontent">
            <h3>Join Room</h3>
            <input type="text" name="room" class="form-control text-center" id="room" placeholder="Enter Room Code">
            <br>
            <button class="btn btn-outline-success" style="width: 100%;">Join</button>
		</div>
		<!-- End Tab Room -->

		<!-- Tab Daftar -->
		<div id="Daftar" class="tabcontent">
		<form action="/Home/insert" method="post">
            <h3>Daftar</h3>
            <label for="Email">Email</label>
            <input type="email" name="email" class="form-control text-center" id="email" placeholder="Enter Email">
            <br/>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control text-center" id="pass" placeholder="Enter Password">
            <br/>
            <br/>
            <button class="btn btn-outline-success" style="width: 100%;">Daftar</button>
            <br/>
            <br/>
			</form>
		</div>
		<!-- End Tab Daftar -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('js/opentab.js');?>"></script>
</body>
</html>
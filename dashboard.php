<?php require 'config.php'; require_login(); $user=$_SESSION['user']; ?>
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Ajay Bhaiya - Dashboard</title><link rel="stylesheet" href="style.css"></head>
<body><div class="layout"><aside id="side">
<div class="side-logo">AJAY <span>BHAIYA</span></div>
<a class="active" href="dashboard.php">⌂ Dashboard</a><a href="deposit.php">▣ Deposit</a>
<a href="buy-keys.php">🛒 Buy Keys</a><a href="resellers.php">♙ My Resellers</a>
<a href="keys.php">⚿ My Keys</a><a href="history.php">◴ History</a>
<a href="support.php">◉ Support Ticket</a><a href="refer.php">♧ Refer And Earn</a>
<a href="profile.php">◎ Profile Settings</a><a class="logout" href="logout.php">⇥ Logout</a>
</aside><main class="main"><header><button onclick="side.classList.toggle('show')">☰</button>
<a class="deposit" href="deposit.php">▣ HOW TO DEPOSIT?</a><span class="spacer"></span><b class="avatar">AJ</b></header>
<section class="balance"><small>YOUR CURRENT BALANCE</small><strong>₹<?=number_format($user['balance'],2)?></strong></section>
<a class="wide" href="how-to.php">▶ HOW TO BUY AND HOW TO USE</a>
<section class="promo"><h3>♔ BECOME A PRO RESELLER</h3><p>Deposit/maintain at least <b>₹49.00</b> in your wallet to unlock Pro Reseller pricing.</p><a class="btn" href="deposit.php">UPGRADE NOW</a></section>
<section class="notice">◌ Keep 500+ balance for account safety.</section>
<section class="update"><h3>RESELLERS ALL UPDATE CHECK</h3><p>New Update Group Join</p><a href="#">JOIN NOW</a></section>
<div class="stats"><div><b>0</b><small>TODAY SALES</small></div><div><b>0</b><small>MY USERS</small></div><div><b>0</b><small>MY KEYS</small></div><div><b>0</b><small>TOTAL SALES</small></div></div>
<section class="seller"><h2>♕ 5 TOP SELLERS</h2><div class="row head">RANK &nbsp;&nbsp; USERNAME &nbsp;&nbsp; ROLE</div>
<?php foreach(['@9918559291','@DARKCONFIG','@Safeking69','@users123L','@FFH4XJ0DVIP108'] as $i=>$s): ?>
<div class="row">#<?=$i+1?> &nbsp;&nbsp; <?=htmlspecialchars($s)?> <span>RESELLER</span></div>
<?php endforeach; ?></section>
<div class="quick"><a href="deposit.php">▣<small>DEPOSIT</small></a><a href="buy-keys.php">🛒<small>BUY KEYS</small></a>
<a href="resellers.php">♙<small>MY RESELLERS</small></a><a href="keys.php">⚿<small>MY KEYS</small></a>
<a href="history.php">◴<small>HISTORY</small></a><a href="refer.php">🎁<small>REFER & EARN</small></a>
<a class="full" href="profile.php">◎<small>PROFILE SETTINGS</small></a></div>
</main></div><script>const side=document.getElementById('side');</script></body></html>
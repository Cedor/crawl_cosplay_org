<div class="page information">
    <div class="toplinks">
        <a href="/">Home</a>
        | <a href="/about">About</a>
        | <a href="/history">History</a>
        | <a href="/recent">Recent submissions</a>
    <?php if ($this->request->session('admin')) : ?>
        | Subs <a href="/submissions/list">Official</a> <a href="/submissions/moderate">Moderate</a> <a href="/submissions/add">New</a>
        | Players <a href="/players/list">List</a> <a href="/players/add">New</a>
    	| Challenges <a href="/challenges/list">List</a> <a href="/challenges/add">New</a>
        | <a href="/logout">Logout</a>

	<?php else : ?>
	   | <a href="/admin">Admin</a>
	<?php endif; ?>
    </div>
    <div class="page_content">
        <div class="heading">
            <h1><a href="/">Crawl Cosplay Challenge</a></h1>
            <div class="fineprint">Come chat with us on the offical CCC Discord server: <a href="https://discord.gg/ZQ4kk6n" target="_blank">https://discord.gg/ZQ4kk6n</a></div>
        </div>
        <br />
        <hr />
        <div class="content" onclick="window.location = '/dismiss';">
        <?php if ($msg = $this->request->session()->get('message')) : ?>
            <div class="message"><?=$msg?> <br /><br /><a href="/dismiss">--more--</a></div>
        <?php endif; ?>
        </div>

<div class="page information">
	<div class="dropdown" style="float:left;">
		<button class="dropbtn">Menu</button>
		<div class="dropdown-content" style="left:0;">
			<a href="/">Crawl Cosplay Home</a>
			<a href="/cca/cca">Crawl Cosplay Academy (CCA) - NEW!</a>
			<a href="/cca/about_cca"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; About CCA</a>
			<a href="/ccc/ccc">Crawl Cosplay Challenge (CCC)</a>
			<a href="/ccc/about_ccc"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; About CCC</a>
			<a href="/ccc/all_ccc_history"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; all CCC challenges</a>
			<a href="/tournament/home">Crawl Cosplay Trunk Tournament (CCTT)</a>
			<a href="/tournament/about"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; About CCTT</a>
      <a href="/ccsdt/ccsdt">Crawl Cosplay Sudden Death Tournament (CCSDT) - in development!</a>
			<a href="/ccsdt/about_ccsdt"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; About CCSDT</a>
		</div>
	</div>

    <div class="toplinks"><br></div>
    <div class="page_content">
        <div class="heading">
            <h1>Crawl Cosplay Sudden Death Tournament</h1>
            <div class="fineprint"><center>Come chat with us on our <a href="https://discord.gg/WdbyURBcYp" target="_blank">Discord server<img src="/img/discord_transparent_border.png" width="18" height="18"></a></center></div>
        </div>
	<div class="fineprint" align="right">
	</div>
        <img src="/img/HR-right.png"><br>
        <div class="content" onclick="window.location = '/dismiss';">
        <?php if ($msg = $this->request->session()->get('message')) : ?>
            <div class="message"><?=$msg?> <br /><br /><a href="/dismiss">--more--</a></div>
        <?php endif; ?>
        </div>

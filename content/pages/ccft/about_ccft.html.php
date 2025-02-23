<?php $this->layout = 'ccft'; ?>

<h2>About Crawl Cosplay Fork Tournament (CCFT)</h2>';

<p>The <b>Crawl Cosplay Fork Tournament</b> is a 5-week long tournament with a different fork each week highlighting major features not found in the regular DCSS version.
 The tournament is based on the weekly <a href="http://crawlcosplay.dcss.io/" target="_blank">Crawl Cosplay Challenge</a> (CCC) series for <a href="http://crawl.develz.org/" target="_blank">Dungeon Crawl Stone Soup</a> (DCSS).</p>

<p>Each week will likely feature a fork's Unique character for you to play, with one or more options for starting species and background, as well as which god you must worship.
   These are all mandatory and you must worship your god before entering any multi-level branch besides the dungeon (e.g. Lair, Orc, Depths). 
   Also, you can't do anything to lose your religion, including abandoning your god. 
   The goal is not to emulate the unique's behaviour exactly, but to get a good starting point on playing games with interesting requirements.</p>
<p>In the event of a tie for top spot, the last week's challenge will be a very difficult one. 
   The highest score for that last week will be used to determine the winner.</p>

<p>A week's challenge details will be posted on Reddit at the time of the start on Friday at 00:00 UTC.</p>

<h3>Featured Forks</h3>
<ul>
    <li><a href="https://cosplay.kelbi.org/ccft/fork_bcadren.html">BCadren</a></li>
    <li><a href="https://cosplay.kelbi.org/ccft/fork_bcrawl.html">BCrawl</a></li>
</ul>

<h3>How to Enter</h3>
<?php
    echo '<img src="/'.$dir_path."/".$filename2.'" alt="'.$filename2.'" width="72" height="72" style="float:right">'; 
?>

<p>The current challenge's details page has a "Submit a CCFT run" link.
    For those who haven't participated in CCC, CCA or CCTT before, just paste a link to your online morgue in the appropiate field,
    and enter your playername and score in the comments. 
    Submissions will be approved by a moderator, who will verify your morgue and your score, and create a username for your future submissions.</p>

<h3>Restrictions for tournament play</h3>
<ul><li><b>Submitted runs must be played in selected fork on one of the <a href="https://crawl.develz.org/play.htm" target="_blank"> official online servers</a></b>.
        A list of which fork is available on which server will be written in th Reddit post and on the challenge's details page.</li>
    <li><b>Seeded games are NOT accepted.</b></li>
    <li>You can make as many attempts as you want.</li>
    <li>Morgues must be submitted while a challenge is active. No late submissions!</li>
    <li>Small mistakes will likely NOT be forgiven unless they are minute. (If you are unsure please ask ASAP if you are forgiven in our CC Discord linked above.)</li>
</ul>

<h3>Changing your player sprite to a Unique's doll.</h3>
<p>If you'd like to change the player doll to the Unique's tile, add the following to your RC file:</p>
<p> tile_player_tile = tile:MONS_WIGLAF</p>

<h3>Full Rules and Scoring</h3>
<?php
    echo '<img src="/'.$dir_path."/".$filename3.'" alt="'.$filename3.'" width="72" height="72" style="float:right">'; 
?>
<h4>Milestones</h4> 
<p>These remain the same from one week to the next, and are the main way of scoring points.
  Each milestone earns you 5 points, for a total of 35 if you win the game, and can be done in any order.
  You can only earn points from each milestone once per game (entering Lair and then Orc doesn't get you 10 points).</p>

<ul><li>Reach XL3.</li>
<li>Enter Lair, Orc, or Depths.</li>
<li>Reach the last floor of Lair, Orc, or the Dungeon.</li>
<li>Collect your first rune.</li>
<li>Find the entrance to Zot. (Just using magic mapping doesn't count; you must actually have the entrance in LOS.)</li>
<li>Collect three runes.</li>
<li>Win the game.</li></ul>

<h4>Conducts</h4>
<p>Each week will have three optional conducts for you to follow, that vary with every challenge; some are quite easy while other will be more difficult.
  Following or completing each conduct is worth 5 points, to a maximum of half your score from milestones, rounded down.
  So if you achieve 3 milestones (15 points), you can earn up to 7 points from conduct bonuses, for a total of 22 points.</p>

<h4>Bonus Challenges</h4>
<?php
    echo '<img src="/'.$dir_path."/".$filename4.'" alt="'.$filename4.'" width="72" height="72" style="float:right">'; 
?>
<p>Each of the 5 challenges will also have two <em>optional</em> bonus challenges, that are usually difficult or unconventional.
  Completing a bonus challenge doesn't affect your score, but gets you a <strong>star</strong>, a small trophy to recognize your skill.
  Each week has one star that requires you to win the game or is to be done on the Orb rune, and another that doesn't. 
  You don't need to follow any of the cosplay conducts to earn stars.</p>

<h3>Credits</h3>

<p>The Crawl Cosplay Fork Tournament was created and is run by <a href="https://www.reddit.com/user/RoGGa_69/" target="_blank">RoGGa</a>
  with the help from our Crawl Cosplay @VIPs in our CC Discord server. Thanks to MalcolmRose for giving me the idea!</p>

<p>The CCFT part of the website was created by copying the CCTT format.</p>
<p>A big thank you to floraline for hosting CC on the old CKO server.</p>

<p>See the <a href="/ccc/about_ccc">CCC about page</a> for more detailed credits about the original website live since 2019.</p>

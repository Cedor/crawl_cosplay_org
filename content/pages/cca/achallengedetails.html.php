<?php $this->layout = 'cca'; ?>
<?php

use app\models\{Challenge, Submission};

$id = $_GET['id'] ?? false;
if ($id == false) {
	return $this->request->redirect('/');
}

$cha = Challenge::get($id);
if (!$cha) {
	return $this->request->redirect('/');
}

$is_admin = $this->request->session('admin');
if ($cha->draft && !$is_admin) {
	return $this->request->redirect('/');
}

$name = $e($cha->name);
$this->setData("page_title", "{$name} - Crawl Cosplay Academy");

$this->setData("meta", ['filename' => $cha->icon]);

?>
<div class="challenge">

<h2><?=$e($cha->name)?></h2>
<p style="font-style: italic; color: #777;"><?=$e($cha->description)?></p>
<p>
	<a href="/cca/submit_cca?id=<?=$cha->id?>">Submit a CCA run</a> 
	<?php if ($cha->wiki): ?>	| <a href="<?=$e($cha->wiki)?>" target="_blank">Wiki page</a><?php endif; ?>
	<?php if ($cha->reddit): ?>	| <a href="<?=$e($cha->reddit)?> " target="_blank">See ParticleFace's tutorial video for this challenge</a><?php endif; ?>
</p>

<?php if ($cha->icon) : ?><img src="<?=$e($cha->icon)?>" class="detail" /><?php endif; ?>
<table class="table_for_layout">
	<tr><th>Species</th><th>Background<th>Gods</th></tr>
	<tr><td><?=$e($cha->species)?></td><td><?=$e($cha->background)?><td><?=$e($cha->gods)?></td></tr>
</table>
<p class="info">The Species, Background, and God choices are all mandatory. You must be worshipping one of the gods listed above before entering Lair, Orcish Mines, the Vaults or Depths, unless this isn't possible in which case you must worship them as soon as you can. Don't use faded altars (except in challenges where you can choose any god), and don't do anything to lose your religion unless otherwise specified.</p>
<p class="info">NOTE: Except for Beogh, Ignis, Jiyva and Lugonu, an altar for the other gods will ALWAYS show up by D:10.</p>

<?php if ($cha->special_rule) : ?>
	<h3>Strategy</h3>
	<div class="special_rule"><p><?=$em($cha->special_rule)?></p></div>
<?php endif; ?>
	
<div class="score-sidebar">
<h3>Submissions</h3>
<br />
<table class="bordered">
	<thead>
		<tr>
			<th>Player</th>
			<th>Score<span class="star">&#9733;&#9733;</span></th>
			<th>Year</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$subs = Submission::scoreboard($id);
		$r = 0;
		foreach ($subs as $s) :
			$year_created = explode('-', $s->created)[0];
	?>

		<tr class="<?=$r++%2==0?'odd':'even'?>">
			<?php
				$player = $s->player();
				$player_name = $player->name;
				$player_id = $player->id;
			?>
			<td><a href="/player?id=<?=$player_id?>"><?=$e($player_name)?></a></td>
			<td>
			<?php
			if (!empty($s->morgue_url)) echo '<a href="'.$s->morgue_url.'" target="_blank">';
			echo $s->score;
			for ($i=0; $i < (int) $s->stars ; $i++) {
				echo '<span class="star">&#9733;</span>';
			}
			if (!empty($s->morgue_url)) echo '</a>';
			?>
			</td>
			<td><?=$year_created ?></td>
		</tr>

	<?php
		endforeach;
	?>
	</tbody>
</table>
</div>

<h3>Cosplay conduct points</h3>
<dl>
	<dt>1. <?=$e($cha->conduct_name_1)?></dt><dd><?=$em($cha->conduct_1)?></dd>
	<dt>2. <?=$e($cha->conduct_name_2)?></dt><dd><?=$em($cha->conduct_2)?></dd>
	<dt>3. <?=$e($cha->conduct_name_3)?></dt><dd><?=$em($cha->conduct_3)?></dd>
</dl>
<p class="info">Conducts are worth +5 points each, to a maximum of half your score from milestones, rounded down.
	(So if you achieve 3 milestones (15 points) you can earn up to 7 points from conducts.) Small mistakes in following conducts will usually be forgiven.
	These challenges are built around a best-practice approach. If you broke some conduct or bonus because it was "better" to do so, explain why you did when you submit your morgue.</p>
<p class="info">NOTE: for CCA, the first 2 conducts are usually to help you make choices at startup or in early game, while the 3rd conduct is usually a small fun challenge.</p>
<h3>Bonus challenges</h3>
<dl>
	<dt>1. <?=$e($cha->bonus_name_1)?></dt><dd><?=$em($cha->bonus_1)?></dd>
	<dt>2. <?=$e($cha->bonus_name_2)?></dt><dd><?=$em($cha->bonus_2)?></dd>
</dl>
<p class="info">Bonus challenges are worth one star each, similar to banners in Crawl tournaments. Small mistakes will usually be forgiven.</p>
<p class="info">The 1st bonus can usually be accomplished after clearing the Dungeon (D), Lair (L) & the Orcish Mines (O), while the 2nd bonus will be a bit more challenging and will involve something like: "...and get your first rune!" as a caveat.</p>

<h3>Milestones</h3>
<ul>
	<li>Reach XL3.
	<li>Enter Lair, Orc, or Depths.
	<li>Reach the bottom of Dungeon, Lair, or Orc.
	<li>Collect your first rune.
	<li>Find the entrance to Zot. (Just using magic mapping doesn't count.)
	<li>Collect your third rune.
	<li>Win the game.
</ul>
<p class="info">The main way to score points. +5 points each, and can be done in any order.</p>
</div>

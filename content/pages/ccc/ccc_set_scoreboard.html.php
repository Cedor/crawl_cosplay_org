<?php $this->layout = 'ccc'; ?>
<?php
use app\models\{Challenge, Submission, Player};

	$set = $_GET['set'] ?? 1;
	$scores = Player::scoreboardForSet($set);
	$challenges_in_set = Challenge::findAsArray(['setnr' => $set, 'draft' => 0], ['order' => '`week` ASC']);
	$weeks = sizeof($challenges_in_set);
?>
<h2>Set <?=$set?></h2>

<table class="set-list">
<?php 
	$made_seperator = false;
	foreach ($challenges_in_set as $cha) : 
		if ($cha->bonus && !$made_seperator) {
			echo '<tr><td colspan="3">&nbsp;</td></tr>';
			$made_seperator = true; // only make one seperator if multiple bonuses
		}
?>
	<tr>
		<td>Week <?=$e($cha->week)?>.</td>
		<td><?php if ($cha->icon):?>
			<a href="/ccc/challengedetails?id=<?=$e($cha->id)?>"><img src="<?=$e($cha->icon)?>" style="height: 1em" /></a><?php endif; ?> 
			<b><a href="/ccc/challengedetails?id=<?=$e($cha->id)?>"><?=$e($cha->name)?></a></b>
		</td>
		<td><span style="font-size: smaller"><?=($cha->species), ", ", ($cha->background), ", ", ($cha->gods)?></span></td>
	</tr>	
<?php endforeach; ?>
</table>

<table class="bordered">
		<tr>
			<th>Player</th>
			<th>Total<span class="star">&#9733;</span></th>
			<?php
			$made_seperator = false;
			foreach ($challenges_in_set as $c) {

				if ($c->bonus && !$made_seperator) {
					echo '<th rowspan="' . (sizeof($scores) + 1) . '">&nbsp;</th>';
					$made_seperator = true; // only make one seperator if multiple bonuses
				}

				echo '<th>' . $e($c->week) . '. ';
				if ($cha->icon) echo '<a href="/challenges/details?id='.$c->id.'"><img src="'.$e($c->icon).'" style="height: 1.5em" /></a>';
				echo "</th>";
			}
			?>
		</tr>
	<?php $r = 0;
	foreach ($scores as $row) : ?>
		<tr class="<?=$r++%2==0?'odd':'even'?>">
			<td><a href="/player?id=<?=$row['pid']?>"><?=$row['player']?></a></td>
			<td><?=$row['total']?> <?=$row['stars']?><span class="star">&#9733;</span></td>
			<?php 
			foreach ($row['week'] as $week) {
				if ($week == null) {
					echo "<td>&nbsp;</td>";
					continue;
				}
				$out = '<td>';
				if (!empty($week['morgue'])) $out .= '<a href="' . $e($week['morgue']) . '" target="_blank">';
				$out .= $week['score'];
				for ($i=0; $i < (int) $week['stars'] ; $i++) {
					$out .= '<span class="star">&#9733;</span>';
				}
				if (!empty($week['morgue'])) $out .= '</a>';
				echo $out . "</td>";
			}
			for ($i=0; $i < $weeks - sizeof($row['week']); $i++) { 
				echo "<td>&nbsp;</td>";
			}
			?>
		</tr>
	<?php endforeach; ?>
</table>



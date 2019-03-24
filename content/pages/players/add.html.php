<?php

if (!$this->request->session('admin')) {
    $this->request->redirect('/');
}

if ($data = $this->request->getPostData()) {
    $data['reddit'] = empty($data['reddit']) ? $data['name'] : $data['reddit'];
    $player = new app\models\Player($data);
    if ($player->save()) {
        session_start();
        $_SESSION['message'] = "Player created";
        return $this->request->redirect('/players/list');
    }
    dd($player);
}

?>
<h2>Adding new Player</h2>
<form method="POST">
    <fieldset>
        <label>
            <span>Name</span><br />
            <input type="text" name="name" />
        </label>
        <br />
        <label>
            <span>Reddit account (leave empty to duplicate "name" field)</span><br />
            <input type="text" name="reddit"  />
        </label>
        <br />
        <input type="submit" name="Save">
    </fieldset>
</form>
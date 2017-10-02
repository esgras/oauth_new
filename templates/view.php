<h1>HybridAuth Demo App</h1>

<?php if (empty($user)): ?>
    <h2>Hello, Anonymous.</h2>
    <h3>Login <a href="/login">here</a></h3>
    <h3>Login with <a href="/oauth">Google</a></h3>
<?php else: ?>
    <div style="float: left; margin-right: 10px;"><img src="<?= $user->photoUrl; ?>"></div>

    <div>Welcome <?= $user->displayName ?> to your control panel.</div>
    <h2>Email - <?= $user->email ?></h2>
    <h3><a href="/logout">Logout</a></h3>
<?php endif; ?>
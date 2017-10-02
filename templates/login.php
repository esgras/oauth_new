<form action="/login" method="post">
    <?php if (!empty($errors['email'])): ?>
        <h4 style="color: red;">Wrong Email</h4>
    <?php endif; ?>
    <p><input type="text" name="email" placeholder="Email"></p>
    <p><input type="submit" value="Ok"></p>
</form>
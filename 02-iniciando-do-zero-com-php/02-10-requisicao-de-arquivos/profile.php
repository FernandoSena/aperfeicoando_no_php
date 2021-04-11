<article style="padding: 5px 10px ; background-color: #eee; border-radius: 10px">
    <h1><?= $profile->name; ?></h1>
    <p>Trabalha na <?= $profile->company; ?></p>
    <a title="Enviar e-mail" href="mailto: <?= $profile->email; ?>">Enviar e-mail</a>
</article>
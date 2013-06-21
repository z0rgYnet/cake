Bonjour <?= $username; ?>,

Merci pour votre inscription sur R2iConsulting.
Afin de finaliser votre inscription veuillez suivre le lien suivant:
<?= $this->Html->url(array('controller' => 'users', 'action' => 'activate', $id, $token),true); ?>

Merci.
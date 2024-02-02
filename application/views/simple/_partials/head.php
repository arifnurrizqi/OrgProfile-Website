<meta charset="UTF-8">
<link rel="shortcut icon" href="<?= base_url('public/img/logo/' .  $landing[0]->logo) ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= $identitas[0]->description ?>">
<meta name="author" content="Arif Nur Rizqi">
<meta name="keywords" content="<?= $identitas[0]->keyword ?>">
<title><?= $title . ' | Kabinet ' . $landing[0]->kabinet; ?> </title>
<link href="<?= base_url('public/css/output.css') ?>" rel="stylesheet">
<script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
</script>
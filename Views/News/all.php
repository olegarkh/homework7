<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" style="text/css">
    <title>Загрузить статью</title>
</head>
<body>

<a href="/admin/all/<?php //echo $item->id; ?>">Администрирование</a>
<a href="/<?php echo $this->ctrl; ?>/edit/<?php echo $item->id; ?>" ><?php echo ' '.$inf; ?></a>
<a href="/<?php echo $this->ctrl; ?>/errors/<?php echo $item->id;?>" ><?php echo ' '.$errors; ?></a>

<?php foreach ($items as $item): ?>
    <h3><?php echo $item->title; ?></h3>
    <p><?php echo $item->text; ?></p>

    <a href="/<?php echo $this->ctrl; ?>/one/<?php echo $item->id;?>" >Читать далее...</a>

    <a href="/<?php echo $this->ctrl; ?>/edit/<?php echo $item->id;?>/" ><?php echo $edit; ?></a>
<?php endforeach; ?>
</body>
</html>
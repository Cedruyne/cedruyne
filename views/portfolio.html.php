<h2>Mes réalisations</h2>
<?php

foreach ($projects as $project)
{
?>
<article>
    <h3>
        <?php echo $project['name']; ?>
    </h3>
    <h4>Description du projet</h4>
    <p>
        <?php echo $project['description']; ?>
    </p>
</article>
<?php
}
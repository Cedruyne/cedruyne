<h2>Mes réalisations</h2>
<?php
include_once(realpath('controllers/portfolio/index.php'));

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
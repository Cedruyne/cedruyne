<h2>Mes réalisations</h2>
<section id="projectsContainer">
    <?php
    foreach ($projects as $project)
    {
    ?>

            <article class="projectContainer">
                <img src="<?php echo $project['iSrc']; ?>" alt="<?php echo $project['iAlt']; ?>"/>
                <div class="projectDescription">
                    <a href="<?php echo $project['pURL']; ?>"><h3><?php echo $project['pName']; ?></h3></a>
                </div>
            </article>

    <?php
    }
    ?>
</section>

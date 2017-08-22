<h2>Mes réalisations</h2>
<section id="projectsContainer">
    <?php
    foreach ($projects as $project)
    {
    ?>

            <article class="projectContainer">
                <img src="<?php echo $project['iSrc']; ?>" alt="<?php echo $project['iAlt']; ?>"/>
                <div class="projectDescription">
                    <h3><?php echo $project['pName']; ?></h3>
                    <p><?php echo $project['technologies']; ?> </p>
                </div>
            </article>

    <?php
    }
    ?>
</section>



<main class="flex">
    <div class="cards-container flex">   
        <!-- <div class="cards"> -->
            <!-- ciao -->
            <?php
                foreach ($arr_disc as $disc) {?>
                    <div class="card flex">
                        <img src="<?php $disc['poster']?>" alt="<?php $disc['author'] ?>">
                            <h2>ciao <?php $disc['title'] ?></h2>
                            <h3> <?php $disc['author'] ?></h3>
                            
                    </div>
                <?php } ?>  
        <!-- </div> -->
    </div>
</main>
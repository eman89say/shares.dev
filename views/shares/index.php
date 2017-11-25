<div class="col-md-12">
    <a class="btn btn-warning btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
    <?php foreach($viewmodel as $item) : ?>
        <div class="card">
            <div class="card-body">
            <h3 class="card-title"><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
           
            <p class="card-text"><?php echo $item['body']; ?></p>
            
            <a class="btn btn-secondary " href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
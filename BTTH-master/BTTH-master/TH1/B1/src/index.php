<?php
    require_once "../controller/getAllFlower.php";

?>

    <?php include "../components/Clients/header.php"?>
    <h1 class="title_header">Danh sách các loài hoa</h1>
    <div class="container">
        <div class="flower-list">
            <div class="row">
                <?php foreach ($flowers as $flower): ?>   
                    <div class="col-4">
                        <div class="flower_item card">
                            <div class="card-header">
                                <h3><?php echo $flower['name']; ?></h3>
                            </div>
                            <div class="card-body">
                                <?php if(substr($flower['image'], 0, 6) == "images"): ?>
                                    <img src="../<?php echo $flower['image']?>" alt="<?php echo $flower['name']?>">
                                <?php else: ?>
                                    <img src="<?php echo $flower['image']?>" alt="<?php echo $flower['name']?>">
                                <?php endif;?>
                            </div>
                            <div class="card-footer">
                                <p><?php echo $flower['description']; ?></p>
                            </div>
                            
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php include '../components/Admin/footer.php'?>
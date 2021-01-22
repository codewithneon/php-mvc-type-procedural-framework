<?php 
$home_list=(object) array(
    (object)array(
        'title'=>'category',
        'button'=>'category',
        'link'=>route('category'),
        'status'=>true
    ),
    (object)array(
        'title'=>'about',
        'button'=>'about',
        'link'=>route('about'),
        'status'=>true
    )
);?>
<div class="container">
    <div class="row my-5">
        <div class="col-12 text-center"> 
            <h1 class="text-uppercase"><?=$config['app_name']?> </h1>
        </div>
    </div>
    <div class="row">
        <?php foreach ($home_list as $key => $list): if(!$list->status) continue; ?>
        <div class="col my-2">
            <div class="card shadow text-uppercase">
                <div class="card-body">
                    <h5 class="text-center"><?=$list->title?></h5>
                </div>
                <div class="card-footer p-1">
                    <a href="<?=$list->link?>" class="btn btn-block btn-info"><?=$list->button?></a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
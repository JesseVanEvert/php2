<?php
    require APPROOT . '/ui/inc/header.php';
?>

<?php
    require APPROOT . '/ui/inc/navigation.php';
?> 

    <section id="content">
        <h1 id="formHeader"><?php echo $data['title'] ?></h1>
        <?php   
            if($this->tokenHandler($data['token']) == "forgot"){
                $this->newPasswordFormFactory($data, $data['token']);
            } 
        ?>
    </section>';

<?php
    require APPROOT . '/ui/inc/footer.php';
?>
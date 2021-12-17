<html> 
    <head> 
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body> 
        <h2>Artikel Terbaru</h2>
        <a href="<?php echo site_url('blog/add');?>"> + Tambah Artikel</a>

        <?php foreach($blog as $key=>$blog):?>
        <div calss="blog">
        
            <h3>
            
                <a href="<?php echo ('blog/detail/'.$blog['url']);?>">
                <?php echo $blog['title'];?>
                </a>
            </h3> 
            <a href="<?php echo site_url('blog/edit/'.$blog['id']);?>"> Edit</a>   
            <?php echo $blog['content'];
            endforeach;
        ?>
    </body>
</html>
<ul class="dropdown">
    <?php
    $sql = "SELECT category.id as cat_id, category.category_name as cat_name, category.status, posts.cat_id
							FROM posts INNER JOIN category ON category.id = posts.cat_id WHERE category.status = 'Active' AND  posts.cat_id >= 1";
    $query = $database->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    if ($query->rowCount() > 0) {
        foreach ($data as $result) {
    ?>
            <li><a href="categories.php?cat_id=<?php echo htmlentities($result->cat_id); ?>"><?php echo htmlentities($result->cat_name); ?></a></li>
    <?php $cnt++;
        }
    } ?>
</ul>
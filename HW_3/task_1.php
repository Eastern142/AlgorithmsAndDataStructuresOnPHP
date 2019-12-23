<?php

$connect = mysqli_connect('localhost', 'root', '', 'category')
    or die('Ошибка подключения к базе данных');
$query = "SELECT `cat`.`id_category`,
                 `cat`.`category_name`,
                 `cat_link`.`parent_id`,
                 `cat_link`.`child_id`,
                 `cat_link`.`level`
FROM `categories_db` AS `cat`
INNER JOIN `categories_links` AS `cat_link` ON `cat`.`id_category` = `cat_link`.`child_id`";
$result = mysqli_query($connect, $query);
$category = [];

while ($cat = mysqli_fetch_assoc($result)) {
    $category[$cat['level']][$cat['parent_id']] = $cat;
}

mysqli_close($connect);

var_dump($category);
//die();

function buildTree ($category, $parent_id = 0) {
    if(is_array($category) && isset($category[$parent_id])) {
//        var_dump($category);
//        die();
        $tree = "<ul>";

        foreach ($category[$parent_id] as $cat) {
//            var_dump($cat);
            $tree .= "<li>".$cat['category_name']."</li></ul>";
            echo $tree;
            buildTree($category, $cat['id_category']);
//            $tree .= buildTree($category, $cat['id_category']);
//            $tree .= "</li>";
        }

//        $tree .="</ul>";
//        echo $tree;
    }
}

buildTree($category);
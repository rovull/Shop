<?php


class News
{

    /** Returns single news items with specified id
     * @rapam integer &id
     */

    public static function getNewsItemByID($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM product WHERE id=' . $id);


            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }


    }

    public static function getNewsList($offset)
    {


        $max = 3;
        $db = Db::getConnection();
        $newsList = array();


        $sql = $db->prepare("SELECT * FROM product LIMIT $offset,$max");
        $sql->execute([$offset, $max]);


        $i = 0;
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $newsList[$i]['id'] = $row['id'];

            $newsList[$i]['img'] = $row['img'];
            $newsList[$i]['name'] = $row['name'];
            $newsList[$i]['model'] = $row['model'];
            $newsList[$i]['color'] = $row['color'];
            $newsList[$i]['description'] = $row['description'];
            $i++;
        }

        return $newsList;

    }

    public static function getAllProduct()
    {
        $db = Db::getConnection();
        $member = $db->query('SELECT COUNT(*) as count FROM product')->fetchColumn();
        $m = intval($member);
        return$m;




    }

}
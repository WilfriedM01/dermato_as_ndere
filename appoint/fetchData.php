<?php
require_once './library/config.php';
require_once './library/functions.php';

if(isset($_GET['action'])){
    $action = $_GET['action'];

    switch ($action){
        case 'getEventsList':
            $per_page = 10;
            $page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : 1;
            $start 	= ($page-1)*$per_page;
            $sql 	= "SELECT u.id AS uid, u.name, u.phone, u.email,
			   r.ucount, r.rdate, r.status, r.comments   
			   FROM tbl_users u, tbl_reservations r 
			   WHERE u.id = r.uid  
			   ORDER BY r.id DESC LIMIT $start, $per_page";
            //echo $sql;
            $result = dbQuery($sql);
            $records = array();
            while($row = dbFetchAssoc($result)) {
                extract($row);
                $records[] = array("user_id" => $uid,
                    "user_name" => $name,
                    "user_phone" => $phone,
                    "user_email" => $email,
                    "count" => $ucount,
                    "res_date" => $rdate,
                    "status" => $status,
                    "comments" => $comments);
            }//while
            echo json_encode($records);
            break;

        case 'getUsers':

            break;
    }
}

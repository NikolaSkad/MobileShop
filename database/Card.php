<?php

class Card
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db=$db;
    }

    //insert into card table
    public function insertIntoCard($params = null, $table="card"){
        if($this->db->con != null){
            if($params != null){
                //insert into card(user_id) values (0)
                //get table columns
                $columns = implode(',', array_keys($params));
                //print_r($columns);
                $values = implode(',', array_values($params));
                //print_r($values);
                
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table, $columns, $values);
                //echo $query_string;

                //execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    //dobiti user_id i phone_id i insertovati u tabelu card
    
    public function addToCard($userid,$itemid){
        if (isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "phone_id" => $itemid
            );

            // insert data into card
            $result = $this->insertIntoCard($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function deleteCard($item_id = null, $table="card")
    {
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE phone_id={$item_id}");
            if($result){
                header("Location: " .$_SERVER['PHP_SELF']);
            }//ako dobijemo result neki onda pozivamo ovu fju
        }
    }

    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum += floatval($item[0]);//ovom funkcijom dobijamo float vrednost item-a
            }
            return sprintf($sum);
        }
    }

}

?>

<?php

/**
 *
 */
class Database
{
    /**
     * Khai báo biến kết nối
     * @var [type]
     */
    public $conn;

    protected $table;
    
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost","root","khanh123","Quanlynhansu") or die ();
        mysqli_set_charset($this->conn,"utf8");
    }



    /**
     * [insert description] hàm insert
     * @param  $this->table
     * @param  array  $data
     * @return integer
     */
    public function insert(array $data)
    {
        //code
        $sql = "INSERT INTO {$this->table} ";
        $columns = implode(',', array_keys($data));
        $values  = "";
        $sql .= '(' . $columns . ')';
        foreach($data as $field => $value) {
            if(is_string($value)) {
                $values .= "'". mysqli_real_escape_string($this->conn, $value) ."',";
            } else {
                $values .= mysqli_real_escape_string($this->conn, $value) . ',';
            }
        }
        $values = substr($values, 0, -1);
        $sql .= " VALUES (" . $values . ")";
        mysqli_query($this->conn, $sql) or die("Lỗi  query  insert ----" .mysqli_error($this->conn));
        return mysqli_insert_id($this->conn);
    }

    public function update(array $data, int $id)
    {
        $sql = "UPDATE {$this->table}";

        $set = " SET ";

        $where = " WHERE id=" . $id;

        foreach($data as $field => $value) {
            if (is_array($value) || is_object($value)) {
                $value = json_encode($value);
            }
            if(is_string($value)) {
                $set .= $field .'='. "'". $value . "', ";
            } else {
                $set .= $field .'='. mysqli_real_escape_string($this->conn, $value) . ', ';
            }
        }

        $set = substr($set, 0, -2);
        
        $sql .= $set . $where;

        mysqli_query($this->conn, $sql) or die( "Lỗi truy vấn Update -- " .mysqli_error($this->conn));

        return mysqli_affected_rows($this->conn);
    }


    /**
     * [delete description] hàm delete
     * @param  $this->table      [description]
     * @param  array  $conditions [description]
     * @return integer             [description]
     */
    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = $id ";

        mysqli_query($this->conn,$sql) or die (" Lỗi Truy Vấn delete   --- " .mysqli_error($this->conn));
        return mysqli_affected_rows($this->conn);
    }

    public function fetchAll()
    {
        $sql = "SELECT * FROM {$this->table}" ;
        $result = mysqli_query($this->conn,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->conn));
        $data = [];
        if( $result)
        {
            while ($num = mysqli_fetch_assoc($result))
            {
                $data[] = $num;
            }
        }
        return $data;
    }

    /**
     * delete array
     */

    public function fetchID($id )
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = $id ";
        $result = mysqli_query($this->conn,$sql) or die("Lỗi  truy vấn fetchID " .mysqli_error($this->conn));
        return mysqli_fetch_assoc($result);
    }
}

?>
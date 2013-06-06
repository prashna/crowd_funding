<?php
session_start();
/*
 * File Name: Database.php
 * Date: November 18, 2008
 * Author: Angelo Rodrigues
 * Description: Contains database connection, result
 *              Management functions, input validation
 *
 *              All functions return true if completed
 *              successfully and false if an error
 *              occurred
 *
 */
function generate_select($array,$cols,$selected="")
{
    $option_text = "";
    foreach ($array as $ar) {
        $option = ($selected == $ar[$cols[0]])? "selected='selected'" : "";
        $option_text.='<option '.$option.' value="'.$ar[$cols[0]].'">'.$ar[$cols[1]].'</option>';
    }
    return $option_text;
}
class Database
{

    /*
     * Edit the following variables
     */
    private $db_host = 'localhost';     // Database Host
    private $db_user = 'root';          // Username
    private $db_pass = 'root';          // Password
    private $db_name = 'crowd_funding';          // Database
    /*
     * End edit
     */

    private $con = false;               // Checks to see if the connection is active
    private $result = array();          // Results that are returned from the query

    /*
     * Connects to the database, only one connection
     * allowed
     */
    public function connect()
    {
        if(!$this->con)
        {
            $myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);
            if($myconn)
            {
                $seldb = @mysql_select_db($this->db_name,$myconn);
                if($seldb)
                {
                    $this->con = true;
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return true;
        }
    }

    /*
    * Changes the new database, sets all current results
    * to null
    */
    public function setDatabase($name)
    {
        if($this->con)
        {
            if(@mysql_close())
            {
                $this->con = false;
                $this->results = null;
                $this->db_name = $name;
                $this->connect();
            }
        }

    }

    /*
    * Checks to see if the table exists when performing
    * queries
    */
    private function tableExists($table)
    {
        $tablesInDb = @mysql_query('SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');
        if($tablesInDb)
        {
            if(mysql_num_rows($tablesInDb)==1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    public function insert_id()
    {
        return mysql_insert_id();
    }

    /*
    * Selects information from the database.
    * Required: table (the name of the table)
    * Optional: rows (the columns requested, separated by commas)
    *           where (column = value as a string)
    *           order (column DIRECTION as a string)
    */
    public function select($table, $rows = '*', $where = null, $order = null)
    {
        $q = 'SELECT '.$rows.' FROM '.$table;
        if($where != null)
            $q .= ' WHERE '.$where;
        if($order != null)
            $q .= ' ORDER BY '.$order;
        // echo "<script>alert('".$q."')</script>";

        return $this->process_select_query($q);
        
    }
    public function process_select_query($q)
    {
        $this->result = null;

        $query = @mysql_query($q);
        if($query)
        {
            $this->numResults = mysql_num_rows($query);

            if($this->numResults)
            {
            //     return $query;
            // }
            for($i = 0; $i < $this->numResults; $i++)
            {
                $r = mysql_fetch_array($query);
                $key = array_keys($r);
                for($x = 0; $x < count($key); $x++)
                {
                    // Sanitizes keys so only alphavalues are allowed
                    if(!is_int($key[$x]))
                    {
                        if(mysql_num_rows($query) > 0)
                            $this->result[$i][$key[$x]] = $r[$key[$x]];
                        else
                            $this->result = null;


                        // if(mysql_num_rows($query) > 1)
                        //     $this->result[$i][$key[$x]] = $r[$key[$x]];
                        // else if(mysql_num_rows($query) < 1)
                        //     $this->result = null;
                        // else
                        //     $this->result[$key[$x]] = $r[$key[$x]];
                    }
                }
            }
            }
            return $this->result;
        }
        else
        {
            return false;
        }
    }

    public function process_query($q)
    {
        $query = @mysql_query($q);
        return $query;
    }

    /*
    * Insert values into the table
    * Required: table (the name of the table)
    *           values (the values to be inserted)
    * Optional: rows (if values don't match the number of rows)
    */
    public function insert($table,$values,$rows=null)
    {
        if($this->tableExists($table))
        {
            $insert = 'INSERT INTO '.$table;
        // echo "<script>alert('".$insert." ')</script>";

            if($rows != null)
            {
                $insert .= ' ('.$rows.')';
            }
        // echo "<script>alert('".$insert." --a')</script>";

            for($i = 0; $i < count($values); $i++)
            {
                if(is_string($values[$i]))
                    $values[$i] = '"'.$values[$i].'"';
            }
            $values = implode(',',$values);
            $insert .= ' VALUES ('.$values.')';

            $ins = @mysql_query($insert);

            if($ins)
            {
                return mysql_insert_id();
            }
            else
            {
                return false;
            }
        }
    }

    /*
    * Deletes table or records where condition is true
    * Required: table (the name of the table)
    * Optional: where (condition [column =  value])
    */
    public function delete($table,$where = null)
    {
        if($this->tableExists($table))
        {
            if($where == null)
            {
                $delete = 'DELETE '.$table;
            }
            else
            {
                $delete = 'DELETE FROM '.$table.' WHERE '.$where;
            }
        // echo "<script>alert('".$delete." --a')</script>";
            $del = @mysql_query($delete);

            if($del)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    /*
     * Updates the database with the values sent
     * Required: table (the name of the table to be updated
     *           rows (the rows/values in a key/value array
     *           where (the row/condition in an array (row,condition) )
     */
    public function update($table,$rows,$where=null)
    {
        if($this->tableExists($table))
        {
            // Parse the where values
            // even values (including 0) contain the where rows
            // odd values contain the clauses for the row


            $update = 'UPDATE '.$table.' SET ';
        // echo "<script>alert('".$update." --a')</script>";

            $keys = array_keys($rows);
            for($i = 0; $i < count($rows); $i++)
            {
                if(is_string($rows[$keys[$i]]))
                {
                    $update .= $keys[$i].'="'.$rows[$keys[$i]].'"';
                }
                else
                {
                    $update .= $keys[$i].'='.$rows[$keys[$i]];
                }

                // Parse to add commas
                if($i != count($rows)-1)
                {
                    $update .= ',';
                }
            }
        // echo "<script>alert('".$update." --a')</script>";
            
            if($where!="")
                $update .= ' WHERE '.$where;
        // echo "<script>alert('".$update." --a')</script>";

            $query = @mysql_query($update);
            if($query)
            {
                return mysql_insert_id();
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }


}

?>

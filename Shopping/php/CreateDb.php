<!-- 
    If you want to create this database, you have to open this project in your localhost
    and hit refresh. Once it refreshes, it will notify you at the very top if an error occurred.
    The way you check if it was successfully created, you can open your XAMPP and click on "Admin"
    of MySQL and hit refresh within the MySQL localhost website. Your database should be displayed there.

-->

<?php

class CreateDb{

    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //class constructor
    public function __construct(
        $dbname = "Newdb",
        $tablename = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""

    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // check connection
        if (!$this->con){
            die("Connection failed: " .mysqli_connect_error());
        }

        //query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        //execute query
        if(mysqli_query($this->con, $sql)){
            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            //sql to create new table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename 
                    (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    product_name VARCHAR (25) NOT NULL,
                    product_price FLOAT,
                    product_image VARCHAR(100)
                    );";

            if(!mysqli_query($this->con, $sql)){
                echo "Error creating table:".mysqli_error($this->con);
            }

        }else{
            return false;
        }

    }

    //get products from the database
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }


    public function getAWS(){
        $sql = "SELECT * FROM $this->tablename WHERE id = 2";
        return $sql;

    }


}
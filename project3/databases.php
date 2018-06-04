<?php

class databases
{
    private $connection;
    /**
     * databases constructor.
     */
    public function __construct()
    {
      $this->connection = mysqli_connect('localhost', 'root', 'houston', 'comments');
      if(!$this->connection){
          die("IoIoIo Error connect with databases");
      }
    }

    public function read($semestr){
        $statement=$this->connection->prepare('SELECT * FROM comments WHERE semestr=?');
        $statement->bind_param('i', $semestr);
        $statement->execute();
        $exe=$statement->get_result();
        $table=[];
        if($exe->num_rows>0){
            while ($r=$exe->fetch_assoc()){
                $table[]=$r;
            }
        }
        return $table;
    }

    public function insert($semestr, $nick, $comment){
        $statement=$this->connection->prepare('INSERT INTO comments (semestr, nick, text) VALUE (?, ?, ?)');
        $statement->bind_param('iss', $semestr, $nick, $comment);
        $statement->execute();
    }
}
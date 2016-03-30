<?php
class User extends AppModel
{

    public static function get($id)
    {
        $db = DB::conn();
        $row = $db->row('SELECT * FROM user WHERE id = ?', array($id));
        return new self($row);
    }

    public static function getAll()
    {
        $threads = array();

        $db = DB::conn();
        $rows = $db->rows('SELECT * FROM user');
        foreach ($rows as $row) {
            $threads[] = new Thread($row);
        }

        return $threads;
    }

    public static function checkLogin($username, $pass)
    {
        $db = DB::conn();
        $row = $db->rows('SELECT * FROM user WHERE username = ? and password = ?', array($username, sha1($pass)));
        
        return $row;
    }
    
}

<?php


class Auth
{
    public $db;

    public function __construct(QueryBuilder $db)
    {
        $this->db = $db;
    }

    public function register($email, $password, $ter_name)
    {
        $this->db->store('log_users', [
            'email' => $email,
            'password' => $password,
            'ter_name' => $ter_name,
        ]);
    }
}
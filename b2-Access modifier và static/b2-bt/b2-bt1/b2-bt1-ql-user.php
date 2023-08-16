<?php
class User
{
    protected string $name;
    protected string $email;
    protected  $role;
    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getInfo()
    {
        return $this->name . ' ' . $this->email;
    }

    public function isAdmin()
    {
        if ($this->role === "1") {
            echo "Là admin";
        } elseif ($this->role === "2") {
            echo "Là người dùng bình thường";
        }
    }
}
?>
<style>
    echo {
        text-align: center;
    }
</style>
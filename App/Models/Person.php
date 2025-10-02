<?php
namespace App\Models;
class Person
{
    protected ?int $id;
    public string $name;
    protected string $email;
    private string $phone;
    public function _construct(?$id,string $name,string $email,string $phone)
    {
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
    }
}
?>
<?php
class User
{
    private string $name;

    public function __construct(

        string $name
    )
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
}

class UserCreator
{

   // protected static $create = null;
    public static function create(string $name): User
    {
        static $create = null;
        if (null === $create) {
            $create = new User($name);
        }
        return $create;
    }

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public function __wakeup()
    {

    }
}

$try = UserCreator::create('JOY');
$secondtry = UserCreator::create(1);

print_r ($try);
echo "<br>";
print_r ($secondtry);

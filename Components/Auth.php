<?php

class Auth
{
    public $db;

    public  function  __construct(QueryBuilder $db)
    {
        $this->db = $db;
    }
    public function register($email, $password)
    {
        $this->db->store('users', [
            'email' => $email,
            'password' => md5($password)
        ]);
    }
    public function login($email, $password)
    {
        //Задание - из 1. сделать метод
        // 1. Проверить существует ли пользователь в базе
        $sql = "SELECT * FROM users WHERE email=:email AND password=:password LIMIT 1";
        $statement = $this->db->pdo->prepare($sql);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", md5($password));
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        // 2. Если да, то записываем в сессию и возвращаем true
       if($user) {
           $_SESSION['user'] = $user;
           return true;
       }
        // 3. Если нет, возвращаем false

           return false;
    }

    public function logout()
   {
    unset($_SESSION['user']);
   }

   public function check()
   {
       if(isset($_SESSION['user'])) {
           return true;
       }

       return false;
   }

   public function currentUser()
   {
       if($this->check()) {
           return $_SESSION['user'];
       }
   }

   public function fullName()
   {
      $user = $this=>$this->currentUser();
      return $user['name'] . " " . $user['surname'];
   }

   public function  getUserStatus()
   { if($this->isBanned()) {
       return $user->logout();


   }

   }

   public function isBanned()
   {

   }

   public function isNormal()
   {

   }

   public function ban()
   {

   }

   public function unban()
   {

   }

   public function remove()
   {

   }
}
?>

видео 5 - 1 час 22 минуты
// ban()
// unban()
// getUserStatus - слово выводить "banned", "normal"
//isBanned() - если isBanned true, то выводим "banned"
//isNormal() - false
//remove()
//uploadAvatar() - с использованием компонента ImageManager. ImageManager должен содержать SQLзапрос
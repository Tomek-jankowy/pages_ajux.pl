<?php 
    $message=new contact;
    if((isset($_POST['email']))&&(strlen($_POST['email'])!=0))$message->main();
    else header('Location: index.html?error=1').exit();
    class contact
    {
        private $email;
        private $message;
        private function get_email()
        {
            (strlen($_POST['email'])!=0)?$email=$_POST['email']:header('Location: index.php?error=1').exit();
            (filter_var($email, FILTER_VALIDATE_EMAIL)==true)?$this->email=$email:header('Location: index.html.php?error=1').exit();
        }
        private function get_message()
        {
            (strlen($_POST['message'])!=0)?$this->message= htmlentities($_POST['message'], ENT_QUOTES, "UTF-8"):header('Location: index.php?').exit();
        }
        public function main()
        {
            $this->get_email();
            $this->get_message();
            $data=[$this->email,$this->message];
            (database_controler::save_to_database($data)==true)?header('Location: index.php?error=0').exit():header('Location: index.php?error3').exit();
        }
    }
    class database_controler
    {
        public static function  save_to_database($data)
        {
            $connection=database_controler::make_connection();
            if($connection!=false)
            {
                if($connection->query("INSERT INTO message(email,message) VALUES('$data[0]','$data[1]')"))return true;
                else 
                {
                    throw new Exception($connection->error);
                    exit();
                    return false;
                }
            }

        }
        static function make_connection()
        {
            require('connect.php');
            mysqli_report(MYSQLI_REPORT_STRICT);
            try
            {
                $connection = new mysqli($host,$db_user,$db_password,$db_name);//stworzenie obiektu klasy mysqli i przekaznie mu parametrow połącznia
                if($connection->connect_errno!=0)throw new Exception(mysqli_connect_errno());//sprawdzenie poprawnego połacznia
                else return $connection;//jeżeli połacznie jest zrealizowanie, wysłanie na podstawie otrzymanych danych z parametrow od funkcji wywołujacej stworzenie rezultatu zapytania i sprawdznie jego poprawnego otrzymania
            }
            catch(Exception $e) //przechycenie błedow i wyświetlenie ich
            {
                echo "I'm so sorry something wemt wrong :".$e;
                exit();
                return false;
            }
        }
    }
?>
 <?php 

class Connect{
    public $host;
    public $user_name;
    public $password;
    public $db_name;
    public $conn;
    
    public $tname;
    public $colname;
    
    
    public function __construct($host,$user_name,$password,$db_name){
        $this->host = $host;
        $this->user_name = $user_name;
        $this->password = $password;
        $this->db_name = $db_name;
        
        $this->conn = mysqli_connect($this->host,$this->user_name,$this->password,$this->db_name);
        if($this->conn){
            echo "databazaya qosuldunuz!";
        }else{
            echo "wrong!";
        }
    }
    public function select ($tname,$colname){
        
        if($this->conn){
            $this->tname = $tname;
            $this->colname = $colname;
            
            $sql = "SELECT * FROM $this->tname";
            
            $query = mysqli_query($this->conn,$sql);
            
            
            return $query;
        }else{
            echo "Error";
        }
    }
    public $txt;
    
    
    public function insert($tname,$colname,$txt){

        if($this->conn){
            $this->tname = $tname;
            $this->colname = $colname; 
            $this->txt = $txt;
            $sql = "INSERT INTO $this->tname($colname) VALUES('$txt')";
            
            $query = mysqli_query($this->conn,$sql);
            
            return $query;
        } else {
            echo "Error!";
        }
    }
    
    
    
    public $id;
    
    public function update($tname,$colname,$txt,$id){
        if($this->conn){
            $this->tname = $tname;
            $this->colname = $colname; 
            $this->txt = $txt;
            $this->id = $id;
            
            $sql = "UPDATE $tname SET $colname = '$txt' WHERE id = $id";
            $query = mysqli_query($this->conn,$sql); 
            return $query;  
        }
    }
    
    
    
}


                         

$startuply = new Connect("localhost","root","","startuply");


?>
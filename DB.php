                                <?php 
                                class DB{
                                    
                                    private static $_instance = null;
                                    private $servername = "localhost";
                                    private $username = "root";
                                    private $password = "";
                                    private $dbname ="cafe_db";
                                    private $_conn,
                                    $_query,
                                    $_error = false,
                                    $_results,
                                    $_count = 0;


                                private function __construct(){
                                    try{
                                        $this->_conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", Config::get('mysql/username'), Config::get('mysql/password'));

                                        // set the PDO error mode to exception
                                        $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    //echo "connection";
                                        }
                                    catch(PDOException $e)
                                        {
                                        echo  $e->getMessage();
                                    // return null;
                                        }
                                }
                                public static function getInstance(){
                                    if(self::$_instance==null){
                                        self::$_instance = new DB();

                                    }
                                    return self::$_instance;
                                }
                                //define a generic query method
                                public function getQuery($query) {
                                    $result = $this->_conn->prepare($query);
                                    $ret_result = $result->execute();
                                    if (!$ret_result) {
                                    echo 'PDO::errorInfo():';
                                    echo '<br />';
                                    echo 'error SQL review your query: '.$query;
                                    die();
                                    } 
                                    $result->setFetchMode(PDO::FETCH_ASSOC);
                                    $results = $result->fetchAll();
                                    return $results;
                                }
                                function execute($query) {
                                    if (!$results = $this->conn->exec($query)) {
                                        echo 'PDO::errorInfo():';
                                    echo '<br />';
                                    echo 'error SQL: '.$query;
                                    die();
                                    }
                                    return $results;
                                }
                                //create a general method to insert data 
                                public function Insert($table,array $data){
                                    $sql="INSERT INTO $table ( ";
                                    foreach($data as $col=>$val){
                                        $sql.=" $col,";
                                        }
                                    $sql= substr($sql,0,-1);
                                    $sql.=") VALUES ( ";
                                    foreach($data as $col=>$val){
                                        $sql.=" :$col,";
                                    }
                                    $sql= substr($sql,0,-1);
                                    $sql.=" )";
                                     
                                        $stmt = $this->_conn->prepare($sql);
                                        foreach($data as $column=>&$value){
                                            $stmt->bindParam($column, $value);
                                        }
                                        $stmt->execute();
                                    if($stmt->rowCount()>0){
                                       return true;
                                    }
                                    else{
                                        die("Data Insert Fail!");
                                    }
                                 
                                  }
                                  //update statement
                                  public function updateDetails($sql){
                                  try{
                                        //create a stament to execute
                                        $stmt = $this->_conn->prepare($sql);
                                        //execute
                                        $stmt->execute();
                                        if($stmt->rowCount()>0){
                                            return true;

                                        }

                                  }catch(PDOException $e){
                                      return $e->getErrorMessage();
                                      echo "something went wrong";
                                  }
                                  //create an update/modify class 
                                

                                      }
                                      //create a delete method 
                                      //public func
                                      public function delete($tablename,$where_condition){
                                        //conditon a string
                                        $condition ='';
                                        foreach($where_condition as $key=>$value){
                                            $condition .=$key ." ='".$value."' AND";
                                            //create a substring
                                            $condition = substr($condition,0,-5);
                                            //create the query
                                            $query = " DELETE FROM ".$tablename." WHERE".$condition."";
                                            $stmt = $this->_conn->prepare($query);
                                            $stmt->execute();
                                            if($stmt->rowCount()>0){
                                                return true;
                                
                                            }else{
                                                return false;
                                            }
                                            
                                
                                        }
                                
                                
                                
                                
                                
                                    }
                                




                                  }
                                  
                                
                                    
                            
                            


                                ?>
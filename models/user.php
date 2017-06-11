<?php
    /**
     * Badgery
     * @author Nate Hascup <nshascup@gmail.com>
     * @version 1.0
     */
    
    //CONNECT
    class User
    {
        private $_pdo;
        
        function __construct()
        {
            //Require configuration file
            require_once '/home/nhascup/config.php';
            
            try {
                //Establish database connection
                $this->_pdo = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
                
                //Keep the connection open for reuse to improve performance
                $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
                
                //Throw an exception whenever a database error occurs
                $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            }
            catch (PDOException $e) {
                die( "Error!: " . $e->getMessage());
            }
        }
        
         /**
         * Returns a blogger that has the given username.
         *
         * @access public
         * @param int $id the id of the pet
         *
         * @return an associative array of pet attributes, or false if
         * the pet was not found
         */
        
        function userBadgeDisplay()
        {
            
            
            $select = 'SELECT * FROM badge ORDER BY badge_ID';
            
            $results = $this->_pdo->prepare($select);
            //$results->bindValue(':user_ID', $user_ID, PDO::PARAM_INT);
            $results->execute();
             
            $resultsArray = array();
             
            //map each blog to a row of data by date
            $rows = $results->fetchAll(PDO::FETCH_ASSOC);
             
            return $rows;
        }
        
        /*function userBadgeDisplay($user_ID)
        {
            
            
            $select = 'SELECT * FROM badge';
            
            $results = $this->_pdo->prepare($select);
            $results->bindValue(':user_ID', $user_ID, PDO::PARAM_INT);
            $results->execute();
             
            $resultsArray = array();
             
            //map each blog to a row of data by date
            $rows = $results->fetchAll(PDO::FETCH_ASSOC);
             
            return $rows;
        }*/
         
         
         

    }
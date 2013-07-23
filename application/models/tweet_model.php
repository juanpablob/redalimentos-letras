<?php
    
    class Tweet_model extends CI_Model {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function save_tweets($tweets) {
            foreach($tweets as $tweet) {
                if($this->is_unique($tweet['strid']) == true) {
                    $this->db->insert('statuses', $tweet);
                }
            }
        }
        
        private function is_unique($status_id) {
            $query = $this->db->get_where('statuses', array('strid' => $status_id));
            
            if($query->num_rows > 0) {
                return false;
            }
            else {
                return true;
            }
        }
        
        public function get_latest_tweets() {
            //$date_time = date('YYYY-mm-dd G:i:s');
            
            $this->db->order_by('created', 'desc');
            $query = $this->db->get('statuses', 30);
            
            if($query || $query->num_rows > 0) {
                return $query->result();
            }
            else {
                return false;
            }
        }
        
    }
    
?>
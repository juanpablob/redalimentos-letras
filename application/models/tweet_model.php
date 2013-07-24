<?php
    
    class Tweet_model extends CI_Model {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function save_tweets($tweets) {
            $chars_counter = 0;
            
            foreach($tweets as $tweet) {
                if($this->is_unique($tweet['strid']) == true) {
                    $this->db->insert('statuses', $tweet);
                    
                    $tweet_rem_chars = 140 - strlen($tweet['text']);
                    
                    $chars_counter = $chars_counter + $tweet_rem_chars;
                }
            }
            
            $this->update_counter($chars_counter);
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
            $this->db->order_by('created', 'desc');
            $query = $this->db->get('statuses', 30);
            
            if($query || $query->num_rows > 0) {
                return $query->result();
            }
            else {
                return false;
            }
        }
        
        public function update_counter($characters) {
            $query = $this->db->get_where('statistics', array(
                'id' => 1
            ));
            
            $chars_counter = $query->result();
            $chars_counter = $chars_counter[0]->chars_counter;
            
            $this->db->where('id', 1);
            $this->db->update('statistics', array(
                'chars_counter' => $chars_counter + $characters
            ));
        }
        
        public function get_counter() {
            $query = $this->db->get_where('statistics', array(
                'id' => 1
            ));
            
            $chars_counter = $query->result();
            $chars_counter = $chars_counter[0]->chars_counter;
            
            return $chars_counter;
        }
        
    }
    
?>
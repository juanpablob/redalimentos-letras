<?php
    
    class App extends CI_Controller {
        
        /*
        | Variables
        |-------------------------------------------
        */
        public $view_data;
        
        /*
        | Constructor
        |-------------------------------------------
        */
        public function __construct() {
            parent::__construct();
            
            /* Models */
            $this->load->model('Tweet_model', 'tweet_model', true);
            
            /* Configuration */
            $this->config->load('site', true);
            //$this->config->load('facebook', true);
            
            /* Libraries */
            //$this->load->library('session');
            
            /* Helpers */
            $this->load->helper('url');
            $this->load->helper('functions');
            
            /* Facebook */
            if(ENVIRONMENT == 'development') {
                
            }
            elseif(ENVIRONMENT == 'testing' || ENVIRONMENT == 'production') {
                
            }
            
            /* Default Data for Views */
            $this->view_data = array(
                'site_name'             => $this->config->item('site_name', 'site'),
                'google_analytics_id'   => $this->config->item('google_analytics_id', 'site')
            );
        }
        
        /*
        | Index
        |-------------------------------------------
        */
        public function index() {
            $this->view_data['page_title'] = 'Mira tus letras!';
            
            // Load view
            $this->load->view('index.php', $this->view_data);
        }
        
        /*
        | Scrap Tweets
        |-------------------------------------------
        */
        public function scrap_tweets() {
            $settings = array(
                'oauth' => array(
                    'oauth_access_token' => '16523454-hKQpEvPmUfXsFmVy8vcLjdDp3KyyqGa3KosOjTZLA',
                    'oauth_access_token_secret' => 'Xf5Mqv3RrYA6M6VUcyEHq3gp9x398OUQMtTs1mNemRc',
                    'consumer_key' => 'nT59LJBLuZ5KzfsfaeSew',
                    'consumer_secret' => 'paPpnZkOKdrNJCXxiZClhUCHsV8GbOz1QXSnCgI'
                ),
                'url' => 'http://api.twitter.com/1.1/search/tweets.json',
                'method' => 'GET',
                'query' => '?q=%23protagonistas13&result_type=recent&count=50',
                'fields' => array(
                    'q' => '#protagonistas13',
                    'result_type' => 'recent',
                    //'since_id' => 00,
                    'count' => 50
                )
            );
            
            $this->load->library('twitter_api', $settings['oauth']);
            
            $response = $this->twitter_api->setGetfield($settings['query'])->buildOauth($settings['url'], $settings['method'])->performRequest();
            
            //print_r($response);
            
            if($response) {
                $response = json_decode($response);
                $tweets = array();
                
                foreach($response->statuses as $tweet) {
                    array_push($tweets, array(
                        'strid'         => $tweet->id_str,
                        'text'          => $tweet->text,
                        'userid'        => $tweet->user->id_str,
                        'name'          => $tweet->user->name,
                        'username'      => $tweet->user->screen_name,
                        'location'      => $tweet->user->location,
                        'followers'     => $tweet->user->followers_count,
                        'avatar'        => $tweet->user->profile_image_url,
                        'date'          => $tweet->created_at
                    ));
                }
                
                $this->tweet_model->save_tweets($tweets);
            }
        }
        
    }
    
?>
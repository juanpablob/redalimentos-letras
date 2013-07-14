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
            $this->load->model('Default_model', 'default_model', true);
            
            /* Configuration */
            $this->config->load('site', true);
            $this->config->load('facebook', true);
            
            /* Libraries */
            $this->load->library('session');
            $this->load->library('facebook');
            
            /* Helpers */
            $this->load->helper('url');
            $this->load->helper('functions');
            
            /* Facebook */
            if(ENVIRONMENT == 'development') {
                
            }
            elseif(ENVIRONMENT == 'testing' || ENVIRONMENT == 'production') {
                if(isset($_POST['signed_request'])) {
                    $this->session->set_userdata('signed_request', $this->facebook->parse_signed_request($_POST['signed_request'], $this->config->item('secret', 'facebook')));
                }
            }
            
            /* Default Data for Views */
            $this->view_data = array(
                'site_name'             => $this->config->item('site_name', 'site'),
                'google_analytics_id'   => $this->config->item('google_analytics_id', 'site'),
                'facebook_config'       => $this->config->item('facebook')
                )
            );
            
            /* Etc */
            parse_str($_SERVER['QUERY_STRING'], $_REQUEST);
        }
        
        /*
        | Index
        |-------------------------------------------
        */
        public function index() {
            $this->view_data['page_title'] = 'Index';
            
            // Load view
            $this->load->view('layouts/header', $this->view_data);
            $this->load->view('index.php', $this->view_data);
            $this->load->view('layouts/footer', $this->view_data);
        }
        
    }
    
?>
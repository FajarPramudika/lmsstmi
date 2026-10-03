<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * MY_Controller.php — Application Base Controllers
 * Defined per TASKS.md §4.3
 * Compatible with PHP 7.3.33
 */

class MY_Controller extends CI_Controller {
    /**
     * Authenticated user data
     * @var array|null
     */
    protected $current_user = null;

    public function __construct() {
        parent::__construct();

        // Autoload default helpers & layout library
        $this->load->helper(array('url', 'form', 'ui', 'icon', 'label', 'format'));
        $this->load->library(array('layout'));

        // Load mock/real user session
        $this->init_user_session();
    }

    protected function init_user_session() {
        // Default demo user (Muhammad Raihan) as specified in TASKS.md & design.pen
        $this->current_user = array(
            'id' => 1,
            'name' => 'Muhammad Raihan',
            'email' => 'raihan@digitallearn.test',
            'role' => 'user',
            'avatar_initials' => 'MR',
            'status' => 'active'
        );
    }

    /**
     * Send JSON response cleanly
     */
    protected function json($payload, $status = 200) {
        $this->output
            ->set_status_header($status)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($payload));
    }

    /**
     * Abort with HTTP status
     */
    protected function abort($code = 404, $message = '') {
        show_error($message ? $message : 'Akses Ditolak', $code);
    }
}

/**
 * Public controller for landing page and public verification
 */
class Public_Controller extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
}

/**
 * Guest controller for login & registration
 */
class Guest_Controller extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
}

/**
 * User controller for authenticated learner pages
 */
class User_Controller extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
}

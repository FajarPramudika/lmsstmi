<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Layout.php — Reusable Layout Manager Library
 * Pattern queried and verified via Context7 from CodeIgniter 3 documentation
 * Fully compatible with PHP 7.3.33
 */

class Layout {
    /**
     * CodeIgniter super-object instance
     * @var CI_Controller
     */
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    /**
     * Render view wrapped inside a master layout
     * 
     * @param string $view View file to render
     * @param array $data Data array to pass to the view and layout
     * @param string $layout Master layout name (e.g. 'app', 'learn', 'public', 'auth')
     * @param bool $return Whether to return output as string
     * @return string|void
     */
    public function render($view, $data = array(), $layout = 'app', $return = FALSE) {
        // Set default title if not provided
        if (!isset($data['page_title'])) {
            $data['page_title'] = 'Digital Learn Platform';
        } else {
            $data['page_title'] = $data['page_title'] . ' — Digital Learn Platform';
        }

        // Render main content view using CI3 third parameter TRUE
        $data['content'] = $this->CI->load->view($view, $data, TRUE);

        // Render master layout with injected content
        return $this->CI->load->view('layouts/' . $layout, $data, $return);
    }
}

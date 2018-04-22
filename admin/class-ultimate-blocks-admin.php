<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://imtiazrayhan.com/
 * @since      1.0.2
 *
 * @package    Ultimate_Blocks
 * @subpackage Ultimate_Blocks/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ultimate_Blocks
 * @subpackage Ultimate_Blocks/admin
 * @author     Imtiaz Rayhan <imtiazrayhan@gmail.com>
 */
class Ultimate_Blocks_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.2
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.2
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The PATH of this plugin.
	 *
	 * @since    1.0.2
	 * @access   private
	 * @var      string    $plugin_name    The PATH of this plugin.
	 */
	private $plugin_path;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.2
	 */
	public function __construct() {

		$this->plugin_name = ULTIMATE_BLOCKS_NAME;
		$this->version     = ULTIMATE_BLOCKS_VERSION;
		$this->plugin_path = ULTIMATE_BLOCKS_PATH;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.2
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ultimate_Blocks_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ultimate_Blocks_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/ultimate-blocks-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.2
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ultimate_Blocks_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ultimate_Blocks_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ultimate-blocks-admin.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 * Register Setting Pages for the admin area.
	 *
	 * @since    1.0.2
	 */
	public function register_admin_menus() {
		error_log($this->plugin_path . 'admin/templates/menus/main-menu.php');
		add_menu_page(
			'UltimateBlocks Settings',
			'Ultimate Blocks',
			'manage_options',
			'ultimate-blocks',
			array( $this, 'main_menu_template_cb'),
			'dashicons-tagcloud',
			20
		);
	}

	/**
	 * Set template for main setting page
	 *
	 * @return void
	 */
	public function main_menu_template_cb() {
		require_once($this->plugin_path . 'admin/templates/menus/main-menu.php');
	}


}
<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://yukyhendiawan.com
 * @since      1.0.0
 *
 * @package    Disable_Widgets_Gb
 * @subpackage Disable_Widgets_Gb/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Disable_Widgets_Gb
 * @subpackage Disable_Widgets_Gb/admin
 * @author     Yuky Hendiawan <yukyhendiawan1998@gmail.com>
 */
class Disable_Widgets_Gb_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Returns false.
	 * 
	 * Useful for returning false to filters easily.
	 *
	 * @see __return_true()
	 * 
	 * @return false False.
	 */
	public function disable_widgets_gb_return_false() {
		return false;
	}	

}

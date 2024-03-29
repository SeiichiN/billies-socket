<?php
/*
 * @wordpress-plugin
 * Plugin Name: Billies Socket
 * Description: Test of socket -- [insert_billies_socket]
 * Version: 0.1
 * Author: Seiichi Nukayama
 * URL: http://www.billies-works.com/
 */

function billies_socket_add_files () {
  wp_enqueue_style('css-billies-socket-base', plugins_url('css/billiesSocket.base.css', __FILe__));
  wp_enqueue_script('js-socket-io', 'http://billieschatcorner.herokuapp.com/socket.io/socket.io.js', array(), false, false );
  // wp_enqueue_script('js-socket-io', 'http://localhost:3000/socket.io/socket.io.js', array(), false, false );

  wp_enqueue_script('js-billies-socket-connect', plugins_url('js/billiesSocket.connect.js', __FILE__), array('jquery') ,false, true);
}
add_action('wp_enqueue_scripts', 'billies_socket_add_files');

function billies_socket_shell () {

  ob_start();
  ?>
  <div id="billiesSocket">
    <h1>Socketの練習</h1>
    <div class="billiesSocket-body">
    </div><!-- .billiesSocket-body -->
  </div><!-- #billiesSocket -->
  
<?php
return ob_get_clean();
}
add_shortcode('insert_billies_socket', 'billies_socket_shell');


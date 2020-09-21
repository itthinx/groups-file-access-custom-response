<?php
/**
 * groups-file-access-custom-response.php
 *
 * Copyright (c) 2020 "kento" Karim Rahimpur www.itthinx.com
 *
 * This code is provided subject to the license granted.
 * Unauthorized use and distribution is prohibited.
 * See COPYRIGHT.txt and LICENSE.txt
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This header and all notices must be kept intact.
 *
 * @author Karim Rahimpur
 * @package groups-debug-buckets
 * @since groups-debug-buckets 1.0.0
 *
 * Plugin Name: Groups File Access Custom Response
 * Plugin URI: http://www.itthinx.com/shop/groups-file-access/
 * Description: Example of customized server responses for <a href="https://www.itthinx.com/shop/groups-file-access/">Groups File Access</a>.
 * Version: 1.0.0
 * Author: itthinx
 * Author URI: http://www.itthinx.com
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'groups_file_access_server_response_title', 'gfacr_title', 10, 3 );
function gfacr_title( $title, $code, $file_id ) {
	return sprintf( '%s – %s – ', esc_html( $code ), esc_html( $file_id ) ) . $title;
}

add_filter( 'groups_file_access_server_response_heading', 'gfacr_heading', 10, 3 );
function gfacr_heading( $heading, $code, $file_id ) {
	return sprintf( '<!-- gtt_heading %s %s -->', esc_attr( $code ), esc_attr( $file_id ) ) . $heading;
}

add_filter( 'groups_file_access_server_response_message', 'gfacr_message', 10, 3 );
function gfacr_message( $message, $code, $file_id ) {
	return sprintf( '<!-- gtt_message %s %s -->', esc_attr( $code ), esc_attr( $file_id ) ) . $message;
}

add_filter( 'groups_file_access_server_response_document', 'gfacr_document', 10, 3 );
function gfacr_document( $document, $code, $file_id ) {
	return sprintf( '<!-- gtt_document %s %s -->', esc_attr( $code ), esc_attr( $file_id ) ) . $document;
}

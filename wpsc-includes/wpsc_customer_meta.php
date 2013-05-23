<?php
 /* 
 * NOTICE: 
 * This file was automatically created, strongly suggest that it not be edited directly.
<<<<<<< HEAD
 * See the code in the file wpsc_custom_meta_init.php at line 211 for more details.
=======
 * See the code in the file wpsc_custom_meta_init.php at line 213 for more details.
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
 */
?>

<?php 

//
// customer meta functions
//

/**
 * Add meta data field to a customer.
 *
 * This meta data function mirrors a corresponding wordpress post meta function.
 *
 * @since 3.9.0
<<<<<<< HEAD
=======
 * @uses $wpdb
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
 *
 * @param int $customer_id customer ID.
 * @param string $meta_key Metadata name.
 * @param mixed $meta_value Metadata value.
 * @param bool $unique Optional, default is false. Whether the same key should not be added.
 * @return bool False for failure. True for success.
 */
<<<<<<< HEAD
function add_customer_meta( $customer_id , $meta_key , $meta_value , $unique = false ) {
	return add_metadata( 'customer' ,  $customer_id, $meta_key , $meta_value, $unique );
=======
function add_customer_meta($customer_id, $meta_key, $meta_value, $unique = false) {
	return add_metadata('customer', $customer_id, $meta_key, $meta_value, $unique);
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
}

/**
 * Remove metadata matching criteria from a customer.
 *
 * You can match based on the key, or key and value. Removing based on key and
 * value, will keep from removing duplicate metadata with the same key. It also
 * allows removing all metadata matching key, if needed.
 
 * This meta data function mirrors a corresponding wordpress post meta function.
 *
 * @since 3.9.0
<<<<<<< HEAD
=======
 * @uses $wpdb
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
 *
 * @param int $customer_id customer ID
 * @param string $meta_key Metadata name.
 * @param mixed $meta_value Optional. Metadata value.
 * @return bool False for failure. True for success.
 */
<<<<<<< HEAD
function delete_customer_meta( $customer_id , $meta_key , $meta_value = '' ) {
	return delete_metadata( 'customer' ,  $customer_id , $meta_key , $meta_value );
=======
function delete_customer_meta($customer_id, $meta_key, $meta_value = '') {
	return delete_metadata('customer', $customer_id, $meta_key, $meta_value);
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
}

/**
 * Retrieve customer meta field for a customer.
 *
 * @since 3.9.0
<<<<<<< HEAD
=======
 * @uses $wpdb
 * @link http://codex.wordpress.org/Function_Reference/get_customer_meta
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
 *
 * @param int $customer_id customer ID.
 * @param string $key Optional. The meta key to retrieve. By default, returns data for all keys.
 * @param bool $single Whether to return a single value.
 * @return mixed Will be an array if $single is false. Will be value of meta data field if $single
 *  is true.
 */
<<<<<<< HEAD
function get_customer_meta( $customer_id , $key = '' , $single = false ) {
	return get_metadata( 'customer' , $customer_id , $key, $single );
=======
function get_customer_meta($customer_id, $key = '', $single = false) {
	return get_metadata('customer', $customer_id, $key, $single);
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
}

/**
 *  Determine if a meta key is set for a given customer.
 *
 * @since 3.9.0
<<<<<<< HEAD
=======
 * @uses $wpdb
 * @link http://codex.wordpress.org/Function_Reference/get_customer_meta
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
 *
 * @param int $customer_id customer ID.
 * @param string $key Optional. The meta key to retrieve. By default, returns data for all keys.
* @return boolean true of the key is set, false if not.
 *  is true.
 */
<<<<<<< HEAD
function customer_meta_exists( $customer_id , $meta_key ) {
	return metadata_exists( 'customer' , $customer_id , $meta_key );
}

=======
function customer_meta_exists($customer_id, $meta_key ) {
	return metadata_exists( 'customer', $customer_id, $meta_key );

}




>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
/**
 * Update customer meta field based on customer ID.
 *
 * Use the $prev_value parameter to differentiate between meta fields with the
 * same key and customer ID.
 *
 * If the meta field for the customer does not exist, it will be added.

 * This meta data function mirrors a corresponding wordpress post meta function.
 *
 * @since 3.9.0
<<<<<<< HEAD
=======
 * @uses $wpdb
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
 *
 * @param int $customer_id $customer ID.
 * @param string $meta_key Metadata key.
 * @param mixed $meta_value Metadata value.
 * @param mixed $prev_value Optional. Previous value to check before removing.
 * @return bool False on failure, true if success.
 */
<<<<<<< HEAD
function update_customer_meta( $customer_id , $meta_key , $meta_value , $prev_value = '' ) {
	return update_metadata( 'customer' , $customer_id , $meta_key , $meta_value , $prev_value );
=======
function update_customer_meta($customer_id, $meta_key, $meta_value, $prev_value = '') {
	return update_metadata('customer', $customer_id, $meta_key, $meta_value, $prev_value);
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
}

/**
 * Delete everything from customer meta matching meta key.
 * This meta data function mirrors a corresponding wordpress post meta function.
 * @since 3.9.0
<<<<<<< HEAD
=======
 * @uses $wpdb
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
 *
 * @param string $customer_meta_key Key to search for when deleting.
 * @return bool Whether the customer meta key was deleted from the database
 */
<<<<<<< HEAD
function delete_customer_meta_by_key( $customer_meta_key ) {
	return delete_metadata( 'customer' , null , $customer_meta_key , '' , true );
=======
function delete_customer_meta_by_key($customer_meta_key) {
	return delete_metadata( 'customer', null, $customer_meta_key, '', true );
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
}

/**
 * Retrieve customer meta fields, based on customer ID.
 *
 * The customer meta fields are retrieved from the cache where possible,
 * so the function is optimized to be called more than once.
 * This meta data function mirrors a corresponding wordpress post meta function.
 *
 * @since 3.9.0
 *
 * @param int $customer_id customer ID.
 * @return array
 */
function get_customer_custom( $customer_id = 0 ) {
	$customer_id = absint( $customer_id );
<<<<<<< HEAD
=======
	if ( ! $customer_id )
		$customer_id = get_the_ID();

>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
	return get_customer_meta( $customer_id );
}

/**
 * Retrieve meta field names for a customer.
 *
 * If there are no meta fields, then nothing (null) will be returned.
 * This meta data function mirrors a corresponding wordpress post meta function.
 *
 * @since 3.9.0
 *
 * @param int $customer_id customer ID
 * @return array|null Either array of the keys, or null if keys could not be retrieved.
 */
function get_customer_custom_keys( $customer_id = 0 ) {
	$custom = get_customer_custom( $customer_id );

<<<<<<< HEAD
	if ( !is_array( $custom ) )
		return;

	if ( $keys = array_keys( $custom ) )
=======
	if ( !is_array($custom) )
		return;

	if ( $keys = array_keys($custom) )
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
		return $keys;
}

/**
 * Retrieve values for a custom customer field.
 *
 * The parameters must not be considered optional. All of the customer meta fields
 * will be retrieved and only the meta field key values returned.
 * This meta data function mirrors a corresponding wordpress post meta function.
 *
 * @since 3.9.0
 *
 * @param string $key Meta field key.
 * @param int $customer_id customer ID
 * @return array Meta field values.
 */
function get_customer_custom_values( $key = '', $customer_id = 0 ) {
	if ( !$key )
		return null;

<<<<<<< HEAD
	$custom = get_customer_custom( $customer_id );

	return isset( $custom[$key] ) ? $custom[$key] : null;
=======
	$custom = get_customer_custom($customer_id);

	return isset($custom[$key]) ? $custom[$key] : null;
>>>>>>> d78c331f7eafb2d24a7bad174f842a09ed2fae69
}



/**
 * Get meta timestamp by meta ID
 *
 * @since 3.9.0
 *
 * @param string $meta_type Type of object metadata is for (e.g., variation. cart, etc)
 	* @param int $meta_id ID for a specific meta row
 * @return object Meta object or false.
 */
function get_customer_meta_timestamp( $customer_id, $meta_key  ) {
	return wpsc_get_metadata_timestamp( 'customer', $customer_id, $meta_key );
}




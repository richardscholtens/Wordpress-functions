<?php
    function save_post_meta_per_row($pid, $key, $value_array) {
        // A functions that saves post meta per row without creating duplicates in the database.

        // Checks if the post meta already exsists. If so, it wil be deleted and new rows will be introduced.
        if ( get_post_meta( $pid, $key, false ) ) {
            delete_post_meta( $pid, $key );
            foreach ( $value as $v ) {
                echo $v;
                add_post_meta( $pid, $key, $v );
            }
        }
        else {
            // If the post meta does not yet exsist it will add for every value a new row.
            foreach ( $value as $v ) {
                add_post_meta( $pid, $key, $v );
            }
        }
    }
?>

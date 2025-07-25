<?php
/*
Plugin Name: Kobo Highlights Importer
Description: Upload a JSON file exported from your Kobo eReader and import highlights as custom posts.
Version: 1.0
Author: Muhammad + Copilot
*/

// ✅ Register custom post type
add_action('init', 'register_kobo_highlight_type');

function register_kobo_highlight_type() {
    register_post_type('kobo_highlight', array(
        'labels' => array(
            'name' => 'Kobo Highlights',
            'singular_name' => 'Kobo Highlight'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book',
        'taxonomies' => array('category', 'post_tag')
    ));
}

// 🧭 Add import submenu under Kobo Highlights
add_action('admin_menu', 'kobo_import_menu');

function kobo_import_menu() {
    add_submenu_page(
        'edit.php?post_type=kobo_highlight',
        'Import Highlights',
        'Import Highlights',
        'manage_options',
        'kobo-import',
        'kobo_import_page'
    );
}

// 📥 Handle file upload and import highlights
function kobo_import_page() {
    ?>
    <div class="wrap">
        <h2>Upload Kobo Highlights (JSON)</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="kobo_file" accept=".json" required />
            <?php submit_button('Upload and Import'); ?>
        </form>
    </div>
    <?php

    if ($_FILES && isset($_FILES['kobo_file'])) {
        $file = $_FILES['kobo_file']['tmp_name'];
        if (file_exists($file)) {
            $json = file_get_contents($file);
            $highlights = json_decode($json, true);




  $book = sanitize_text_field($highlights['title'] ?? 'Unknown Book');



  
 if (json_last_error() === JSON_ERROR_NONE) {



    $book = sanitize_text_field($highlights['title'] ?? 'Unknown Book');
    $author = sanitize_text_field($highlights['author'] ?? 'Unknown Author');
$time = sanitize_text_field($highlights['time'] ?? 'Unknown Time'); 

      wp_insert_post(array(
            'post_type' => 'kobo_highlight',
             'category' => 'kobo_highlight',
            'post_title' => $book,
            'post_content' => $book . "<br><br>" . $author . "<br><br>",
            'post_status' => 'publish'
        ));  



        
    $all_highlights = '';
    foreach ($highlights['entries'] as $item) {
        $chapter = sanitize_text_field($item['chapter'] ?? 'chapter not found');
        $text = sanitize_text_field($item['text'] ?? 'no text found');
        $note = sanitize_text_field($item['note'] ?? '');






$page = sanitize_text_field($item['page'] ?? 'unknown page');





       if (empty($note)) {

           $note_publish =  "";

        } else{

                    $note_publish =  "User Comment :   " . $note;
        }





        if ($text) {
            $all_highlights .= "<br><br>" . "<b>" . $chapter . "</b>" . "    - Page :   " . $page . "<br><br>" . $text . "<br><br>" . $note_publish . "<br><br>";
        }
    }

    // Check if a post with this book title already exists
    $existing_post = get_page_by_title($book, OBJECT, 'kobo_highlight');
    if ($existing_post) {
        // Append to existing post content
        $updated_content = $existing_post->post_content . $all_highlights;
        wp_update_post(array(
            'ID' => $existing_post->ID,
            'post_content' => $updated_content
        ));
    } else {
        // Create new post
        wp_insert_post(array(
            'post_type' => 'kobo_highlight',
            'post_title' => $book,
            'category' => 'kobo_highlight',
            'post_content' => $all_highlights,
            'post_status' => 'publish'
        ));
    }
    echo "<p style='color:green;'>Highlights imported and appended successfully!</p>";

}
            } else {
                echo "<p style='color:red;'>Invalid JSON format.</p>";
            }
        } else {
            echo "<p style='color:red;'>File upload failed.</p>";
        }

        if (!empty($all_highlights)) {
    // ...create or update post...
} else {
    echo "<p style='color:red;'>No highlights found in the file.</p>";
}
    }


?>


<?php
function ns_progress_bar_settings_page() {
    add_options_page(
        'NS Progress Bar Settings',
        'NS Progress Bar',
        'manage_options',
        'ns-progress-bar',
        'ns_progress_bar_options_page'
    );
}
add_action( 'admin_menu', 'ns_progress_bar_settings_page' );

function ns_progress_bar_options_page() {
    ?>
    <div class="wrap">
        <h1>NS Progress Bar Settings</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields( 'ns_progress_bar_options' );
                do_settings_sections( 'ns-progress-bar' );
                submit_button();
            ?>
        </form>
    </div>
    <?php
}

function ns_progress_bar_settings_init() {
    register_setting( 'ns_progress_bar_options', 'ns_progress_bar_options' );

    add_settings_section(
        'ns_progress_bar_section',
        'Progress Bar Settings',
        'ns_progress_bar_section_cb',
        'ns-progress-bar'
    );

    add_settings_field(
        'ns_progress_bar_color',
        'Progress Bar Color',
        'ns_progress_bar_color_cb',
        'ns-progress-bar',
        'ns_progress_bar_section'
    );
}
add_action( 'admin_init', 'ns_progress_bar_settings_init' );

function ns_progress_bar_section_cb() {
    echo 'Customize the appearance of the progress bar';
}

function ns_progress_bar_color_cb() {
    $options = get_option( 'ns_progress_bar_options' );
    ?>
    <input type="text" name="ns_progress_bar_options[ns_progress_bar_color]" value="<?php echo $options['ns_progress_bar_color']; ?>">
    <?php
}

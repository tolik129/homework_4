<div class="wrap">
    <h2>arzamath_17th</h2>
    <form method="post" action="options.php">


        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="setting_a">Поле 1</label></th>
                <td><input type="text" name="setting_a" id="setting_a" value="<?php echo get_option('setting_a'); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="setting_b">Поле 2</label></th>
                <td>
                    <select>
                        <option name="setting_b" id="setting_b" value="<?php echo get_option('setting_b'); ?>">Пункт 1</option>
                        <option name="setting_b" id="setting_b" value="<?php echo get_option('setting_b'); ?>">Пункт 2</option>
                    </select>
            </tr>
        </table>

        <?php @submit_button(); ?>
    </form>
</div>
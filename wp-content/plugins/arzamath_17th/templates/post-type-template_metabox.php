<table> 
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Введіть текст</label>
        </th>
        <td>
            <input type="text" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_b">Виберіть тип</label>
        </th>
        <td>


            <select multiple >
                <option>пункт 1</option>
                <option>пункт 2</option>
                <option>пункт 3</option>
                <option>пункт 4</option>
            </select>


        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_c">Завантажіть зображення</label>
        </th>
        <td>

            <input type="file" name="f">
            <input type="submit" value="<?php echo @get_post_meta($post->ID, 'meta_c', true); ?>">

        </td>
    </tr>                
</table>

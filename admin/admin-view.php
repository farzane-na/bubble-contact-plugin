<?php 
if(isset($_POST['hidden-input'])){
    $bubble_contact_value=[
        "bubble_1"=> array($_POST["bubble-contact-icon_1"],$_POST["bubble-contact-link_1"],$_POST["bubble-contact-color_1"]),
        "bubble_2"=> array($_POST["bubble-contact-icon_2"],$_POST["bubble-contact-link_2"],$_POST["bubble-contact-color_2"]),
        "bubble_3"=> array($_POST["bubble-contact-icon_3"],$_POST["bubble-contact-link_3"],$_POST["bubble-contact-color_3"]),
        "bubble_4"=> array($_POST["bubble-contact-icon_4"],$_POST["bubble-contact-link_4"],$_POST["bubble-contact-color_4"]),
    ];
    update_option( "bubble-contact-option", $bubble_contact_value );

    echo "<div class='notice notice-success is-dismissible'><p>".__("Changes saved successfully.","bubble-contact")."</p></div>";
};

$get_bubble_contact_value=get_option( "bubble-contact-option", []);

?>
<h1><?= __("Bubble Contact","bubble-contact"); ?></h1>
<form action="" method="post">
    <input type="hidden" name="hidden-input">
    <table class="form-table">
        <tbody>

            <!-- start first bubble contact -->
            <tr>
                <th>
                    <label for="bubble-contact-icon_1">
                        <?= __("class icon from <a href='https://icons.getbootstrap.com/'> bootstrap icon </a> " , "bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="text" name="bubble-contact-icon_1" id="bubble-contact-icon_1" value="<?= $get_bubble_contact_value["bubble_1"][0] ? $get_bubble_contact_value["bubble_1"][0] :  '' ?>">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="bubble-contact-link_1">
                        <?= __("add link","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="url" placeholder="https://example.com" name="bubble-contact-link_1" id="bubble-contact-link_1" value="<?= $get_bubble_contact_value["bubble_1"][1] ? $get_bubble_contact_value["bubble_1"][1] :  '' ?>">
                </td>
            </tr>
            <tr class="last-row">
                <th>
                    <label for="bubble-contact-color_1">
                        <?= __("choose color","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="input" class="bubble-contact-color" name="bubble-contact-color_1" id="bubble-contact-color_1" value="<?= $get_bubble_contact_value["bubble_1"][2] ? $get_bubble_contact_value["bubble_1"][2] :  '' ?>">
                </td>
            </tr>
            <!-- fininsh first bubble contact -->

            
            <!-- start second bubble contact -->
            <tr>
                <th>
                    <label for="bubble-contact-icon_2">
                        <?= __("class icon from <a href='https://icons.getbootstrap.com/'> bootstrap icon </a> " , "bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="text" name="bubble-contact-icon_2" id="bubble-contact-icon_2" value="<?= $get_bubble_contact_value["bubble_2"][0] ? $get_bubble_contact_value["bubble_2"][0] :  '' ?>">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="bubble-contact-link_2">
                        <?= __("add link","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="url" placeholder="https://example.com" name="bubble-contact-link_2" id="bubble-contact-link_2" value="<?= $get_bubble_contact_value["bubble_2"][1] ? $get_bubble_contact_value["bubble_2"][1] :  '' ?>">
                </td>
            </tr>
            <tr class="last-row">
                <th>
                    <label for="bubble-contact-color_2">
                        <?= __("choose color","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="input" class="bubble-contact-color" name="bubble-contact-color_2" id="bubble-contact-color_2" value="<?= $get_bubble_contact_value["bubble_2"][2] ? $get_bubble_contact_value["bubble_2"][2] :  '' ?>">
                </td>
            </tr>
            <!-- fininsh second bubble contact -->

            <!-- start third bubble contact -->
            <tr>
                <th>
                    <label for="bubble-contact-icon_3">
                        <?= __("class icon from <a href='https://icons.getbootstrap.com/'> bootstrap icon </a> " , "bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="text" name="bubble-contact-icon_3" id="bubble-contact-icon_3" value="<?= $get_bubble_contact_value["bubble_3"][0] ? $get_bubble_contact_value["bubble_3"][0] :  '' ?>">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="bubble-contact-link_3">
                        <?= __("add link","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="url" placeholder="https://example.com" name="bubble-contact-link_3" id="bubble-contact-link_3" value="<?= $get_bubble_contact_value["bubble_3"][1] ? $get_bubble_contact_value["bubble_3"][1] :  '' ?>">
                </td>
            </tr>
            <tr class="last-row">
                <th>
                    <label for="bubble-contact-color_3">
                        <?= __("choose color","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="input" class="bubble-contact-color" name="bubble-contact-color_3" id="bubble-contact-color_3" value="<?= $get_bubble_contact_value["bubble_3"][2] ? $get_bubble_contact_value["bubble_3"][2] :  '' ?>">
                </td>
            </tr>
            <!-- fininsh third bubble contact -->

            <!-- start forth bubble contact -->
            <tr>
                <th>
                    <label for="bubble-contact-icon_4">
                        <?= __("class icon from <a href='https://icons.getbootstrap.com/'> bootstrap icon </a> " , "bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="text" name="bubble-contact-icon_4" id="bubble-contact-icon_4" value="<?= $get_bubble_contact_value["bubble_4"][0] ? $get_bubble_contact_value["bubble_4"][0] :  '' ?>">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="bubble-contact-link_4">
                        <?= __("add link","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="url" placeholder="https://example.com" name="bubble-contact-link_4" id="bubble-contact-link_4" value="<?= $get_bubble_contact_value["bubble_4"][1] ? $get_bubble_contact_value["bubble_4"][1] :  '' ?>">
                </td>
            </tr>
            <tr class="last-row">
                <th>
                    <label for="bubble-contact-color_4">
                        <?= __("choose color","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="input" class="bubble-contact-color" name="bubble-contact-color_4" id="bubble-contact-color_4" value="<?= $get_bubble_contact_value["bubble_4"][2] ? $get_bubble_contact_value["bubble_4"][2] :  '' ?>">
                </td>
            </tr>
            <!-- fininsh forth bubble contact -->


        </tbody>
    </table>
    <input type="submit" class="submit-button button button-primary" value="<?= __("save changes","bubble-contact") ?>">
</form>
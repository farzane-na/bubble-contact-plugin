<?php 
if(isset($_POST['hidden-input'])){
    $bubble_contact_value=[
        "bubble_1"=> array($_POST["bubble-contact-icon_1"],$_POST["bubble-contact-link_1"],$_POST["bubble-contact-color_1"]),
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
        </tbody>
    </table>
    <input type="submit" class="submit-button button button-primary" value="<?= __("save changes","bubble-contact") ?>">
</form>
<?php 



?>
<h1><?= __("Bubble Contact"); ?></h1>
<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr>
                <th>
                    <label for="bubble-contact-icon">
                        <?= __("class icon from <a href='https://icons.getbootstrap.com/'> bootstrap icon </a> " , "bubble-icon") ?>
                    </label>
                </th>
                <td>
                    <input type="text" name="bubble-contact-icon" id="bubble-contact-icon">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="bubble-contact-link">
                        <?= __("add link","bubble-icon") ?>
                    </label>
                </th>
                <td>
                    <input type="text" name="bubble-contact-link" id="bubble-contact-link">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="bubble-contact-color">
                        <?= __("choose ccolor","bubble-icon") ?>
                    </label>
                </th>
                <td>
                    <input type="color" class="bubble-contact-color" name="bubble-contact-color" id="bubble-contact-color">
                </td>
            </tr>
        </tbody>
    </table>
</form>
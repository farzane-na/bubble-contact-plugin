<?php 



?>
<h1><?= __("Bubble Contact","bubble-contact"); ?></h1>
<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr>
                <th>
                    <label for="bubble-contact-icon">
                        <?= __("class icon from <a href='https://icons.getbootstrap.com/'> bootstrap icon </a> " , "bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="text" name="bubble-contact-icon" id="bubble-contact-icon">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="bubble-contact-link">
                        <?= __("add link","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="url" placeholder="example.com" name="bubble-contact-link" id="bubble-contact-link">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="bubble-contact-color">
                        <?= __("choose color","bubble-contact") ?>
                    </label>
                </th>
                <td>
                    <input type="input" class="bubble-contact-color" name="bubble-contact-color" id="bubble-contact-color">
                </td>
            </tr>
        </tbody>
    </table>
</form>
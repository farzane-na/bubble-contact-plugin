<?php 
if(get_option( "bubble-contact-option" )){
    $geting_bubble_options=get_option( "bubble-contact-option",[] );
};


?>

<div class="bubble-contact">
        <ul class="bubble-contact_list">
            <li class="bubble-contact_item">
                <a href="<?= $geting_bubble_options["bubble_1"][1] ? $geting_bubble_options["bubble_1"][1] : '#' ?>" class="bubble-contact_link">
                    <i class="bi bi-<?= $geting_bubble_options["bubble_1"][0] ? $geting_bubble_options["bubble_1"][0] : 'telephone'  ?>" style="color:<?= $geting_bubble_options["bubble_1"][2] ? $geting_bubble_options["bubble_1"][2] : '#000' ?> !important;"></i>
                </a>
            </li>
            <li class="bubble-contact_item">
                <a href="<?= $geting_bubble_options["bubble_2"][1] ? $geting_bubble_options["bubble_2"][1] : '#' ?>" class="bubble-contact_link">
                    <i class="bi bi-<?= $geting_bubble_options["bubble_2"][0] ? $geting_bubble_options["bubble_2"][0] : 'telephone'  ?>" style="color:<?= $geting_bubble_options["bubble_2"][2] ? $geting_bubble_options["bubble_2"][2] : '#000' ?> !important;"></i>
                </a>
            </li>
            <li class="bubble-contact_item">
                <a href="<?= $geting_bubble_options["bubble_3"][1] ? $geting_bubble_options["bubble_3"][1] : '#' ?>" class="bubble-contact_link">
                    <i class="bi bi-<?= $geting_bubble_options["bubble_3"][0] ? $geting_bubble_options["bubble_3"][0] : 'telephone'  ?>" style="color:<?= $geting_bubble_options["bubble_3"][2] ? $geting_bubble_options["bubble_3"][2] : '#000' ?> !important;"></i>
                </a>
            </li>
            <li class="bubble-contact_item">
                <a href="<?= $geting_bubble_options["bubble_4"][1] ? $geting_bubble_options["bubble_4"][1] : '#' ?>" class="bubble-contact_link">
                    <i class="bi bi-<?= $geting_bubble_options["bubble_4"][0] ? $geting_bubble_options["bubble_4"][0] : 'telephone'  ?>" style="color:<?= $geting_bubble_options["bubble_4"][2] ? $geting_bubble_options["bubble_4"][2] : '#000' ?> !important;"></i>
                </a>
            </li>
        </ul>
        <div class="bubble-contact_btn">
            <svg class="bubble-contact_toggle-btn" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
            </svg>                        
        </div>
    </div>
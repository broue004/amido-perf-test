<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => '50f48bb9444ff',
        'title' => 'Team Members',
        'fields' =>
            array (
                0 =>
                    array (
                        'key' => 'field_4fce2556d6337',
                        'label' => 'Team Member Image',
                        'name' => 'team_member_image',
                        'type' => 'image',
                        'instructions' => 'The team member\'s image (460px x 460px)',
                        'required' => '1',
                        'save_format' => 'id',
                        'preview_size' => 'thumbnail',
                        'order_no' => '0',
                    ),
                1 =>
                    array (
                        'key' => 'field_4fce25b6bebd1',
                        'label' => 'Job Title',
                        'name' => 'job_title',
                        'type' => 'text',
                        'instructions' => 'The Job Title for the tag-line beneath the team member\'s name',
                        'required' => '0',
                        'default_value' => '',
                        'formatting' => 'html',
                        'order_no' => '1',
                    ),
                2 =>
                    array (
                        'label' => 'Team Member Sort Order',
                        'name' => 'team_member_sort_order',
                        'type' => 'text',
                        'instructions' => 'The place in the list the team member should appear',
                        'required' => '1',
                        'default_value' => '0',
                        'formatting' => 'html',
                        'key' => 'field_4fce359183220',
                        'order_no' => '2',
                    ),
                3 =>
                    array (
                        'label' => 'Team Member Twitter',
                        'name' => 'team_member_twitter',
                        'type' => 'text',
                        'instructions' => 'Link to the twitter feed',
                        'required' => '0',
                        'default_value' => 'https://twitter.com/weareamido',
                        'formatting' => 'html',
                        'key' => 'field_4fce359183221',
                        'order_no' => '3',
                    ),
                4 =>
                    array (
                        'label' => 'Team Member LinkedIn',
                        'name' => 'team_member_linkedin',
                        'type' => 'text',
                        'instructions' => 'Link to the member\'s linkedin',
                        'required' => '0',
                        'default_value' => 'https://www.linkedin.com/company/amido',
                        'formatting' => 'html',
                        'key' => 'field_4fce359183222',
                        'order_no' => '4',
                    ),
                5 =>
                    array (
                        'label' => 'Team Member Email',
                        'name' => 'team_member_email',
                        'type' => 'text',
                        'instructions' => 'The team member\'s email address',
                        'required' => '0',
                        'default_value' => '',
                        'formatting' => 'none',
                        'key' => 'field_4fce359183223',
                        'order_no' => '5',
                    ),
                6 =>
                    array (
                        'label' => 'Team Member City',
                        'name' => 'team_member_city',
                        'type' => 'text',
                        'instructions' => 'The team member\'s home city - useful for the contact page',
                        'required' => '0',
                        'default_value' => '',
                        'formatting' => 'html',
                        'key' => 'field_4fce359183224',
                        'order_no' => '5',
                    ),
            ),
        'location' =>
            array (
                'rules' =>
                    array (
                        0 =>
                            array (
                                'param' => 'post_type',
                                'operator' => '==',
                                'value' => 'team',
                                'order_no' => '0',
                            ),
                    ),
                'allorany' => 'all',
            ),
        'options' =>
            array (
                'position' => 'normal',
                'layout' => 'default',
                'hide_on_screen' =>
                    array (
                    ),
            ),
        'menu_order' => 0,
    ));
}

?>
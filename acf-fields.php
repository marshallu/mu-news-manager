<?php
add_action( 'acf/init', 'mu_news_init_acf_fields' );

function mu_news_init_acf_fields() {
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5f58ceccc6aec',
			'title' => 'Marshall PR Manager',
			'fields' => array(
				array(
					'key' => 'field_5f58cf61e499d',
					'label' => 'Contact Info',
					'name' => 'contact_info',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5f58cf6ce499e',
					'label' => 'Contact Email',
					'name' => 'contact_email',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5f58ceeee499a',
					'label' => 'Force this article on the homepage',
					'name' => 'force_field',
					'type' => 'true_false',
					'instructions' => 'If set to true this news item will show up at the top of news listings on the university homepage until the expire time is up.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_617bfa0fd7572',
					'label' => 'Homepage Breaking News',
					'name' => 'homepage_breaking_news',
					'type' => 'true_false',
					'instructions' => 'If set to true this news item will be posted to the top of the university homepage until the expire time is up.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_617bfe4f0718a',
					'label' => 'Alert Type',
					'name' => 'homepage_breaking_news_type',
					'type' => 'select',
					'instructions' => 'Items marked as news will only appear on the university homepage. Items marked alert will appear at the top of all pages on the university website network.',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_617bfa0fd7572',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'news' => 'News',
						'alert' => 'Alert',
					),
					'default_value' => 'alert',
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_5f58ced3e4999',
					'label' => 'Expire Date',
					'name' => 'expire_field',
					'type' => 'date_time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5f58ceeee499a',
								'operator' => '==',
								'value' => '1',
							),
						),
						array(
							array(
								'field' => 'field_617bfa0fd7572',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'm/d/Y g:i a',
					'return_format' => 'm/d/Y g:i a',
					'first_day' => 1,
				),
				array(
					'key' => 'field_61d704629805e',
					'label' => 'Show Read More Button',
					'name' => 'homepage_breaking_news_show_button',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_617bfa0fd7572',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_5f58cf01e499b',
					'label' => 'Link to external URL',
					'name' => 'url_field',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
				),
				array(
					'key' => 'field_61d327fbc81bf',
					'label' => 'Links',
					'name' => 'mu_news_links',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => '',
					'sub_fields' => array(
						array(
							'key' => 'field_61d3280ac81c0',
							'label' => 'Type of Link',
							'name' => 'type_of_link',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'basic' => 'Basic',
								'video' => 'Video',
								'photos' => 'Photo(s) or Photo Gallery',
							),
							'default_value' => 'basic',
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'return_format' => 'value',
							'ajax' => 0,
							'placeholder' => '',
						),
						array(
							'key' => 'field_61d3282fc81c1',
							'label' => 'Link Title',
							'name' => 'link_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_61d32839c81c2',
							'label' => 'Link URL',
							'name' => 'link_url',
							'type' => 'url',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
					),
				),
			),
			'menu_order' => -25,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
		));

		endif;
}

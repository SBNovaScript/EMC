<?php

function customizer_textarea_sanitizer( $text ){
  return esc_textarea( $text );
}

function emc_customizer( $wp_customize ){


/** Costomize text */


  /*Customize text and links for Emerge, Innovate, and Inspire */

	//Section 
	$wp_customize->add_section('mainButtons', array(
	  'title'	=> __('Sub Page Header', 'EMC_Theme'),
	  'priority'    => 1
	) );
  
    // Settings
  $wp_customize->add_setting( 'EmergeText', array(
	'default'  =>__('EMERGE', 'EMC_Theme')
	) );
	$wp_customize->add_setting( 'EmergeLink', array(
	'default'  =>__('http://www.google.com', 'EMC_Theme')
	) );
	$wp_customize->add_setting( 'InnovateText', array(
	'default'  =>__('INNOVATE', 'EMC_Theme')
	) );
	$wp_customize->add_setting( 'InnovateLink', array(
	'default'  =>__('http://www.google.com', 'EMC_Theme')
	) );
	$wp_customize->add_setting( 'InspireText', array(
	'default'  =>__('INNOVATE', 'EMC_Theme')
	) );
	$wp_customize->add_setting( 'InspireLink', array(
	'default'  =>__('http://www.google.com', 'EMC_Theme')
	) );
	$wp_customize->add_setting( 'HeaderTitle', array(
	'default'  =>__('EMERGENT MEDIA CENTER', 'EMC_Theme')
	) );
  
	//Controls
	//Emerge
	$wp_customize->add_control( 'EmergeText', array(
    'label'    => __( 'Emerge Text', 'EMC_Theme' ),
    'section'  => 'mainButtons',
    'settings' => 'EmergeText',
    'type'     => 'textarea'
  ) );
  $wp_customize->add_control( 'EmergeLink', array(
    'label'    => __( 'Emerge Link', 'EMC_Theme' ),
    'section'  => 'mainButtons',
    'settings' => 'EmergeLink',
    'type'     => 'url'
  ) );
  //Innovate
  $wp_customize->add_control( 'InnovateText', array(
    'label'    => __( 'Innovate Text', 'EMC_Theme' ),
    'section'  => 'mainButtons',
    'settings' => 'InnovateText',
    'type'     => 'textarea'
  ) );
  $wp_customize->add_control( 'InnovateLink', array(
    'label'    => __( 'Innovate Link', 'EMC_Theme' ),
    'section'  => 'mainButtons',
    'settings' => 'InnovateLink',
    'type'     => 'url'
  ) );
  
  //Inspire
  $wp_customize->add_control( 'InspireText', array(
    'label'    => __( 'Inspire Text', 'EMC_Theme' ),
    'section'  => 'mainButtons',
    'settings' => 'InspireText',
    'type'     => 'textarea'
  ) );
  $wp_customize->add_control( 'InspireLink', array(
    'label'    => __( 'Inspire Link', 'EMC_Theme' ),
    'section'  => 'mainButtons',
    'settings' => 'InspireLink',
    'type'     => 'url'
  ) );
  
  
  //Title
  $wp_customize->add_control( 'HeaderTitle', array(
    'label'    => __( 'Header Title', 'EMC_Theme' ),
    'section'  => 'mainButtons',
    'settings' => 'HeaderTitle',
    'type'     => 'textarea'
  ) );
  
  /*Costomise Text in home page footer*/
  
   // Section
  $wp_customize->add_section( 'footerText', array(
    'title'      => __('Footer Text', 'EMC_Theme'),
    'priority'   => 1
  ) );

  //EDIT CONTACT US TEXT IN FOOTER
  // Setting
  $wp_customize->add_setting( 'contactText', array(
    'default' => __(
		'<a href="#">Ketri Tracy,</a> 
		Busness devlopment manager, 
		Emergent Media Center,
        Champlain College<br> 
		802-856-8438<br>
		<a href ="#"> ktracy@champlain.edu</a>', 
		'EMC_Theme')
  ) );
  
    //control
 $wp_customize->add_control( 'contactText', array(
    'label'    => __( 'Contact Text', 'EMC_Theme' ),
    'section'  => 'footerText',
    'settings' => 'contactText',
    'type'     => 'textarea'
  ) );
  
  //EDIT PARTNERSHIP TEXT IN FOOTER
  // Setting
  $wp_customize->add_setting( 'partnerText', array(
    'default' => __('
	  <a href="#">Test test test test def</a>
      <a href="#">Test test test test rff</a>
      <a href="#">Test test test test test</a>
      <a href="#">Test test test test stuff</a>',

	  'EMC_Theme')
  ) );


   $wp_customize->add_control( 'partnerText', array(
    'label'    => __( 'Partnership Text', 'EMC_Theme' ),
	 'section'  => 'footerText',
    'settings' => 'partnerText',
    'type'     => 'textarea'
  ) );
  
 
}

/**
 * Used by hook: 'customize_preview_init'
 * 
 * @see add_action('customize_preview_init',$func)
 */
 
 add_action( 'customize_preview_init', 'cd_costomizer' );
function cd_costomizer(){
	wp_enqueue_script( 
		  'mytheme-themecustomizer',			//Give the script an ID
		  get_template_directory_uri().'/js/costomize-preview.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',						//Define a version (optional) 
		  true						//Put script in footer?
	);
}


add_action( 'customize_register', 'emc_customizer' );

?>
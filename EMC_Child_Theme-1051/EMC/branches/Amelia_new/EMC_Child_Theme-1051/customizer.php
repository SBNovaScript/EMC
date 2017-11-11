<?php

function customizer_textarea_sanitizer( $text ){
  return esc_textarea( $text );
}

function emc_customizer( $wp_customize ){


/** Costomize text on home page */
  // Section
  $wp_customize->add_section( 'homeText', array(
    'title'      => __('Home Page Text', 'EMC_Theme'),
    'priority'   => 1
  ) );
  
  

  // Setting
  $wp_customize->add_setting( 'tagline1', array(
    'default' => __('Great tagline for EMC goes here', 'EMC_Theme')
  ) );
  
  // Setting
  $wp_customize->add_setting( 'tagline2', array(
    'default' => __('Another great tag line for the EMC', 'EMC_Theme'),
    'transport'   => 'postMessage'

  ) );
  
  

  
  // Control
  $wp_customize->add_control( 'tagline1', array(
    'label'    => __( 'Tagline 1', 'EMC_Theme' ),
    'section'  => 'homeText',
    'settings' => 'tagline1',
    'type'     => 'text'
  ) );

   $wp_customize->add_control( 'tagline2', array(
    'label'    => __( 'Tagline 2', 'EMC_Theme' ),
    'section'  => 'homeText',
    'settings' => 'tagline2',
    'type'     => 'text'
  ) );
  
  
  
  /*Costomise Text in projects */
  
  //Section
  $wp_customize->add_section( 'projectText', array(
    'title'      => __('Project Text', 'EMC_Theme'),
    'priority'   => 1
  ) );
  
  //Settings for descriptions
  $wp_customize->add_setting( 'project1', array(
    'default' => __('Example text for this project.', 'EMC_Theme')
  ) );
  
  $wp_customize->add_setting( 'project2', array(
    'default' => __('Example text for this project.', 'EMC_Theme')
  ) );
  
  $wp_customize->add_setting( 'project3', array(
    'default' => __('Example text for this project.', 'EMC_Theme')
  ) );
  
  //Settings for titles
  $wp_customize->add_setting( 'project1Title', array(
    'default' => __('Title 1', 'EMC_Theme')
  ) );
  
  $wp_customize->add_setting( 'project2Title', array(
    'default' => __('Title 2', 'EMC_Theme')
  ) );
  
  $wp_customize->add_setting( 'project3Title', array(
    'default' => __('Title 3', 'EMC_Theme')
  ) );
  
  //Settings for Dates
  
  $wp_customize->add_setting( 'project1Date', array(
    'default' => __('2017', 'EMC_Theme')
  ) );
  
  $wp_customize->add_setting( 'project2Date', array(
    'default' => __('2018', 'EMC_Theme')
  ) );
  
  $wp_customize->add_setting( 'project3Date', array(
    'default' => __('2019', 'EMC_Theme')
  ) );
  
  //Controls
  
  //Project 1
  $wp_customize->add_control( 'project1Title', array(
    'label'    => __( 'Project 1 Title', 'EMC_Theme' ),
    'section'  => 'projectText',
    'settings' => 'project1Title',
    'type'     => 'text'
  ) );
  $wp_customize->add_control( 'project1Date', array(
    'label'    => __( 'Project 1 Date', 'EMC_Theme' ),
    'section'  => 'projectText',
    'settings' => 'project1Date',
    'type'     => 'text'
  ) );
  $wp_customize->add_control( 'project1', array(
    'label'    => __( 'Project 1 Description', 'EMC_Theme' ),
    'section'  => 'projectText',
    'settings' => 'project1',
    'type'     => 'text'
  ) );
  
  
  
  
  //Project 2
  $wp_customize->add_control( 'project2Title', array(
    'label'    => __( 'Project 2 Title', 'EMC_Theme' ),
    'section'  => 'projectText',
    'settings' => 'project2Title',
    'type'     => 'text'
  ) );
  $wp_customize->add_control( 'project2Date', array(
    'label'    => __( 'Project 2 Date', 'EMC_Theme' ),
    'section'  => 'projectText',
    'settings' => 'project2Date',
    'type'     => 'text'
  ) );
  $wp_customize->add_control( 'project2', array(
    'label'    => __( 'Project 2 Description', 'EMC_Theme' ),
    'section'  => 'projectText',
    'settings' => 'project2',
    'type'     => 'text'
  ) );
  
  
  
  
  
  //Project 3
  $wp_customize->add_control( 'project3Title', array(
    'label'    => __( 'Project 3 Title', 'EMC_Theme' ),
    'section'  => 'projectText',
    'settings' => 'project3Title',
    'type'     => 'text'
  ) );
  $wp_customize->add_control( 'project3Date', array(
    'label'    => __( 'Project 3 Date', 'EMC_Theme' ),
    'section'  => 'projectText',
    'settings' => 'project3Date',
    'type'     => 'text'
  ) );
  $wp_customize->add_control( 'project3', array(
    'label'    => __( 'Project 3 Description', 'EMC_Theme' ),
    'section'  => 'projectText',
    'settings' => 'project3',
    'type'     => 'text'
  ) );
  
  
  
  
  
  /*Costomise Text in footer */
  
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
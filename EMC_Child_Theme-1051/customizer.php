<?php

function customizer_textarea_sanitizer( $text ){
  return esc_textarea( $text );
}

function emc_customizer( $wp_customize ){


/** Costomize text on home page */
  // Section
  $wp_customize->add_section( 'homeText', array(
    'title'      => __('Home Page Text', 'emc_amelia'),
    'priority'   => 1
  ) );

  // Setting
  $wp_customize->add_setting( 'tagline1', array(
    'default' => __('Great tagline for EMC goes here', 'emc_amelia')
  ) );
  
  // Setting
  $wp_customize->add_setting( 'tagline2', array(
    'default' => __('Another great tag line for the EMC', 'emc_amelia')
  ) );
  
  $wp_customize->add_setting( 'tagline3', array(
    'default' => __('This is a test setting.', 'emc_steven')
  ) );

  
  // Control
  $wp_customize->add_control( 'tagline1', array(
    'label'    => __( 'Tagline 1', 'emc_amelia' ),
    'section'  => 'homeText',
    'settings' => 'tagline1',
    'type'     => 'text'
  ) );

   $wp_customize->add_control( 'tagline2', array(
    'label'    => __( 'Tagline 2', 'emc_amelia' ),
    'section'  => 'homeText',
    'settings' => 'tagline2',
    'type'     => 'text'
  ) );
  
  $wp_customize->add_control( 'tagline3', array(
    'label'    => __( 'Tagline 2', 'emc_steven' ),
    'section'  => 'homeText',
    'settings' => 'tagline3',
    'type'     => 'text'
  ) );
  
  
  /*Costomise Text in footer */
  
   // Section
  $wp_customize->add_section( 'footerText', array(
    'title'      => __('Footer Text', 'emc_amelia'),
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
		'emc_amelia')
  ) );
  
    //control
 $wp_customize->add_control( 'contactText', array(
    'label'    => __( 'Contact Text', 'emc_amelia' ),
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

	  'emc_amelia')
  ) );


   $wp_customize->add_control( 'partnerText', array(
    'label'    => __( 'Partnership Text', 'emc_amelia' ),
	 'section'  => 'footerText',
    'settings' => 'partnerText',
    'type'     => 'textarea'
  ) );
  
 
}

add_action( 'customize_register', 'emc_customizer' );

?>
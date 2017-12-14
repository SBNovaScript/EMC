# EMC  
This is the repo for the beautiful fully modular new Emergent Media Center website. The Emergent Media Center is a offshoot of Champlain College, and all designers and developers are paid students.  

This project uses ACF to allow the user to re-arrange and add content to the dev created blocks. It is a child theme of the 2017 wordpress theme, but shares very little with its parent at this point. 

Developers: Amelia Payne, Steven Baumann
Designer: Pete Moore

http://mainsitetest.emergentmediacenter.com/

This is the GitHub EMC Website repository. All theme files can be found under the main "EMC_Child_Theme-1051" folder. 

#### Main template-parts:  
Front-Page - Defines the static front page and uses a loop to pull content from /template-parts/page. Also includes the header and footer

Page - Defines all other pages on site. Almost identical to front page. If you add something to either page.php or front-page.php make sure both have it in the code. 

Customizer - This defines the hooks that let you change content in the customizer. It is not the same as ACF. 

 Style.css - Defines all the styles for the site and is the most important file here. Includes styles from the parent theme. 

footer - Defines the style for the footer. Content can be changed in customizer 
header - Defines all the stuff at the top of the website and includes the custom header and the navigation. 

#### ACF-Exports
This folder contains all our ACF exports. When starting work make sure to check the log file and inport the latest .json file. When leaving export your file here and update the log. 

#### js
This folder contains the javascript for a few cool visual effects. 

#### template-parts



#### /header
Includes the site branding and header image for the custom header on the home page. 

#### /navigation - information about the pull out menu.  
navigation-top - The navigation menu for the home page (includes pull out menu and the javascript to make it work) 
navigation -topSubpage - The navigation bar and pull out menu for subpages. 


#### /page:  

content -contactBlock - This is not included from ACF. Rather it is included as part of the footer on the home page. It is essentially identical to the pink-block. It should probably be moved to /footer at some point

content -fancyBullets - This element defines a nice looking bulleted list that drops down using jquery. Its jquery is defined in file. It is only included from within the flexible content in the picAndText block

content-fourProjects - Steven, fill this one in 

Content-gallery - A 3 column full screen image gallery. It can be defined with any number of rows. Included directly from page and front-page flexible content loops

content-linkedGrid - An extension of the gallery with added functionality. Allows you to add text that fades in on hover and link the items. Uses a repeater not the gallery field in ACF


content -midtext - A small block of text with a title, contents and spacing that can be placed between other elements. 

content-missionStatement - A block containing a title, text and three colored buttons. It is included as a option in the ACF layout. The styles of this block are also used to make the video block. 


content-picAndText - A block containing a large banner image and a flexible content field. It allows you to include fancy bullet points or a wysiwyg editor. 

content-pinkBlock.php - information about the about us/ our work section that contains a line of text and a changeable colored background.  
content-fourProjects - Steven, fill this one in 

(its invisible) 
Content-spacer - A empty div of variable height that can be placed between other objects to add spacing

content-twoImages - A block that contains two images with spacing and rounded corners. Which image should be larger is modifiable in the ACF page. 

Content-twoProjects - Steven, fill this one in

Content-video - An element that uses the styling of mission statement but has a video in it. 


content-wordbar.php Big text that floats left

Good luck and have fun. 
-Amelia


LEGACY DON'T USE 
content-projectGrid.php - information about the project grid, found on the projects page. 
Content-popOut.php A jenkey rotator that uste to top the projects page
Content-projects.php - Formerly made the 3 project layout on the home page 
Content-projectslider.php - Never got it working

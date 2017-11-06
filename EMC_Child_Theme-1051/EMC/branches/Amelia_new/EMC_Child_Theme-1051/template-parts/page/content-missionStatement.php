<!--TODO Fix the responcivity issues that occor with the links below about 1000px, also make the EMC name look better on smaller screens-->
<div class="missionDiv">
<div class="content">
<h1 class="title"><span class="blue">EMERGENT</span> <span class="lightBlue">MEDIA</span> <span class="red">CENTER</span></h1>

<h2 class="subtitle"><?php the_sub_field('mission_statement_subtitle'); ?></h2>

<p><?php the_sub_field('missionStatement_body_text'); ?></p>
<div class="links">
<p>
<a href="<?php the_sub_field('nav_link_one_location')?>" class="blue"><?php the_sub_field('nav_link_one_text') ?></a>

<a href="<?php the_sub_field('nav_link_two_location')?>" class="lightBlue"><?php the_sub_field('nav_link_two_text') ?></a>
<a href="<?php the_sub_field('nav_link_three_location')?>" class="red"><?php the_sub_field('nav_link_three_text') ?></a>
</p>
</div>
</div>
</div>


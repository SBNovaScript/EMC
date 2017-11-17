<!--TODO Fix the responcivity issues that occor with the links below about 1000px, also make the EMC name look better on smaller screens-->
<div class="missionDiv">
<div class="content">
<h1 class="title"><span class="blue words">EMERGENT</span> <span class="lightBlue words">MEDIA</span> <span class="red words">CENTER</span></h1>

<h2 class="subtitle"><?php the_sub_field('mission_statement_subtitle'); ?></h2>

<p><?php the_sub_field('missionStatement_body_text'); ?></p>
<div class="links">
<div class="button blue">
<a href="<?php the_sub_field('nav_link_one_location')?>"><?php the_sub_field('nav_link_one_text') ?></a>
</div>
<div class="button lightBlue">
<a href="<?php the_sub_field('nav_link_two_location')?>"><?php the_sub_field('nav_link_two_text') ?></a>
</div>

<div class="button red">
<a href="<?php the_sub_field('nav_link_three_location')?>"><?php the_sub_field('nav_link_three_text') ?></a>
</div>

</div>
</div>
</div>


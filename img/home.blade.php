<style>
  <?php foreach ($banners as $key => $row) {?>
    #home_slider .carousel-inner .item:nth-child(<?php echo $key + 1; ?>): {
      background: url('{{ asset('/files/')}}<?php echo '/' . $row->hash . '/' . $row->name . '?ss=1500'; ?>') no-repeat center center scroll;background-size: cover;
    }
  <?php }?>
  <?php foreach ($banners as $key => $row) {?>
    @media screen and (max-width: 767px) {
      #home_slider .carousel-inner .item:nth-child(<?php echo $key + 1; ?>): {
        background: url('{{ asset('/files/')}}<?php echo '/' . $row->hash . '/' . $row->name . '?ss=1500'; ?>') no-repeat center center scroll;background-size: cover;
      }
    }
  <?php }?>
</style>
    <!-- Header -->
      <header class="home-header">
            <!-- Main Navigation -->
            @include('nav')
            <!-- End of Main Navigation -->

          <!-- Home Slider -->
          <div id="home_slider" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

		<?php foreach ($banners as $key => $row) {
    ?>
		<div class="item <?php if ($key == '0') {echo 'active';}?>">
                <div class="carousel-caption">
                    <div class="container custom-container">
                       <div class="slider_content <?php if (!empty($bannerdata[$row->id])) {
        echo "slider_content_bg";
    }
    ?>" <?php if (empty($row->title) && empty($bannerdata[$row->id])) {
        echo 'style="display:none;"';
    }
    ?>>
                          <h1> <?php echo $row->title; ?> </h1>
                          <p> <?php echo $row->description; ?></p>
       <?php if (!empty($bannerdata[$row->id])) {
        ?>
        <!--                  <img src="img/_banners/trophy.png" alt="Trophy/Awards" class="banner_trophy" />
                  <h1 class="slider_content_title">Meet the awarded and authorized <span class="text-yellow">Redhat Training</span> partner</h1>
                  <h2 class="slider_content_subtitle">Choose your bundle of courses and get <span class="text-green">flat 50%</span> on certification.</h2>-->

			     <div class="banner-table">
                    <div class="table-responsive">
                      <table class="table table-bordered text-center">
                        <tbody>
 <tr>
			     <?php foreach ($bannerdata[$row->id] as $row1) {
            ?>

     <td style="width:<?php echo 100 / count($bannerdata[$row->id]); ?>%">

				<table class="tables table-bordered text-center" style="width:100%;">
                        <tbody>

			     <tr>

                            <td><?php echo $row1->title; ?></td>

			  </tr>
 <tr>

                            <td><?php echo $row1->course1; ?></td>

			  </tr>
 <tr>

                            <td><?php echo $row1->course2; ?></td>


			  </tr>
 <tr>
                            <td><?php echo $row1->course3; ?></td>

			  </tr>

                        </tbody>
                      </table>

			    </td>



			  <?php }?>
</tr>

                        </tbody>
                      </table>
                    </div>
                  </div>


			  <?php
}
    if ($row->url && $row->url_text) {?>
			  <a href="<?php echo $row->url_text; ?>"><button type="button"> <?php echo $row->url_text; ?></button></a>
			  <?php }?>
                       </div>
                    </div>
                </div>
              </div>
		  <?php }?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#home_slider" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#home_slider" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- End of slider -->
      </header>
      <!-- End of header -->

      <!-- Our Program Section -->
      <section class="our_program">
         <div class="container-fluid">
            <div class="program-block">
               <!--first program row-->
	       <?php foreach ($explore_the_bests as $row) {
    ?>
			     <div class="program_box" >
                 <div class="img_thumb">
                    <img src="{{ asset('/files/')}}<?php echo '/' . $row->hash . '/' . $row->name . '?ss=342'; ?>" class="img-responsive" />
                    <div class="img-title"><?php echo $row->title; ?></div>
                </div>
                 <div class="pro_content" data-aos="fade-up">
                    <p><?php echo \Illuminate\Support\Str::words($row->description, $words = 404, $end = ''); ?> </p>
                 </div>
		    <a href="<?php if ($row->url) {
        echo $row->url;
    } else {
        echo 'javascript:void(0)';
    }
    ?>"><div class="pro_footer"><i class="fa fa-long-arrow-right fa-2x"></i></div></a>
               </div>
		  <?php }?>


               <div class="program_box less_border_box" >
                  <div class="">
                     <h2 class="text-uppercase"><?php echo $settings->explore_best; ?></h2>
                  </div>
               </div>
            </div>
            <!--first program row close-->
            <div class="program-block">
               <!--second program row-->
               <div class="col-md-4 program_box less_border_box" data-aos="fade-up">
                  <div class="text-left">
                     <h2 class="text-uppercase"><?php echo $settings->career_oriented; ?> </h2>
                  </div>
               </div>

	       <?php foreach ($career_orienteds as $row) {
    ?>
		<div class="program_box" data-aos="fade-up">
                 <div class="img_thumb">
                    <img src="{{ asset('/files/')}}<?php echo '/' . $row->hash . '/' . $row->name . '?ss=342'; ?>" class="img-responsive" />
                    <div class="img-title"><?php echo $row->title; ?></div>
                </div>
                 <div class="pro_content">
                    <p><?php echo \Illuminate\Support\Str::words($row->description, 404, $end = ''); ?> </p>
                 </div>
		    <a href="<?php if ($row->url) {
        echo $row->url;
    } else {
        echo 'javascript:void(0)';
    }
    ?>"><div class="pro_footer"><i class="fa fa-long-arrow-right fa-2x"></i></div></a>
               </div>
		  <?php }?>


            </div>
         </div>
      </section>
      <!-- End of Our Program Section -->

      <!-- Courses Section -->
      <section class="coureses_bg">
         <div class="pink_bg">
            <div class="container">
               <div class="row d-flex">
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="courese_detail">
                        <h1> <?php echo $settings->top_course; ?> </h1>
                        <p><?php echo $settings->top_course_desc; ?>  </p>
                     </div>
                  </div>

		   <?php foreach ($top_courses as $row) {?>

		   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="course_box">
                        <div class="c_thumb">

                           <img src="{{ asset('/files/')}}<?php echo '/' . $row->hash . '/' . $row->name . '?ss=542'; ?>" class="img-responsive" />
                        </div>
                        <div class="course_para">
                           <h1><?php echo $row->title; ?></h1>
                           <p><?php echo \Illuminate\Support\Str::words($row->description, $words = 400, $end = ''); ?></p>
                        </div>
                        <div class="large_btn">
			    <?php if ($row->url_text) {?><center><a href="<?php echo $row->url; ?>"><button type="button"><?php echo $row->url_text; ?></button><img src="img/aero.png" width="40" /> </a></center><?php }?>
                        </div>
                     </div>
                  </div>
		  <?php }?>


               </div>
            </div>
<!--            <div class="text-center">
                <a href="#" style="text-decoration: none; color: white;"> View Course <img src="img/aero.png" width="40" /> </a>
            </div>-->
         </div>
      </section>
      <!-- End of Courses Section -->

      <!-- Our Partners Section -->
      <section class="our_partners">
         <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><?php echo $settings->latest_tech_lbl; ?></h1>
                    <h2><?php echo $settings->latest_tech_desc; ?></h2>
                </div>
               <div class="col-lg-12">
                  <div class="row">
                    <div class="courses-container owl-carousel owl-theme" id="coursesContainer">
			<?php foreach ($latest_technologies as $row) {?>
		   <div class="company_thumbs ih-item square effect6 from_top_and_bottom">
                        <a href="#">
                          <div class="img"><img src="{{ asset('/files/')}}<?php echo '/' . $row->hash . '/' . $row->name . '?ss=200'; ?>" class="img-responsive" alt="img"></div>
                          <div class="info">
                          </div>
                        </a>
                      </div>
		  <?php }?>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End of Our Partners Section -->

      <!-- End of Our Hiring Partners Section -->
         <!-- End of Our Hiring Partners Section -->
     @include('hiringpartner')
      <!-- End of Our Hiring Partners Section -->
      <!-- End of Our Hiring Partners Section -->

      <!-- Our Story Section -->
      <section class="our_story" >
        <div class="our-story-heading text-center text-uppercase">
            <h1><?php echo $settings->success_story_lbl; ?></h1>
        </div>
        <div class="container custom-container content-left">
            <div class="our-story-block">
                <div class="story_content">
                   <h2 class="text-uppercase"><?php echo $settings->world_talking_about; ?></h2>
                </div>

		    <?php foreach ($success_stories as $key => $row) {
    ?>
		<div class="my_media story" id="div<?php echo $row->id; ?>" <?php if ($key > 0) {
        echo 'style="display:none;"';
    }
    ?>>
                    <h3><?php echo $row->title; ?></h3>
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="{{ asset('/files/')}}<?php echo '/' . $row->hash . '/' . $row->iname . '?ss=342'; ?>" alt="Avatar">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><?php echo $row->uname; ?></h4>
                        <p class="media-subheading"> <?php echo $row->designition; ?></p>
                      </div>
                    </div>
                    <p class="media-content"><?php echo $row->about; ?></p>
		    <?php if ($row->url) {?>
                    <button type="button" class="btn">Read More</button>
		    <?php }?>
                </div>

		  <?php }?>

                <!-- Swiper -->
                <div class="swiper-container our-story-gallery">
                  <div class="swiper-wrapper">
		      <?php foreach ($success_stories as $row) {?>
		        <div class="swiper-slide">
			    <a href="javascript:void(0);" class="our-story-gallery-img" onclick="$('.story').hide();$('#div<?php echo $row->id; ?>').show();"><img src="{{ asset('/files/')}}<?php echo '/' . $row->hash . '/' . $row->iname . '?ss=342'; ?>" class="img-responsive" /></a>
                    </div>
		       <?php }?>
                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
                </div>
                <!-- Swiper End -->
            </div>
         </div>
      </section>
      <!-- End of Our Story Section -->

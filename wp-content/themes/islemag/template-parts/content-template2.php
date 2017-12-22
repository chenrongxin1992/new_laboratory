<?php
/**
 * Template for displaying Islemag frontpage section.
 *
 * @package WordPress
 * @subpackage Islemag
 */

$wp_query = new WP_Query(
	array(
		'posts_per_page'      => $islemag_section_max_posts,
		'order'               => 'DESC',
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
		'category_name'       => ( $islemag_section_category != 'all' ? $islemag_section_category : '' ),
	)
);



		


if ( $wp_query->have_posts() ) : ?>
	<div class="post-section islemag-template2">
		<div class="row">

			<ul class="article-list">
				<?php
				  $counter = 0;

				while ( $wp_query->have_posts() ) : $wp_query->the_post();
					$case = $counter % 2;
					$category = get_the_category();
					$postid = get_the_ID();
				?>

				<div class="col-sm-6">
					<li>
			
							<span class="post-title">
					            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a>
					             <?php   
										    $t1=get_the_date("Y-m-d H:i:s"); //var_dump($t1);
										    $t2=date("Y-m-d H:i:s");   
										    $diff=(strtotime($t2)-strtotime($t1))/72000;   //十天内
										    if($diff<24){echo '<img class="new-post" src="'.get_bloginfo('template_directory').'/img/new.gif" />';}   
										?>
					        </span>
					        <!-- 显示发布日期 -->
					            <span class="post-date"><i class="fa fa-calendar-o" style="padding-right: 2px;color: #8d8d8d;"></i><?php echo esc_html( get_the_date() ); ?></span>
				        </li>
				       </div> <!-- End .col-sm-6 -->
						<?php  endwhile;?>

					</ul>

		</div> <!-- End .row -->
	</div> <!-- End .post-section -->
<?php endif;
wp_reset_postdata(); ?>

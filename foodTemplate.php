<?php
/*
* Template Name: Food Template
* Template Post Type: food
*/
?>
<?php
  get_header();
 ?>

<div class="food-template-background" style="background-image: url(<?php the_field('food_background_image'); ?>);">
 <div class="food-template-container">

   <div class="l-1c">
     <div class="c-1">
       <div class="box">
         <div class="tp-show hl-show h-show">
           <div class="left-food">
             <div class="food-timeline-box">
              <div class="food-name">
                <?php echo get_field('food_name'); ?> <br>
              </div> <!--food-name-->
              <div class="timeline">
                <div class="shelf-time">
                  <?php echo get_field('shelf_time'); ?>
                  <?php echo get_field('shelf_time_unit'); ?> on shelf
                </div> <!--shelf-time-->
                <div class="fridge-time">
                  <?php echo get_field('fridge_time'); ?>
                  <?php echo get_field('fridge_time_unit'); ?> in fridge
                </div> <!--fridge-time-->
                <div class="freezer-time">
                  <?php echo get_field('freezer_time'); ?>
                  <?php echo get_field('freezer_time_unit'); ?> in freezer
                </div> <!--freezer-time-->
              </div> <!--timeline-->
              <div class="food-info-box-left">
                <div class="appearance-label">
                  Appearance
                </div> <!--appearance-label-->
                <div class="how-to-label">
                  How To
                </div> <!--how-to-label-->
                <div class="nutrition-label">
                  Nutrition
                </div> <!--nutrition-label-->
              </div> <!--food-info-box-left-->
              <div class="diet-check">
                <div class="diet-check-container">
                  <?php
                   // vars
                   $diets = get_field('diet_type');
                   // check
                   if( $diets ): ?>
                   <ul class="diet-list">
                     <?php foreach( $diets as $diet ): ?>
                       <li>&#10003;<?php echo $diet; ?></li>
                     <?php endforeach; ?>
                   </ul>
                   <?php endif; ?>
                   <div class="ww">
                     <img src="http://treely-app.arcadia-hewins.com/wp-content/uploads/2018/02/weight-watchers-bahamas-logo-__large-1.png">
                     <div class="wwp">
                       <p><?php echo get_field('watchers_points'); ?></p>
                     </div> <!--wwp-->
                   </div> <!--ww-->
                </div> <!--diet-check-container-->
              </div> <!--diet-check-->
             </div> <!--food-timeline-box-->
           </div> <!--left-food-->
        </div> <!--tp hl h-->
      </div> <!--box-->
     </div> <!--c-1-->
   </div> <!--l-1c-->
   <div class="l-1c">
     <div class="c-1">
       <div class="box">
         <div class="tp-show hl-show h-show">
           <div class="right-food">
             <div class="food-info-box-right">
               <div class="appearance">
                <div class="appearance-container">
                  <h1>Appearance</h1>
                  <div class="before-ripe">
                    <p class="app-heading"><?php echo get_field('food_name'); ?> Before Ripe</p>
                    <?php echo get_field('food_appearance_before_ripe'); ?>
                  </div> <!--before-ripe-->
                  <div class="when-ripe">
                    <p class="app-heading"><?php echo get_field('food_name'); ?> When Ripe</p>
                    <?php echo get_field('food_appearance_when_ripe'); ?>
                  </div> <!--when-ripe-->
                  <div class="spoiled">
                    <p class="app-heading"><?php echo get_field('food_name'); ?> When Spoiled</p>
                    <?php echo get_field('food_appearance_when_spoiled'); ?>
                  </div> <!--spoiled-->
                </div> <!--appearance-container-->
              </div> <!--appearance-->
              <div class="how-to">
                <div class="how-to-container">
                  <?php echo get_field('food_how_to_cook'); ?>
                </div> <!--how-to-container-->
              </div> <!--how-to-->
              <div class="nutrition-box">
                <div class="nutrition">
                  <div class="nutrition-container">
                    <h1>Nutrition Information</h1>
                    <p>Serving Size <?php echo get_field('serving_size'); ?> <?php echo get_field('serving_size_unit'); ?></p>
                      <div class="large-break-line"></div>
                    <p><strong>Amount Per Serving <?php echo get_field('amount_per_serving'); ?> <?php echo get_field('amount_per_serving_unit'); ?></strong></p>
                      <div class="small-break-line"></div>
                    <p class="left-align"><strong>Calories</strong> <?php echo get_field('calorie_number'); ?> </p>
                    <p class="right-align">Calories from Fat <?php echo get_field('calories_from_fat_number'); ?></span></p>
                      <div class="medium-break-line"></div>
                    <p class="right-align">% Daily Value</p>
                      <div class="small-break-line"></div>
                    <p class="left-align"><strong>Total Fat</strong> <?php echo get_field('total_fat_number'); ?>g</p>
                    <p class="right-align"><?php echo get_field('fat_percentage'); ?>%</p>
                      <div class="small-break-line"></div>
                    <p class="left-align">&nbsp;&nbsp;&nbsp;&nbsp;Saturated Fat <?php echo get_field('saturated_fat_number'); ?>g</p>
                    <p class="right-align"><?php echo get_field('saturated_fat_percentage'); ?>%</p>
                      <div class="small-break-line"></div>
                    <p class="left-align">&nbsp;&nbsp;&nbsp;&nbsp;Trans Fat <?php echo get_field('trans_fat_number'); ?>g</p>
                      <div class="small-break-line"></div>
                    <p class="left-align"><strong>Cholesterol</strong> <?php echo get_field('cholesterol_number'); ?>mg</p>
                    <p class="right-align"><?php echo get_field('cholesterol_percentage'); ?>%</p>
                      <div class="small-break-line"></div>
                    <p class="left-align"><strong>Sodium</strong> <?php echo get_field('sodium_number'); ?>mg</p>
                    <p class="right-align"><?php echo get_field('sodium_percentage'); ?>%</p>
                      <div class="small-break-line"></div>
                    <p class="left-align"><strong>Total Carbohydrate</strong> <?php echo get_field('total_carbohydrate_number'); ?>g</p>
                    <p class="right-align"><?php echo get_field('carbohydrate_percentage'); ?>%</p>
                      <div class="small-break-line"></div>
                    <p class="left-align">&nbsp;&nbsp;&nbsp;&nbsp;Dietary Fiber <?php echo get_field('dietary_fat_number'); ?>g</p>
                    <p class="right-align"><?php echo get_field('dietary_fat_percentage'); ?>%</p>
                      <div class="small-break-line"></div>
                    <p class="left-align">&nbsp;&nbsp;&nbsp;&nbsp;Sugars <?php echo get_field('sugars_number'); ?>g</p>
                      <div class="small-break-line"></div>
                    <p class="left-align"><strong>Protein</strong> <?php echo get_field('protein_number'); ?>g</p>
                      <div class="large-break-line"></div>
                    <p class="left-align">Vitamin A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1%</p>
                    <p class="right-align">Vitamin C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1%</p>
                      <div class="small-break-line"></div>
                    <p class="left-align">Calcium&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4%</p>
                    <p class="right-align">Iron&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24%</p>
                      <br>
                      <br>
                    <p class="fyi">This site is for informational purposes only.</p>
                  </div> <!--nutrition-container-->
              </div> <!--nutrition-box-->
             </div> <!--food-info-box-right-->
           </div> <!--food-info-box-right-->
           </div> <!--right-food-->
        </div> <!--tp hl h-->
      </div> <!--box-->
     </div> <!--c-1-->
   </div> <!--l-1c-->

  <div class="l-1c">
    <div class="c-1">
      <div class="hr-show l-show d-show">
      <div class="g-all-half g-all-f">
          <div class="left-food">
            <div class="food-timeline-box">
             <div class="food-name">
               <?php echo get_field('food_name'); ?> <br>
             </div> <!--food-name-->
             <div class="timeline">
               <div class="shelf-time">
                 <?php echo get_field('shelf_time'); ?>
                 <?php echo get_field('shelf_time_unit'); ?> on shelf
               </div> <!--shelf-time-->
               <div class="fridge-time">
                 <?php echo get_field('fridge_time'); ?>
                 <?php echo get_field('fridge_time_unit'); ?> in fridge
               </div> <!--fridge-time-->
               <div class="freezer-time">
                 <?php echo get_field('freezer_time'); ?>
                 <?php echo get_field('freezer_time_unit'); ?> in freezer
               </div> <!--freezer-time-->
             </div> <!--timeline-->
             <div class="food-info-box-left">
               <div class="appearance-label">
                 Appearance
               </div> <!--appearance-label-->
               <div class="how-to-label">
                 How To
               </div> <!--how-to-label-->
               <div class="nutrition-label">
                 Nutrition
               </div> <!--nutrition-label-->
             </div> <!--food-info-box-left-->
             <div class="diet-check">
               <div class="diet-check-container">
                 <?php
                  // vars
                  $diets = get_field('diet_type');
                  // check
                  if( $diets ): ?>
                  <ul class="diet-list">
                  	<?php foreach( $diets as $diet ): ?>
                  		<li>&#10003;<?php echo $diet; ?></li>
                  	<?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                  <div class="ww">
                    <img src="http://treely-app.arcadia-hewins.com/wp-content/uploads/2018/02/weight-watchers-bahamas-logo-__large-1.png">
                    <div class="wwp">
                      <p><?php echo get_field('watchers_points'); ?></p>
                    </div> <!--wwp-->
                  </div> <!--ww-->
               </div> <!--diet-check-container-->
             </div> <!--diet-check-->
            </div> <!--food-timeline-box-->
          </div> <!--left-food-->
      </div> <!--g-all-half g-all-f-->
      <div class="g-all-half g-all-l">
          <div class="right-food">
            <div class="food-info-box-right">
              <div class="appearance">
               <div class="appearance-container">
                 <h1>Appearance</h1>
                 <div class="before-ripe">
                   <p class="app-heading"><?php echo get_field('food_name'); ?> Before Ripe</p>
                   <?php echo get_field('food_appearance_before_ripe'); ?>
                 </div> <!--before-ripe-->
                 <div class="when-ripe">
                   <p class="app-heading"><?php echo get_field('food_name'); ?> When Ripe</p>
                   <?php echo get_field('food_appearance_when_ripe'); ?>
                 </div> <!--when-ripe-->
                 <div class="spoiled">
                   <p class="app-heading"><?php echo get_field('food_name'); ?> When Spoiled</p>
                   <?php echo get_field('food_appearance_when_spoiled'); ?>
                 </div> <!--spoiled-->
               </div> <!--appearance-container-->
             </div> <!--appearance-->
             <div class="how-to">
               <div class="how-to-container">
                 <?php echo get_field('food_how_to_cook'); ?>
               </div> <!--how-to-container-->
             </div> <!--how-to-->
             <div class="nutrition-box">
               <div class="nutrition">
                 <div class="nutrition-container">
                   <h1>Nutrition Information</h1>
                   <p>Serving Size <?php echo get_field('serving_size'); ?> <?php echo get_field('serving_size_unit'); ?></p>
                     <div class="large-break-line"></div>
                   <p><strong>Amount Per Serving <?php echo get_field('amount_per_serving'); ?> <?php echo get_field('amount_per_serving_unit'); ?></strong></p>
                     <div class="small-break-line"></div>
                   <p class="left-align"><strong>Calories</strong> <?php echo get_field('calorie_number'); ?> </p>
                   <p class="right-align">Calories from Fat <?php echo get_field('calories_from_fat_number'); ?></span></p>
                     <div class="medium-break-line"></div>
                   <p class="right-align">% Daily Value</p>
                     <div class="small-break-line"></div>
                   <p class="left-align"><strong>Total Fat</strong> <?php echo get_field('total_fat_number'); ?>g</p>
                   <p class="right-align"><?php echo get_field('fat_percentage'); ?>%</p>
                     <div class="small-break-line"></div>
                   <p class="left-align">&nbsp;&nbsp;&nbsp;&nbsp;Saturated Fat <?php echo get_field('saturated_fat_number'); ?>g</p>
                   <p class="right-align"><?php echo get_field('saturated_fat_percentage'); ?>%</p>
                     <div class="small-break-line"></div>
                   <p class="left-align">&nbsp;&nbsp;&nbsp;&nbsp;Trans Fat <?php echo get_field('trans_fat_number'); ?>g</p>
                     <div class="small-break-line"></div>
                   <p class="left-align"><strong>Cholesterol</strong> <?php echo get_field('cholesterol_number'); ?>mg</p>
                   <p class="right-align"><?php echo get_field('cholesterol_percentage'); ?>%</p>
                     <div class="small-break-line"></div>
                   <p class="left-align"><strong>Sodium</strong> <?php echo get_field('sodium_number'); ?>mg</p>
                   <p class="right-align"><?php echo get_field('sodium_percentage'); ?>%</p>
                     <div class="small-break-line"></div>
                   <p class="left-align"><strong>Total Carbohydrate</strong> <?php echo get_field('total_carbohydrate_number'); ?>g</p>
                   <p class="right-align"><?php echo get_field('carbohydrate_percentage'); ?>%</p>
                     <div class="small-break-line"></div>
                   <p class="left-align">&nbsp;&nbsp;&nbsp;&nbsp;Dietary Fiber <?php echo get_field('dietary_fat_number'); ?>g</p>
                   <p class="right-align"><?php echo get_field('dietary_fat_percentage'); ?>%</p>
                     <div class="small-break-line"></div>
                   <p class="left-align">&nbsp;&nbsp;&nbsp;&nbsp;Sugars <?php echo get_field('sugars_number'); ?>g</p>
                     <div class="small-break-line"></div>
                   <p class="left-align"><strong>Protein</strong> <?php echo get_field('protein_number'); ?>g</p>
                     <div class="large-break-line"></div>
                   <p class="left-align">Vitamin A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1%</p>
                   <p class="right-align">Vitamin C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1%</p>
                     <div class="small-break-line"></div>
                   <p class="left-align">Calcium&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4%</p>
                   <p class="right-align">Iron&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24%</p>
                     <br>
                     <br>
                   <p class="fyi">This site is for informational purposes only.</p>
                 </div> <!--nutrition-container-->
             </div> <!--nutrition-box-->
            </div> <!--food-info-box-right-->
          </div> <!--food-info-box-right-->
      </div> <!--right-food-->
  </div> <!--g-all-half g-all-l-->
</div> <!--hr l d-->
</div> <!--c-1-->
</div> <!--l-1c-->

</div> <!--food-template-container-->
</div> <!--food-template-background-->

<section class="section second-narrow">
  <div class="columns">
    <div class="column card has-text-centered first is-size-2">
      <div class="recipe-grid-card">
        <p class="grid-title has-text-weight-bold">Roasted Carrots</p>
        <p class="is-size-4">20 Minutes</p>
        <p class="is-size-4">5 Ingrediants</p>
        <div class="hover-icons has-text-centered">
          <div class="eye"><a href="#"><i class="fas fa-eye"></i></a></div>
          <div class="heart"><a href="#"><i class="far fa-heart"></i></a></div>
          <div class="cal"><a href="#"><i class="far fa-calendar-alt"></i></a></div>
        </div>
      </div>
    </div>

    <div class="column card has-text-centered">
      <p class="grid-title has-text-weight-bold">Title!</p>
      <p class="is-size-7">Time to cook</p>
      <p class="is-size-7">Ingrediants</p>
    </div>

    <div class="column card has-text-centered">
      <p class="grid-title has-text-weight-bold">Title!</p>
      <p class="is-size-7">Time to cook</p>
      <p class="is-size-7">Ingrediants</p>
    </div>

    <div class="column card has-text-centered">
      <p class="grid-title has-text-weight-bold">Title!</p>
      <p class="is-size-7">Time to cook</p>
      <p class="is-size-7">Ingrediants</p>
    </div>
  </div>
  <div class="columns">
    <div class="column is-one-third card pain-card" style="background-image: url(<?php the_field('grid_d_image'); ?>);">
    </div>
    <div class="column is-one-third card has-text-centered">
      <div class="grid_fa"><?php echo get_field('grid_e_icon') ?></div>
      <p class="grid-title has-text-weight-bold"><?php echo get_field('grid_e_title'); ?></p>
      <p class="is-size-7"><?php echo get_field('grid_e_subtitle'); ?></p>
    </div>
    <div class="column card kettle-card"style="background-image: url(<?php the_field('grid_f_image'); ?>);">
    </div>
  </div>
</section>

  <?php
    get_footer();
   ?>

<?php /* Template Name: Home */ ?>
<?php headerBlock(); ?>
<div class="page-container">
    <div class="page-content">
        <div class="casino-menu-absolute">
            <?php echo wp_nav_menu(array('menu' => 'Homepage Menu')); ?>
        </div>
        <?php $companies = get_field('companies_block_top'); ?>
        <div class="three-block-container">
            <h1><?php echo $companies ['title']; ?></h1>
            <div class="three-block">
                <?php foreach (get_field('companies_block_top')['companies'] as $key => $company) : ?>
                    <?php if ($key === 1) : ?>
                        <div class="block-company several">
                            <div class="block-inside">
                                <div class="top-container">
                                    <div class="top-title">
                                        <h3>BEST CHOICE</h3>
                                    </div>
                                    <div class="logo">
                                        <a href="<?php echo get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                            <img src="<?php echo get_field('logo', $company->ID); ?>" alt="guides-logo">
                                        </a>
                                    </div>
                                    <h5><?php echo $company->post_title; ?> Casino</h5>
                                    <div class="star-container">
                                        <?php $rating = get_field('rating', $company->ID); ?>
                                        <?php $rating_new = intval($rating); ?>
                                        <?php if ($rating_new === 5) : ?>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        <?php elseif ($rating_new === 4) : ?>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        <?php elseif ($rating_new === 3) : ?>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        <?php elseif ($rating_new === 2) : ?>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        <?php elseif ($rating_new === 1) : ?>
                                            <i class="fas fa-star"></i>
                                        <?php endif; ?>
                                        <?php if ($rating_new === 5): ?>
                                            <p><span>5</span>/5</p>
                                        <?php elseif ($rating_new === 4) : ?>
                                            <p><span>4</span>/5</p>
                                        <?php elseif ($rating_new === 3) : ?>
                                            <p><span>3</span>/5</p>
                                        <?php elseif ($rating_new === 2) : ?>
                                            <p><span>2</span>/5</p>
                                        <?php elseif ($rating_new === 1) : ?>
                                            <p><span>1</span>/5</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="middle-container">
                                    <h4><?php echo get_field('bonus_type', $company->ID); ?></h4>
                                    <a href="<?php echo get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                        <h2><?php echo get_field('bonus', $company->ID); ?></h2>
                                    </a>
                                    <h3><?php echo get_field('free_spins', $company->ID); ?></h3>
                                </div>
                                <div class="bottom-container">
                                    <div class="btn">
                                        <a href="<?php echo get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                            Visit Casino
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="full-tc-apply">
                                <?php if (!empty (get_field('terms_text', $company->ID))): ?>
                                    <?php echo get_field('terms_text', $company->ID); ?>
                                <?php else : ?>
                                    <a href="<?php echo get_field('terms_link', $company->ID); ?>" target="_blank">
                                        18+ | Play Responsibly | T&C Apply
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="block-company">
                            <div class="block-inside">
                                <div class="top-container">
                                    <div class="logo">
                                        <a href="<?php echo get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                            <img src="<?php echo get_field('logo', $company->ID); ?>" alt="guides-logo">
                                        </a>
                                    </div>
                                    <h5><?php echo $company->post_title; ?> Casino</h5>
                                    <div class="star-container">
                                        <?php $rating = get_field('rating', $company->ID); ?>
                                        <?php $rating_new = intval($rating); ?>
                                        <?php if ($rating_new === 5) : ?>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        <?php elseif ($rating_new === 4) : ?>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        <?php elseif ($rating_new === 3) : ?>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        <?php elseif ($rating_new === 2) : ?>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        <?php elseif ($rating_new === 1) : ?>
                                            <i class="fas fa-star"></i>
                                        <?php endif; ?>
                                        <?php if ($rating_new === 5): ?>
                                            <p><span>5</span>/5</p>
                                        <?php elseif ($rating_new === 4) : ?>
                                            <p><span>4</span>/4</p>
                                        <?php elseif ($rating_new === 3) : ?>
                                            <p><span>3</span>/5</p>
                                        <?php elseif ($rating_new === 2) : ?>
                                            <p><span>2</span>/5</p>
                                        <?php elseif ($rating_new === 1) : ?>
                                            <p><span>1</span>/5</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="middle-container">
                                    <h4><?php echo get_field('bonus_type', $company->ID); ?></h4>
                                    <a href="<?php echo get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                        <h2><?php echo get_field('bonus', $company->ID); ?></h2>
                                    </a>
                                    <h3><?php echo get_field('free_spins', $company->ID); ?></h3>
                                </div>
                                <div class="bottom-container">
                                    <div class="btn">
                                        <a href="<?php echo get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                            Visit Casino
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="full-tc-apply">
                                <?php if (!empty (get_field('terms_text', $company->ID))): ?>
                                    <?php echo get_field('terms_text', $company->ID); ?>
                                <?php else : ?>
                                    <a href="<?php echo get_field('terms_link', $company->ID); ?>" target="_blank">
                                        18+ | Play Responsibly | T&C Apply
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="enter-email-container">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.11 512.11" style="enable-background:new 0 0 512.11 512.11;" xml:space="preserve"><g><g><g><path d="M475.213,366.517l-130.5,45.787c-1.909,0.668-3.919,1.001-5.942,0.983h-2.033c2.609-9.284,1.412-19.225-3.325-27.625l-0.667-1.208c-7.702-13.573-22.061-22.006-37.667-22.121h-36.866c-12.711-0.089-24.988-4.635-34.692-12.846c-12.794-10.723-28.94-16.627-45.633-16.688h-4.325c-2.148,0-45.896,0.399-74.129,24.474c-3.176-4.632-8.43-7.402-14.046-7.408H17.121c-9.421,0.011-17.056,7.645-17.067,17.067V486.4c0.011,9.421,7.645,17.056,17.067,17.067h68.267c5.094-0.019,9.909-2.325,13.117-6.282c15.458,10.561,33.952,15.765,52.649,14.816h185.342c10.744-0.038,21.257-3.116,30.325-8.879l132.117-84.671c6.577-4.331,11.112-11.148,12.567-18.888c1.538-7.991-0.24-16.263-4.925-22.917C499.501,366.722,486.758,362.607,475.213,366.517z M85.387,486.4H17.121V366.933h68.267	V486.4z M494.746,396.342c-0.55,3.169-2.375,5.973-5.05,7.758l-132.025,84.612c-6.331,4.029-13.671,6.185-21.175,6.221H151.154c-32.625,0-45.325-12.829-48.7-17.188v-99.004c20.842-28.421,70.608-28.875,71.108-28.875h4.325c12.695,0.058,24.968,4.559,34.692,12.721c12.774,10.774,28.923,16.723,45.633,16.813h36.867	c9.449,0.018,18.153,5.133,22.767,13.379l0.667,1.208c3.372,6.034,3.208,13.422-0.429,19.3h-42.004c-14.349,0.041-28.337,4.505-40.058,12.783l-5.117,3.592c-2.495,1.751-3.866,4.699-3.598,7.735	c0.269,3.036,2.137,5.698,4.9,6.983c2.764,1.285,6.003,0.999,8.498-0.752l5.1-3.575c8.855-6.268,19.426-9.655,30.275-9.7h62.692c3.985,0.019,7.944-0.652,11.7-1.983l130.309-45.72c4.403-1.496,9.264,0.106,11.917,3.925C494.677,389.418,495.417,392.943,494.746,396.342z"/><path d="M42.721,460.8c2.259-0.035,4.421-0.918,6.059-2.475c0.753-0.83,1.359-1.783,1.792-2.817c0.437-1.026,0.669-2.127,0.683-3.242c-0.033-2.259-0.917-4.422-2.475-6.059c-3.422-3.159-8.696-3.159-12.117,0c-2.461,2.441-3.201,6.129-1.872,9.331S39.254,460.82,42.721,460.8z"/><path d="M358.454,102.4c14.138,0,25.6-11.462,25.6-25.6s-11.461-25.6-25.6-25.6s-25.6,11.461-25.6,25.6	C332.87,90.932,344.322,102.385,358.454,102.4z M358.454,68.267c4.713,0,8.533,3.82,8.533,8.533s-3.82,8.533-8.533,8.533s-8.533-3.82-8.533-8.533C349.926,72.089,353.743,68.271,358.454,68.267z"/><path d="M324.321,256h68.267c2.263,0.001,4.434-0.898,6.035-2.499c1.6-1.6,2.499-3.771,2.499-6.035v-34.133	c0.001-2.263-0.898-4.434-2.499-6.035c-1.6-1.6-3.771-2.499-6.035-2.499h-8.533V128c0.001-2.263-0.898-4.434-2.499-6.035c-1.6-1.6-3.771-2.499-6.035-2.499h-51.2c-2.263-0.001-4.434,0.898-6.035,2.499c-1.6,1.6-2.499,3.771-2.499,6.035v34.133c-0.001,2.263,0.898,4.434,2.499,6.035c1.6,1.6,3.771,2.499,6.035,2.499h8.533V204.8h-8.533c-2.263-0.001-4.434,0.898-6.035,2.499c-1.6,1.6-2.499,3.771-2.499,6.035v34.133c-0.001,2.263,0.898,4.434,2.499,6.035C319.887,255.102,322.058,256.001,324.321,256z M332.854,221.867h8.533c2.263,0.001,4.434-0.898,6.035-2.499c1.6-1.6,2.499-3.771,2.499-6.035v-51.2c0.001-2.263-0.898-4.434-2.499-6.035c-1.6-1.6-3.771-2.499-6.035-2.499h-8.533v-17.067h34.133v76.8c-0.001,2.263,0.898,4.434,2.499,6.035c1.6,1.6,3.771,2.499,6.035,2.499h8.533v17.067h-51.2V221.867z"/><path d="M264.587,275.125v49.142c0,3.273,1.872,6.258,4.819,7.682c2.947,1.425,6.449,1.038,9.014-0.995l37.533-29.729c57.696,16.607,119.779-1.921,158.935-47.434c39.156-45.513,48.208-109.666,23.172-164.236C473.026,34.986,418.493,0.004,358.454,0C292.74-0.016,234.299,41.783,213.08,103.977C191.861,166.17,212.567,234.973,264.587,275.125z M237.008,91.55c30.548-59.758,100.011-88.434,163.818-67.629	s103.015,84.917,92.465,151.195s-67.724,115.049-134.837,115.017c-14.143,0.023-28.203-2.17-41.667-6.5c-2.716-0.868-5.685-0.331-7.925,1.434l-27.208,21.554V270.85c0.001-2.735-1.31-5.304-3.525-6.908C223.897,224.407,206.46,151.308,237.008,91.55z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            <div class="contact-form-email">
                <h2>Stay In Focus With New Casino Sites & Best Offers!</h2>
                <h6>Free Spins. Exclusive Bonuses. Sent Weekly.</h6>
                <form method="post" action="#">
                    <div class="enter-approve-email">
                        <input class="enter-email" type="email" id="js-email" name="email" placeholder="Enter email">
                        <input class="approve-email-btn" value="Join Now" type="submit">
                    </div>
                    <div class="email-order">
                        <label class="email-container">
                            <p>Yes, I confirm that I am 18+ and I agree to receiving emails on gambling news and offers.</p>
                            <input type="checkbox" name="terms_and_conditions" id="terms-and-conditions">
                            <span class="mark js-mark"></span>
                        </label>
                    </div>
                    <div class="notifications"></div>
                </form>
                <p class="remark">*This offer is not applicable to residents of Great Britain. By subscribing you are certifying that you have reviewed and accepted our updated Privacy and Cookie Policy</p>
            </div>
        </div>
        <div class="type-of-games-container">
            <h2>The Best Guides</h2>
            <div class="type-of-games">
                <?php $query = new WP_Query(array('posts_per_page' => 4)); ?>
                <?php $posts = $query->posts; ?>
                <?php foreach ($posts as $post) : ?>
                    <div class="block">
                        <a href="<?php echo get_permalink($post); ?>">
                            <?php echo get_field('post_image'); ?>
                            <?php echo $post->post_title; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="description-container">
        <?php $description = get_field('description_block'); ?>
        <?php if (!empty($description)) : ?>
            <div class="description-content page-home">
                <?php echo $description; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>



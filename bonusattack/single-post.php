<?php headerBlock(); ?>
<?php $page = get_post(get_the_ID()); ?>
<div class="page-container single-post-page">
    <div class="description-container">
        <div class="description-content single-post">
            <?php $description = get_field('description_block'); ?>
            <?php echo $description; ?>
        </div>
    </div>
    <div class="page-content">
        <div class="companies-container single-post-page">
            <?php $companies = get_field('companies'); ?>
            <?php if (!empty($companies)) : ?>
                <?php foreach ($companies as $company) : ?>
                    <div class="companies-block">
                        <div class="companies">
                            <div class="logo">
                                <a href="<?php echo get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                    <img src="<?php echo get_field('logo', $company->ID); ?>" alt="guides-logo">
                                </a>
                            </div>
                            <div class="bonus-btn-companies-options">
                                <div class="bonus-btn-container">
                                    <div class="bonus">
                                        <p><?php echo $company->post_title; ?> Casino</p>
                                        <a href="<?php echo get_field('affiliate_link', $company->ID); ?>"
                                           target="_blank">
                                            <h2><?php echo get_field('bonus', $company->ID); ?></h2>
                                        </a>
                                        <h4><?php echo get_field('free_spins', $company->ID); ?></h4>
                                    </div>
                                    <div class="btn-container breakpoint">
                                        <div class="btn">
                                            <a href="<?php echo get_field('affiliate_link', $company->ID); ?>" target="_blank">Visit Casino</a>
                                        </div>
                                        <a class="full-tc-apply" href="<?php echo get_field('terms_link', $company->ID); ?>" target="_blank">18+
                                            | Play Responsibly | T&C Apply
                                        </a>
                                    </div>
                                </div>
                                <div class="companies-options">
                                    <div class="score">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M53.333,224C23.936,224,0,247.936,0,277.333V448c0,29.397,23.936,53.333,53.333,53.333h64c12.011,0,23.061-4.053,32-10.795V224H53.333z"/></g></g><g><g><path d="M512,304c0-12.821-5.077-24.768-13.888-33.579c9.963-10.901,15.04-25.515,13.653-40.725c-2.496-27.115-26.923-48.363-55.637-48.363H324.352c6.528-19.819,16.981-56.149,16.981-85.333c0-46.272-39.317-85.333-64-85.333c-22.165,0-37.995,12.48-38.677,12.992c-2.517,2.027-3.989,5.099-3.989,8.341v72.341l-61.44,133.099l-2.56,1.301v228.651C188.032,475.584,210.005,480,224,480h195.819c23.232,0,43.563-15.659,48.341-37.269c2.453-11.115,1.024-22.315-3.861-32.043c15.765-7.936,26.368-24.171,26.368-42.688c0-7.552-1.728-14.784-5.013-21.333C501.419,338.731,512,322.496,512,304z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                        <div class="our-score-container">
                                            <h6>Our Score:</h6>
                                            <p><span><?php echo get_field('our_rating', $company->ID); ?></span>/10</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <svg viewBox="-42 0 512 512.002" xmlns="http://www.w3.org/2000/svg"><path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/></svg>
                                        <div class="our-score-container">
                                            <h6>User Rating:</h6>
                                            <p><span><?php echo get_field('user_rating', $company->ID); ?></span>/100</p>
                                        </div>
                                    </div>
                                    <div class="devices">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><g><path fill="#607ba4" d="M411.429,442.514c0,5.554,4.503,10.057,10.057,10.057h80.457c2.667,0,5.225-1.06,7.112-2.946c1.886-1.886,2.946-4.444,2.946-7.112v-8.229H411.429V442.514z"/><path fill="#607ba4" d="M501.943,269.714h-80.457c-5.554,0-10.057,4.503-10.057,10.057V288H512v-8.229C512,274.217,507.497,269.714,501.943,269.714z"/><polygon fill="#607ba4" points="210.286,333.714 310.857,333.714 393.143,333.714 393.143,306.286 210.286,306.286 			"/><path fill="#607ba4" d="M420.571,86.857c0-15.148-12.28-27.429-27.429-27.429H118.857c-15.148,0-27.429,12.28-27.429,27.429v54.857h77.586c22.783,0.025,41.246,18.488,41.271,41.271V288h182.857v-8.229c0.051-15.261,12.176-27.741,27.429-28.233V86.857z"/><rect fill="#607ba4" x="210.286" y="352" width="91.429" height="36.571"/><rect fill="#607ba4" x="411.429" y="306.286" width="100.571" height="109.714"/><path fill="607ba4" d="M0,429.586c0.01,12.69,10.295,22.975,22.985,22.985h146.03c12.69-0.01,22.975-10.295,22.985-22.985v-4.443H0V429.586z"/><polygon fill="#607ba4" points="0,406.857 192,406.857 192,397.714 192,342.857 192,205.714 0,205.714 			"/><path fill="#607ba4" d="M169.015,160H22.985C10.295,160.01,0.01,170.295,0,182.985v4.443h192v-4.443C191.99,170.295,181.705,160.01,169.015,160z"/><path fill="#607ba4" d="M347.429,406.857H210.286v18.286h146.286V416C356.571,410.951,352.478,406.857,347.429,406.857z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                        <div class="our-score-container">
                                            <h6>Devices:</h6>
                                            <p><?php echo get_field('devices', $company->ID); ?></p>
                                        </div>
                                    </div>
                                    <div class="bonus-code">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="438.526px" height="438.526px" viewBox="0 0 438.526 438.526" style="enable-background:new 0 0 438.526 438.526;" xml:space="preserve"><g><path d="M435.969,157.878c-1.708-1.712-3.897-2.568-6.57-2.568H303.778c17.7,0,32.784-6.23,45.255-18.699c12.464-12.468,18.699-27.552,18.699-45.254s-6.235-32.786-18.699-45.254c-12.471-12.465-27.555-18.699-45.255-18.699c-20.365,0-36.356,7.327-47.965,21.982l-36.547,47.108l-36.54-47.108c-11.613-14.655-27.6-21.982-47.967-21.982c-17.703,0-32.789,6.23-45.253,18.699c-12.465,12.468-18.7,27.552-18.7,45.254s6.231,32.79,18.7,45.254c12.467,12.465,27.55,18.699,45.253,18.699H9.135c-2.667,0-4.854,0.856-6.567,2.568C0.857,159.593,0,161.783,0,164.446v91.367c0,2.662,0.854,4.853,2.568,6.563c1.712,1.711,3.903,2.566,6.567,2.566h27.41v118.776c0,7.618,2.665,14.086,7.995,19.41c5.326,5.332,11.798,7.994,19.414,7.994h310.629c7.618,0,14.086-2.662,19.417-7.994c5.325-5.328,7.995-11.799,7.995-19.41V264.942h27.397c2.669,0,4.859-0.855,6.57-2.566s2.563-3.901,2.563-6.563v-91.367C438.529,161.783,437.68,159.593,435.969,157.878zM284.081,72.798c4.948-5.898,11.512-8.848,19.697-8.848c7.618,0,14.089,2.662,19.418,7.992c5.324,5.327,7.987,11.8,7.987,19.414s-2.67,14.087-7.987,19.414c-5.332,5.33-11.8,7.992-19.418,7.992h-55.391L284.081,72.798z M134.756,118.763c-7.614,0-14.082-2.663-19.42-7.992c-5.327-5.327-7.993-11.8-7.993-19.414s2.663-14.084,7.993-19.414c5.33-5.33,11.803-7.992,19.417-7.992c8.188,0,14.753,2.946,19.702,8.848l35.975,45.965H134.756z M264.951,210.128v133.62v15.985c0,4.76-1.719,8.422-5.141,10.995c-3.429,2.57-7.809,3.856-13.131,3.856H191.86c-5.33,0-9.707-1.286-13.134-3.856c-3.427-2.573-5.142-6.235-5.142-10.995v-15.985v-133.62V155.31h91.367V210.128z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                        <div class="our-score-container">
                                            <h6>Bonus Code:</h6>
                                            <p><?php echo get_field('bonus_code', $company->ID); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-breakpoint">
                                    <div class="btn">
                                        <a href="<?php echo get_field('affiliate_link', $company->ID); ?>" target="_blank">Visit Casino</a>
                                    </div>
                                    <a class="full-tc-apply" href="<?php echo get_field('terms_link', $company->ID); ?>" target="_blank">18+ | Play Responsibly | T&C Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="plus18-terms-text">
                            <p><?php echo get_field('terms_text', $company->ID); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="description-container">
        <?php $description = get_field('description_block_bottom'); ?>
        <?php if (!empty($description)) : ?>
        <div class="description-content single-post">
            <?php echo $description; ?>
            <div class="back-btn">
                <a href="javascript:void(0);" onclick="window.history.back()">Back to Guides</a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

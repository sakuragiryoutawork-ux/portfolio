                    <li class="work-list"><a href="<?php the_permalink() ?>">
                            <?php $pic = get_field('production_pic'); ?>

                            <?php if ($pic): ?>
                                <img src="<?php echo esc_url($pic['url']); ?>" alt="">
                            <?php endif; ?>
                            <div class="work-label">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'works_object');
                                $term_name = '';

                                if (!empty($terms) && !is_wp_error($terms)) {
                                    $term_name = $terms[0]->name;
                                }
                                ?>
                                <p class="tagu"><?php echo esc_html($term_name); ?></p>
                                <span><?php the_field('production_count'); ?></span>
                            </div>
                            <p class="work-body"><?php the_title(); ?></p>
                        </a>
                    </li>

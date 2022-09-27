
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="comment-option">
                                    <h5 class="co-title"> 
                                    <?php
                                        $gymlife = get_comments_number();
                                        if ( $gymlife <= 1 ) {
                                            echo $gymlife . " " . __( "Comment", "philosophy" );
                                        } else {
                                            echo $gymlife . " " . __( "Comments", "philosophy" );
                                        }
                                    ?>
                                     </h5>
                                    <div class="co-item">
                                    <?php
                                    $comments_args = $args = array(
                                        'walker'            => null,
                                        'max_depth'         => '',
                                        'style'             => 'div',
                                        'callback'          => null,
                                        'end-callback'      => null,
                                        'type'              => 'all',
                                        'page'              => '',
                                        'per_page'          => '',
                                        'avatar_size'       => 50,
                                        'reverse_top_level' => null,
                                        'reverse_children'  => '',
                                        'format'            => 'html5',
                                        'short_ping'        => false,
                                        'echo'              => true     // boolean, default is true
                                    );
                                        wp_list_comments($comments_args);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="leave-comment">
                                    <h5>Leave a comment</h5>
                                    <?php
                                    $gymlife_fields = array();
                                    $gymlife_fields['author'] = <<<EOD
                                    <input type="text" placeholder="Name">
EOD;
                                    $gymlife_fields['email'] = <<<EOD
                                    <input type="text" placeholder="Email">
EOD;
                                    $gymlife_fields['url'] = <<<EOD
                                    <input type="text" placeholder="Website">
EOD;
                                    $gymlife_field_area = <<<EOD
                                    <textarea placeholder="Comment"></textarea>
EOD;
                                    $gymlife_submit_button = <<<EOD
                                    <button type="submit">Submit</button>
EOD;
                                    comment_form(array(
                                        'fields' => $gymlife_fields,
                                        'comment_field' => $gymlife_field_area,
                                       'comment_notes_before' => '',
                                       'title_reply' => '',
                                       'submit_button' => $gymlife_submit_button
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
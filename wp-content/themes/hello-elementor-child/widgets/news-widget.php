<?php
class News_Widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'news_widget',
            __('News Widget', 'text_domain'),
            array('description' => __('Displays latest news posts.', 'text_domain'))
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        $news_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 5
        ));

        if ($news_query->have_posts()) {
            echo '<ul>';
            while ($news_query->have_posts()) {
                $news_query->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No news found.</p>';
        }
        wp_reset_postdata();

        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : __('Latest News', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat"
                id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                type="text"
                value="<?php echo esc_attr($title); ?>" />
        </p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

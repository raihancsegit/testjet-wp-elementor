<?php
namespace ElementorHelloWorld\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Typography;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Hero extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'hero';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Hero Section', 'elementor-hello-world' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-posts-ticker';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'elementor-hello-world' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Header Text', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'sub_title',
			[
				'label' => __( 'Sub Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Subheading Text', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_text1',
			[
				'label' => __( 'Button Text 1', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Start For a Free', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_text1_link',
			[
				'label' => __( 'Button Text1 Link', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( '#', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_text2',
			[
				'label' => __( 'Button Text 2', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'schedule a demo', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_text2_link',
			[
				'label' => __( 'Button Text2 Link', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( '#', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'list_text1',
			[
				'label' => __( 'List Text 1', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Product Pricing', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'list_text1_link',
			[
				'label' => __( 'List Text1 Link', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( '#', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'list_text2',
			[
				'label' => __( 'List Text 2', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Watch Video', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'list_text2_link',
			[
				'label' => __( 'List Text2 Link', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( '#', 'elementor-hello-world' ),
			]
		);



		$this->end_controls_section();


		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-hello-world' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => __( 'Heading Typography', 'elementor-hello-world' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .hero-left-content h2',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sub_content_typography',
				'label' => __( 'Sub Heading Typography', 'elementor-hello-world' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .hero-left-content h4',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'fetures_title_typography',
				'label' => __( 'Fetures Title Typography', 'elementor-hello-world' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .feature-box h3',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'fetures_content_typography',
				'label' => __( 'Fetures Content Typography', 'elementor-hello-world' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .feature-box p',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_feture',
			[
				'label' => __( 'Fetures Section', 'elementor-hello-world' ),
			]
		);


		$this->add_control(
			'fetures_title1',
			[
				'label' => __( 'Fetures Title 1', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 1', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'item_description1',
			[
				'label' => __( 'Description', 'elementor-hello-world' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 6,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'fetures_title2',
			[
				'label' => __( 'Fetures Title 2', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 2', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'item_description2',
			[
				'label' => __( 'Description', 'elementor-hello-world' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 6,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'elementor-hello-world' ),
			]
		);


		$this->add_control(
			'fetures_title3',
			[
				'label' => __( 'Fetures Title 3', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 3', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'item_description3',
			[
				'label' => __( 'Description', 'elementor-hello-world' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 6,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'elementor-hello-world' ),
			]
		);


		$this->add_control(
			'fetures_title4',
			[
				'label' => __( 'Fetures Title 4', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 4', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'item_description4',
			[
				'label' => __( 'Description', 'elementor-hello-world' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 6,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'elementor-hello-world' ),
			]
		);


		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		ob_start();
		?>

		<!-- Hero Section Start -->
<div class="hero-seciton">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="hero-left-content">
                    <h2><?php echo $settings['title'];?></h2>
                    <h4><?php echo $settings['sub_title'];?></h4>
                    <div class="hero-btn">
                        <a class="active" href="<?php echo $settings['btn_text1_link'];?>"><?php echo $settings['btn_text1'];?></a>
                        <a href="<?php echo $settings['btn_text2_link'];?>"><?php echo $settings['btn_text2'];?></a>
                    </div>
                    <div class="hero-link">
                        <span><img src="<?php echo get_template_directory_uri();?>/assets/images/pen.png" alt=""></span>
                        <a href="<?php echo $settings['list_text1_link'];?>"><?php echo $settings['list_text1'];?></a>
                    </div>
                    <div class="hero-link">
                        <span><img src="<?php echo get_template_directory_uri();?>/assets/images/y.png" alt=""></span>
                        <a href="<?php echo $settings['list_text2_link'];?>"><?php echo $settings['list_text2'];?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-right-content">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/analyse.png" alt="">
                </div>
            </div>
        </div>

        <div class="feature-area">
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-box">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon.png" alt="">
                        <h3><?php echo $settings['fetures_title1'];?></h3>
                        <p>
						<?php echo $settings['item_description1'];?>
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-box">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon2.png" alt="">
                        <h3><?php echo $settings['fetures_title2'];?></h3>
                        <p>
						<?php echo $settings['item_description2'];?>
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-box">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon3.png" alt="">
                        <h3><?php echo $settings['fetures_title3'];?></h3>
                        <p>
						<?php echo $settings['item_description3'];?>
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-box">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon4.png" alt="">
                        <h3><?php echo $settings['fetures_title4'];?></h3>
                        <p>
						<?php echo $settings['item_description4'];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

		<?php
		$html = ob_get_clean();
		echo $html;
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	
}

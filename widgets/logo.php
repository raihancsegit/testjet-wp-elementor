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
class Logo extends Widget_Base {

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
		return 'logo';
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
		return __( 'Logo', 'elementor-hello-world' );
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
				'label' => __( 'Logo 1', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'title1',
			[
				'label' => __( 'Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'HP', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'image1',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_content2',
			[
				'label' => __( 'Logo 2', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'title2',
			[
				'label' => __( 'Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Our', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'image2',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_content3',
			[
				'label' => __( 'Logo 3', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'title3',
			[
				'label' => __( 'Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'microsoft', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'image3',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_content4',
			[
				'label' => __( 'Logo 4', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'title4',
			[
				'label' => __( 'Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Apple', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'image4',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_content5',
			[
				'label' => __( 'Logo 5', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'title5',
			[
				'label' => __( 'Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Google', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'image5',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_content6',
			[
				'label' => __( 'Logo 6', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'title6',
			[
				'label' => __( 'Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'IBM', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'image6',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
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
				'name' => 'title_typography',
				'label' => __( 'Title Typography', 'elementor-hello-world' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .logo-section h4',
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
        
		<div class="logo-section">
            <div class="row">
                <div class="col-2 text-center"> 
                    <img src="<?php echo $settings['image1']['url']?>">
                    <h4>microsoft</h4>
                </div>

                <div class="col-2 text-center"> 
                    <img src="<?php echo $settings['image2']['url']?>">
                    <h4>hp</h4>
                </div>

                <div class="col-2 text-center"> 
                    <img src="<?php echo $settings['image3']['url']?>">
                    <h4>Logo Name</h4>
                </div>

                <div class="col-2 text-center"> 
                    <img src="<?php echo $settings['image4']['url']?>">
                    <h4>Apple</h4>
                </div>

                <div class="col-2 text-center"> 
                    <img src="<?php echo $settings['image5']['url']?>">
                    <h4>Google</h4>
                </div>

                <div class="col-2 text-center"> 
                    <img src="<?php echo $settings['image6']['url']?>">
                    <h4>IBM</h4>
                </div>

            </div>
        </div>

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

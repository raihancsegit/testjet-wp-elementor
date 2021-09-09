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
class CallToAction extends Widget_Base {

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
		return 'calltoaction';
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
		return __( 'Call To Action', 'elementor-hello-world' );
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
				'default' => __( 'Start testing with testjet', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_title1',
			[
				'label' => __( 'Button Title 1', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Start For free', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_title1_link',
			[
				'label' => __( 'Button Link 1', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'btn_title2',
			[
				'label' => __( 'Button Title 2', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Schedule A demo', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_title2_link',
			[
				'label' => __( 'Button Link 2', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
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
				'selector' => '{{WRAPPER}} .footer-top-section h2',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'label' => __( 'Sub Title Typography', 'elementor-hello-world' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .feture-sub',
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
        <div class="footer-top-section">
			<h2><?php echo $settings['title'];?></h2>
			<div class="btn-two">
				<a href="<?php echo $settings['btn_title1_link'];?>" class="footer-top-btn1">
					<?php echo $settings['btn_title1'];?>
				</a>
				<a href="<?php echo $settings['btn_title2_link'];?>" class="footer-top-btn2">
					<?php echo $settings['btn_title2'];?>
			    </a>
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

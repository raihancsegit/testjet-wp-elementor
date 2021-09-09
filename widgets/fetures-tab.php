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
class Fetures extends Widget_Base {

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
		return 'fetures';
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
		return __( 'Fetures', 'elementor-hello-world' );
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
			'fetures_content1',
			[
				'label' => __( 'Fetures 1', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_title1',
			[
				'label' => __( 'Button Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 1', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_title1',
			[
				'label' => __( 'Content Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 1', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_desc1',
			[
				'label' => __( 'Content Desc', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_image1',
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
			'fetures_content2',
			[
				'label' => __( 'Fetures 2', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_title2',
			[
				'label' => __( 'Button Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 2', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_title2',
			[
				'label' => __( 'Content Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 2', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_desc2',
			[
				'label' => __( 'Content Desc', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_image2',
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
			'fetures_content3',
			[
				'label' => __( 'Fetures 3', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_title3',
			[
				'label' => __( 'Button Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 3', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_title3',
			[
				'label' => __( 'Content Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 3', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_desc3',
			[
				'label' => __( 'Content Desc', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_image3',
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
			'fetures_content4',
			[
				'label' => __( 'Fetures 4', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_title4',
			[
				'label' => __( 'Button Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 4', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_title4',
			[
				'label' => __( 'Content Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 4', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_desc4',
			[
				'label' => __( 'Content Desc', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_image4',
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
			'fetures_content5',
			[
				'label' => __( 'Fetures 5', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_title5',
			[
				'label' => __( 'Button Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 5', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_title5',
			[
				'label' => __( 'Content Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 5', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_desc5',
			[
				'label' => __( 'Content Desc', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_image5',
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
			'fetures_content6',
			[
				'label' => __( 'Fetures 6', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'btn_title6',
			[
				'label' => __( 'Button Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 6', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_title6',
			[
				'label' => __( 'Content Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Fetures 6', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_desc6',
			[
				'label' => __( 'Content Desc', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'content_image6',
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
				'name' => 'tab_typography',
				'label' => __( 'Tab Button Typography', 'elementor-hello-world' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .feture-tab-section .nav-link',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'tab_con_typography',
				'label' => __( 'Tab Content Typography', 'elementor-hello-world' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .fetu-con h4,.fetu-con p',
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
        
		<div class="feture-tab-section">
         <div class="container">
               <div class="row">
                  <div class="col-3">
                    <div class="nav flex-column nav-pills tab-cls" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $settings['btn_title1'];?></a>
                      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><?php echo $settings['btn_title2'];?></a>
                      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><?php echo $settings['btn_title3'];?></a>
                      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><?php echo $settings['btn_title4'];?></a>
                      <a class="nav-link" id="v-pills-settings5-tab" data-toggle="pill" href="#v-pills-settings5" role="tab" aria-controls="v-pills-settings5" aria-selected="false"><?php echo $settings['btn_title5'];?></a>
                      <a class="nav-link" id="v-pills-settings6-tab" data-toggle="pill" href="#v-pills-settings6" role="tab" aria-controls="v-pills-settings6" aria-selected="false"><?php echo $settings['btn_title6'];?></a>
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                          <div class="row">
                                <div class="col-6">
                                      <div class="image-sec">
                                        <img src="<?php echo $settings['content_image1']['url']?>" />
                                     </div>
                                </div>

                                <div class="col-6">
                                    <div class="fetu-con">
                                        <h4><?php echo $settings['content_title1'];?></h4>
                                        <p> <?php echo $settings['content_desc1'];?></p>
                                    </div>
                                </div>
                            </div>

                      </div>
                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

					  <div class="row">
                                <div class="col-6">
                                      <div class="image-sec">
                                        <img src="<?php echo $settings['content_image2']['url']?>" />
                                     </div>
                                </div>

                                <div class="col-6">
                                    <div class="fetu-con">
                                        <h4><?php echo $settings['content_title2'];?></h4>
                                        <p> <?php echo $settings['content_desc2'];?></p>
                                    </div>
                                </div>
                            </div>
					  </div>
                      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
					  <div class="row">
                                <div class="col-6">
                                      <div class="image-sec">
                                        <img src="<?php echo $settings['content_image3']['url']?>" />
                                     </div>
                                </div>

                                <div class="col-6">
                                    <div class="fetu-con">
                                        <h4><?php echo $settings['content_title3'];?></h4>
                                        <p> <?php echo $settings['content_desc3'];?></p>
                                    </div>
                                </div>
                            </div>
					  </div>

                      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
					  		<div class="row">
                                <div class="col-6">
                                      <div class="image-sec">
                                        <img src="<?php echo $settings['content_image4']['url']?>" />
                                     </div>
                                </div>

                                <div class="col-6">
                                    <div class="fetu-con">
                                        <h4><?php echo $settings['content_title4'];?></h4>
                                        <p> <?php echo $settings['content_desc4'];?></p>
                                    </div>
                                </div>
                            </div>
					  </div>

					  <div class="tab-pane fade" id="v-pills-settings5" role="tabpanel" aria-labelledby="v-pills-settings5-tab">
					  		<div class="row">
                                <div class="col-6">
                                      <div class="image-sec">
                                        <img src="<?php echo $settings['content_image5']['url']?>" />
                                     </div>
                                </div>

                                <div class="col-6">
                                    <div class="fetu-con">
                                        <h4><?php echo $settings['content_title5'];?></h4>
                                        <p> <?php echo $settings['content_desc5'];?></p>
                                    </div>
                                </div>
                            </div>
					  </div>

					  <div class="tab-pane fade" id="v-pills-settings6" role="tabpanel" aria-labelledby="v-pills-settings6-tab">
					  		<div class="row">
                                <div class="col-6">
                                      <div class="image-sec">
                                        <img src="<?php echo $settings['content_image6']['url']?>" />
                                     </div>
                                </div>

                                <div class="col-6">
                                    <div class="fetu-con">
                                        <h4><?php echo $settings['content_title6'];?></h4>
                                        <p> <?php echo $settings['content_desc6'];?></p>
                                    </div>
                                </div>
                            </div>
					  </div>


                    </div>
                  </div>
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

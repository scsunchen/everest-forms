<?php
/**
 * Total field
 *
 * @package EverestForms\Fields
 * @since   1.2.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * EVF_Field_Total Class.
 */
class EVF_Field_Total extends EVF_Form_Fields {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->name   = esc_html__( 'Total', 'everest-forms-pro' );
		$this->type   = 'payment-total';
		$this->icon   = 'evf-icon evf-icon-total';
		$this->order  = 30;
		$this->group  = 'payment';
		$this->is_pro = true;

		parent::__construct();
	}
}

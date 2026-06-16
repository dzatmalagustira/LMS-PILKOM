/**
 * sortable
 */
wp.customize.controlConstructor['abiz-sortable'] = wp.customize.Control.extend({

	ready: function() {

		'use strict';

		var control = this;

		// Set the sortable container.
		control.sortableContainer = control.container.find( 'ul.sortable' ).first();

		// Init sortable.
		control.sortableContainer.sortable({

			// Update value when we stop sorting.
			stop: function() {
				control.updateValue();
			}
		}).disableSelection().find( 'li' ).each( function() {

				// Enable/disable options when we click on the eye of Thundera.
				jQuery( this ).find( 'i.visibility' ).click( function() {
					jQuery( this ).toggleClass( 'dashicons-visibility-faint' ).parents( 'li:eq(0)' ).toggleClass( 'invisible' );
				});
		}).click( function() {

			// Update value on click.
			control.updateValue();
		});
	},

	/**
	 * Updates the sorting list
	 */
	updateValue: function() {

		'use strict';

		var control = this,
		newValue = [];

		this.sortableContainer.find( 'li' ).each( function() {
			if ( ! jQuery( this ).is( '.invisible' ) ) {
				newValue.push( jQuery( this ).data( 'value' ) );
			}
		});

		control.setting.set( newValue );
	}
});

/**
 * Control: Toggle.
 */
wp.customize.controlConstructor['abiz-toggle'] = wp.customize.Control.extend( {
	// When we're finished loading continue processing
	ready: function () {
		'use strict';

		var control = this;

		// Init the control.
		if (
			!_.isUndefined( window.abizControlLoader ) &&
			_.isFunction( abizControlLoader )
		) {
			abizControlLoader( control );
		} else {
			control.initAbizControl();
		}
	},

	initAbizControl: function () {
		var control       = this,
		    checkboxValue = control.setting._value;

		// Save the value
		this.container.on( 'change', 'input', function () {
			checkboxValue = jQuery( this ).is( ':checked' ) ? true : false;
			control.setting.set( checkboxValue );
		} );
	}
} );
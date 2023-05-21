( function( api ) {

	// Extends our custom "tiffany-lite" section.
	api.sectionConstructor['tiffany-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
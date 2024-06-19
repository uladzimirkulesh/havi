wp.domReady( () => {

	// Unregister default button styles
	wp.blocks.unregisterBlockStyle( 'core/button', 'fill' );
	wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );
	wp.blocks.unregisterBlockStyle( 'core/quote', 'default' );
	wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );

	// Register group block with global padding
	wp.blocks.registerBlockStyle( 'core/group', {
		name: 'has-global-padding',
		label: 'Has global padding'
	} );

	// Styles variation for post terms
	wp.blocks.registerBlockStyle( 'core/post-terms', {
		name: 'pill',
		label: 'Pill'
	} );

} );

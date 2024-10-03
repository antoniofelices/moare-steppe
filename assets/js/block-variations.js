wp.domReady( function() {

	wp.blocks.registerBlockVariation( 'core/media-text', {
		name: 'ms-media-text',
		title: 'Media Text',
		description: 'Custom default media text. Image to the left, group to the right.',
		attributes: {
			align: 'full',
			backgroundColor: 'gray-lightest',
			className: 'ms-media-text',
			imageFill: true,
			textColor: 'text-color',
			verticalAlignment: 'center',
		},
		innerBlocks: [
			[
				'core/group',
				{
					style: {
						"spacing": {
							"padding": {
								"top": "2rem",
								"right": "0",
								"bottom": "2rem",
								"left": "0"
							}
						}
					},
				} 
			],

		],
		isDefault: true,
	} );


})
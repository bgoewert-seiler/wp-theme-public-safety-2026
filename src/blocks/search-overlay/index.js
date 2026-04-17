import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import './style.css';

// Register the edit component for the block
// Block metadata is defined in block.json and registered in PHP
wp.blocks.registerBlockType('seiler-2026/search-overlay', {
	edit: ({ attributes, setAttributes }) => {
		const blockProps = useBlockProps({
			className: 'header-search-block'
		});

		return (
			<>
				<InspectorControls>
					<PanelBody title={__('Search Settings', 'seiler-2026')}>
						<TextControl
							label={__('Placeholder', 'seiler-2026')}
							value={attributes.placeholder}
							onChange={(value) => setAttributes({ placeholder: value })}
						/>
						<TextControl
							label={__('Button Text', 'seiler-2026')}
							value={attributes.buttonText}
							onChange={(value) => setAttributes({ buttonText: value })}
						/>
					</PanelBody>
				</InspectorControls>

				<div {...blockProps}>
					<div style={{ display: 'flex', alignItems: 'center', gap: '10px', padding: '10px', background: '#f9f9f9', border: '1px solid #ddd', borderRadius: '4px' }}>
						<button type="button" className="header-search-toggle" style={{ pointerEvents: 'none' }}>
							<span className="dashicons dashicons-search"></span>
						</button>
						<span style={{ fontSize: '12px', color: '#666' }}>
							Search button (overlay opens on frontend)
						</span>
					</div>
				</div>
			</>
		);
	},

	// Dynamic block - rendered server-side in PHP
	save: () => {
		return null;
	}
});

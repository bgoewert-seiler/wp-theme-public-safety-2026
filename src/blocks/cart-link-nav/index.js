import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import './style.css';

// Register the edit component for the block
// Block metadata is defined in block.json and registered in PHP
wp.blocks.registerBlockType('seiler-2026/cart-link-nav', {
	edit: ({ attributes, setAttributes }) => {
		const blockProps = useBlockProps({
			className: 'cart-link-nav-block'
		});

		return (
			<>
				<InspectorControls>
					<PanelBody title={__('Cart Link Settings', 'seiler-2026')}>
						<ToggleControl
							label={__('Show Icon', 'seiler-2026')}
							checked={attributes.showIcon}
							onChange={(value) => setAttributes({ showIcon: value })}
						/>
						<ToggleControl
							label={__('Show Text', 'seiler-2026')}
							checked={attributes.showText}
							onChange={(value) => setAttributes({ showText: value })}
						/>
						<ToggleControl
							label={__('Show Count', 'seiler-2026')}
							checked={attributes.showCount}
							onChange={(value) => setAttributes({ showCount: value })}
						/>
					</PanelBody>
				</InspectorControls>

				<div {...blockProps}>
					<a href="/cart" className="cart-link-nav">
						{attributes.showIcon && (
							<span className="dashicons dashicons-cart"></span>
						)}
						{attributes.showText && (
							<span className="cart-text">Cart</span>
						)}
						{attributes.showCount && (
							<span className="cart-count">(0)</span>
						)}
					</a>
				</div>
			</>
		);
	},

	// Dynamic block - rendered server-side in PHP
	save: () => {
		return null;
	}
});

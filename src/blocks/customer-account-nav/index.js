import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import './style.css';

// Register the edit component for the block
// Block metadata is defined in block.json and registered in PHP
wp.blocks.registerBlockType('seiler-2026/customer-account-nav', {
	edit: ({ attributes, setAttributes }) => {
		const blockProps = useBlockProps({
			className: 'customer-account-nav-block'
		});

		return (
			<>
				<InspectorControls>
					<PanelBody title={__('Account Settings', 'seiler-2026')}>
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
							label={__('Show Dropdown Menu', 'seiler-2026')}
							checked={attributes.showDropdown}
							onChange={(value) => setAttributes({ showDropdown: value })}
						/>
						<TextControl
							label={__('Logged Out Text', 'seiler-2026')}
							value={attributes.loggedOutText}
							onChange={(value) => setAttributes({ loggedOutText: value })}
						/>
					</PanelBody>
				</InspectorControls>

				<div {...blockProps}>
					<div className="customer-account-nav" style={{ display: 'flex', alignItems: 'center', gap: '5px' }}>
						{attributes.showIcon && (
							<span className="dashicons dashicons-admin-users"></span>
						)}
						{attributes.showText && (
							<span className="account-text">{attributes.loggedOutText}</span>
						)}
						{attributes.showDropdown && (
							<span className="dashicons dashicons-arrow-down-alt2" style={{ fontSize: '12px' }}></span>
						)}
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

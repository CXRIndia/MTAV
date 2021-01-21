import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import './block2-style.scss';

import Block2_Edit from './block2-edit';
import Block2_save from './block2-save';

registerBlockType('clabs-gutenberg/clabs-2', {
	apiVersion: 2,
	title: __('Test block duplicate', 'clabs'),
	description: __('This is example test block 222', 'clabs'),
	category: 'widgets',
	icon: 'smiley',
	supports: {
		html: true,
	},

	edit: Block2_Edit,
	save: Block2_save,
});

import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import './style.scss';

import Edit from './edit';
import save from './save';

import Clab2_Edit from './clab2-edit';
import Clab2_save from './clab2-save';

registerBlockType('clabs-gutenberg/clabs', {
	apiVersion: 2,
	title: __('Test block', 'clabs'),
	description: __('This is example test block', 'clabs'),
	category: 'widgets',
	icon: 'smiley',
	supports: {
		html: true,
	},

	edit: Edit,
	save,
});


registerBlockType('clabs-gutenberg/clabs-2', {
	apiVersion: 2,
	title: __('Test block duplicate', 'clabs'),
	description: __('This is example test block 222', 'clabs'),
	category: 'widgets',
	icon: 'smiley',
	supports: {
		html: true,
	},

	edit: Clab2_Edit,
	save: Clab2_save,
});

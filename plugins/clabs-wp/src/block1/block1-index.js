import {
	registerBlockType
} from '@wordpress/blocks';
import {
	__
} from '@wordpress/i18n';
import './block1-style.scss';

const {
	RichText
} = wp.editor;

import Edit from './block1-edit';
import save from './block1-save';

registerBlockType('clabs-gutenberg/block1', {
	apiVersion: 2,
	title: __('Test block', 'clabs'),
	description: __('This is example test block', 'clabs'),
	category: 'widgets',
	icon: 'smiley',
	supports: {
		html: true,
	},

	attributes: {
		textString: {
			type: 'array',
			source: 'children',
			selector: 'h2',
		}
	},

	edit(props) {
        const { setAttributes, attributes } = props;
        function onTextChange(changes) {
            setAttributes({
                textString: changes
            });
        }

        return (
            <RichText
                tagName="h2"
                value={attributes.textString}
                onChange={onTextChange}
                placeholder="Enter your text here!"
                />
        );
	},

	save(props) {
		const { attributes } = props;
		return (
			<h2>{attributes.textString}</h2>
		);
	},

	// edit: (props) => Edit,
	// save: (props) => save,
});

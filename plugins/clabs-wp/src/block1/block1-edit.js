import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

import './block1-editor.scss';


const {	RichText } = wp.editor;

export default function Edit() {

	const blockProps = useBlockProps();

	const { setAttributes, attributes } = { ...blockProps };

	function onTextChange(changes) {
		// works very much like setState
		setAttributes({
			textString: changes
		});
	}

	return (
		<div { ...blockProps } >
			<RichText
				tagName="h2"
				value={attributes.textString}
				onChange={onTextChange}
				placeholder="Enter your text here!"
				/>
		</div>
	);
}
